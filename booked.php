<?php
session_start();
if(!isset($_SESSION['ID']))
{
  header("Location:index.php?error=you+are+not+login");
}
include_once "include/dbh.inc.php";
   $username=$_SESSION['username'];
   $userplace=$_SESSION['userplace'];
   $userdate=$_SESSION['userdate'];
   $sql="SELECT * FROM book WHERE name='$username' AND place='$userplace' AND dat='$userdate'";
   $result=mysqli_query($conn,$sql);
  	 if($result->num_rows>0)
  	 	{
  	 		while($row=$result->fetch_assoc())
  	 			{
  			 			$dname=$row['name'];
  			 			$dplace=$row['place'];
  			 			$dnotick=$row['notick'];
  			 			$ddate=$row['dat'];
  			 			$dage=$row['age'];
  			 			$dtourister=$row['tourister'];
  			 			$damount=$row['amount'];

	 			}
	 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tourtick</title>
	  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="icon" href="images/icon.png">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		body{
  			background-color:#666666;
  		}
  		#thead{
  			background-color:  #ffff66;
  		}
  		#tbody{
  			background-color: #0066ff;
  		}
  		.container{
  			position: absolute;
  			top:100px;
  			left: 120px;
  		}
  	</style>
</head>
<body>
    <div class="container">
    	<div class="row">
    		<table class="table table-bordered">
    			<thead id="thead">
    				<tr>
    					<th>Tourister Name</th><th>Place</th><th>No.of Tickets Booked</th><th>Visiting Date</th><th>Age Type</th><th>Tourister Type</th><th>Ticket Amount</th>
    				</tr>
    			</thead>
    			<tbody id="tbody" class="text-white">
    				<tr>
    					<td><?php echo $dname;?></td>
    					<td><?php echo $dplace;?></td>
    					<td><?php echo $dnotick;?></td>
    					<td><?php echo $ddate;?></td>
    					<td><?php echo $dage;?></td>
    					<td><?php echo $dtourister;?></td>
    					<td><?php echo $damount;?></td>

    				</tr>
    			</tbody>
    		</table>
    	</div>  
    	<center><a href="temple.php"><button type="button" class="btn btn-warning">Done</button></a>
    		<button type="button" class="btn btn-danger" onclick="printpage()">Print Ticket</button>
  		</center>
 </div>	
    <script type="text/javascript">
    	function printpage()
    	{
    		window.print();
    	}
    </script></center>  	    	     		
  </body>
</html>