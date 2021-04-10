<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking</title>	
	<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.css">
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/hotel.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.min.css">
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

</head>
<body>
	<div class="container">
    
		<div id="car" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#car" data-slide-to="0" class="active"></li>
    <li data-target="#car" data-slide-to="1"></li>
    <li data-target="#car" data-slide-to="2"></li>
    <li data-target="#car" data-slide-to="3"></li>
    <li data-target="#car" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img class="fit-image img-thumbnail" src="images/hotel.jpg">
    </div>
    <div class="item">
      <img class="fit-image img-thumbnail" src="images/hotel1.jpg">
    </div>
    <div class="item">
      <img class="fit-image img-thumbnail" src="images/hotel2.jpg">
    </div>
    <div class="item">
      <img class="fit-image img-thumbnail" src="images/hotel3.jpg">
    </div>
    <div class="item">
      <img class="fit-image img-thumbnail" src="images/hotel4.jpg">
    </div>       
  </div>
</div></br>
   <div class="row"> 
    	<div class="form-group col-sm-3">
    		  <div class="input-group"><div class="input-group-addon"><label class="text-primary">Check-in:<span class="glyphicon glyphicon-calendar"></span></label></div><input type="text" id="datepicker" name="date" class="form-control"></div>    		  	
       </div>	
    <div class="form-group col-sm-3">
    		  <div class="input-group"><div class="input-group-addon"><label class="text-primary">Check-out:<span class="glyphicon glyphicon-calendar"></span></label></div><input type="text" id="datepicker" name="date" class="form-control"></div>    		  	
       </div > 	
       <div class="col-sm-6">	
       <div style="text-align: right;">      
       <label class="text-danger" id="date"></label>
       <label class="text-warning" id="time"></label>
       </div></br></br>
     </div>
     </div>
       <div class="col-md-6">
          <h4 class="text-primary"><b><i>Hotel Facilities:</i></b></h4>
          <b class="text-warning">
          <dd>&emsp;-Parking facilities</dd>
          <dd>&emsp;-Swimming Pool</dd>
          <dd>&emsp;-Conference facilities</dd>
          <dd>&emsp;-Gymnasium</dd>
          <dd>&emsp;-Total 80 Rooms</dd>
          </b>
       </div>
       <div class="col-md-6">
          <h4 class="text-primary"><b><i>Room Facilities:</i></b></h4>
          <b class="text-warning">
          <dd>&emsp;-Air Conditioner/Non</dd>
          <dd>&emsp;-Cable/Satellite TV</dd>
          <dd>&emsp;-Free Wifi</dd>
          <dd>&emsp;-Safe deposit box</dd>
          <dd>&emsp;-Hairdryer</dd>
          </b>
       </div>
       <div class="row">
       <div class="form-group col-sm-3"></br></br>
       	<div class="input-group"><div class="input-group-addon"><label class="text-primary">Available Rooms:</label></div><input type="text" name="avg" class="form-control"></div>  
       </div>
       <div class="col-md-2"></br></br>
              <div class="input-group"><div class="input-group-addon"><label class="text-primary">AC:</label></div><input type="text" name="avg" class="form-control"></div>
        </div>
       <div class="col-md-2"></br></br>
               <div class="input-group"><div class="input-group-addon"><label class="text-primary">NON-AC:</label></div><input type="text" name="avg" class="form-control"></div>  
       </div><div class="col-md-5"></div>
      </div>
      <div class="row">
       <div class=" form-group col-sm-3"></br></br>
               <div class="input-group"><div class="input-group-addon"><label class="text-primary">Booked Rooms:</label></div><input type="text" name="booked" class="form-control"></div>  
       </div>
        <div class="col-md-2"></br></br>
              <div class="input-group"><div class="input-group-addon"><label class="text-primary">AC:</label></div><input type="text" name="avg" class="form-control"></div>
        </div>
       <div class="col-md-2"></br></br>
               <div class="input-group"><div class="input-group-addon"><label class="text-primary">NON-AC:</label></div><input type="text" name="avg" class="form-control"></div>  
       </div>
     </div>
     <div>
       <form method="POST" name="book">
            <label class="radio-inline">
                <input type="radio" name="optradio" checked>AC Room
            </label>
            <label class="radio-inline">
                <input type="radio" name="optradio">NON AC Room
            </label></br></br>
            
       </form>
     </div>
     <div></br>
     <button class="btn btn-success center-block btn-md" href="#"><label>Book Now</label></button>
   </div>
</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <script> 
     var cDate=new Date().toDateString();
     $('#date').html(cDate); 
     var cTime = new Date().toLocaleTimeString();
$('#time').html(cTime);
    </script>
    <script type="text/javascript">
      $(function(){
      $('.form-group #datepicker').datepicker({
        'format':'dd-mm-yyyy',
        'autoclose':true,
      });
    });
    </script>
    
</body>
</html>