<?php
session_start();
ob_start();
if(!isset($_SESSION['ID']))
{
  header("Location:index.php?error=you+are+not+login");
}
include_once "include/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Ticket</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.min.css">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/booking.css">
  <link rel="icon" href="images/icon.png">
	 <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Tourist Places in TamilNadu</a>  
          </div>
          <ul class="nav navbar-nav">
            <li><a href="main.php"><span class="glyphicon glyphicon-home">&ensp;Home</span></a></li>
            <li class="active"><a href="temple.php"><span class="glyphicon glyphicon-road">&ensp;Temples</span></a></li>
            <li><a href="hill.php"><span class="glyphicon glyphicon-oil">&ensp;Hill&ensp;Stations</a></li>           
            <li><a href="beach.php"><span class="glyphicon glyphicon-cloud">&ensp;Beaches</a></li>
            <li><a href="dam.php"><span class="glyphicon glyphicon-inbox">&ensp;Dam's</a></li>
            <li><a href="park.php"><span class="glyphicon glyphicon-piggy-bank">&ensp;Sanctuaries&ensp;&&ensp;National&ensp;Park's</a></li>
            <li><a href="fort.php"><span class="glyphicon glyphicon-tower">&ensp;Fort's</a></li>
    				<li class="nav-item"><a class="nav-link"href="about.php"><span class="glyphicon glyphicon-about">&ensp;About</span></a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" class="glyphicon glyphicon-log-out">&ensp;SignOut</a></li>
          </ul>
        </div>
</nav>
<article class="index-form">
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<form method="POST">
				<div class="form-group">
					<label for="name">Full name:</label>
					<input class="form-control" type="text" name="name" />
				</div>
				<div class="form-group">
					<label for="ticket">Number of Tickets:</label>
					<input class="form-control" type="text" name="ticket"/>
				</div>
				<div class="form-group">
					<label for="place">Tourist Place:</label><?php $sql1="SELECT  templename from temple where id=1";
					$result=mysqli_query($conn,$sql1);
					if($result->num_rows>0)
						{
							while($row=$result->fetch_assoc()){
                                    $place=$row['templename'];
							}
						} ?>
					<input class="form-control" type="text" name="place" value="<?php echo @$place; ?>" />
				</div>
				<div class="form-group">
					<label for="time">Visiting Date:</label>
					<input class="form-control" type="text" id="date" class="datepicker" name="date"/>
				</div>
				<div class="form-group">
					<label for="time">Age Type:</label>
					<select class="form-control" name="selection">
						<option selected disabled hidden value="null">None</option>
						<option value="Children">Children</option>
						<option value="Adult">Adult</option>
					<select>
				</div>					
				<label>Choose tourister type:</label>
				<div class="form-check">
  						&ensp;<input type="radio" class="form-check-input" value="Indian" name="country">
  						<label class="form-check-label" for="indian">Indian</label>
				</div>
				<div class="form-check">
  					&ensp;<input type="radio" class="form-check-input" value="Foreigner" name="country" unchecked>
  					<label class="form-check-label" for="foreigner">Foreigner</label>
				</div></br>				
			<center><input type="submit"  class="btn btn-success" formaction="booking.php" name="book" value="Submit"></center>
			</form>
		</div>
		<div class="col-sm-4"></div>
	</div>	
</div>
</article>
<script>
	
    $('#date').datepicker({
    	dateFormat:"yy-mm-dd",
      changeYear: true,
      changeMonth: true,
      });

</script>
<?php
if(isset($_POST["book"]))
{
    include_once 'include/dbh.inc.php';
    $name=$_POST['name'];
    $noticket=$_POST['ticket'];
    $date=$_POST['date'];
    $select=$_POST['selection'];
    $radio=$_POST['country'];
  
       if(empty($name)||empty($noticket)||empty($date)||empty($select)||empty($radio))
    {
    	header("Location:booking.php?error=allfieldsrequired");
    	exit();
    }
    else
    {
        if(is_numeric($noticket))
        {

           if($select=='Children')
           {
           	 $amount=$noticket*0;
           }
           else if(($radio=='Indian')&&($select=='Adult'))
           {
                $amount=$noticket*50;
           }
           else if(($radio=='Foreigner')&&($select=='Adult'))
           {
           	$amount=$noticket*100;
           }
          
           $sql3="INSERT INTO book(name,place,notick,dat,age,tourister,amount)VALUES(?,?,?,?,?,?,?);";
           $stmt=$conn->prepare($sql3);
           $stmt->bind_param("sssssss",$name,$place,$noticket,$date,$select,$radio,$amount);
           $stmt->execute();
           $_SESSION['username']=$name;
           $_SESSION['userplace']=$place;
           $_SESSION['userdate']=$date;
           header("Location:booked.php");	
        }
        else{
        	header("Location:booking.php?error=tickets should be numeric");
        }
    }

}
?>
</body>
</html>