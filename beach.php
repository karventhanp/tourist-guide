<?php
session_start();
if(!isset($_SESSION['ID']))
{
  header("Location:index.php?error=you+are+not+login");
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Top 10 Beaches in TamilNadu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.min.css">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/beach.css">
  <link rel="icon" href="images/icon.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style type="text/css">
    .modal-header{
      background-image:linear-gradient(-90deg,#66ffff,#66ff33);
      color:white;
      border:1px solid yellow;
      }
  </style>
</head>
<body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Tourist Places in TamilNadu</a>  
          </div>
          <ul class="nav navbar-nav">
            <li><a href="main.php"><span class="glyphicon glyphicon-home">&ensp;Home</span></a></li>
            <li><a href="temple.php"><span class="glyphicon glyphicon-road">&ensp;Temples</span></a></li>
            <li><a href="hill.php"><span class="glyphicon glyphicon-oil">&ensp;Hill&ensp;Stations</a></li>           
            <li class="active"><a href="beach.php"><span class="glyphicon glyphicon-cloud">&ensp;Beaches</a></li>
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
      <div class="container-fluid p-3 my-3">
      <h4 class="text-center">Top 10 Beaches in TamilNadu</h4>
      </div>
      <div class="container">      	           	     
      	<div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/covelong.jpg" data-toggle="modal" data-target="#covelong">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Covelong Beach</h4>
                          <p class="card-text text-primary">Covelong Beach is actually Kovalam beach that is located on the coast of the Bay of Bengal near a village named Covelong, Chennai, India. The British, unable to pronounce the name "Kovalam", conveniently named it Covelong.</p>
                          <div class="modal fade" id="covelong" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=1;include 'samplebeach.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['beachname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/covelong.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Best Time to Visit:</h4>
                                           <ul> 
                                                <?php include'samplebeach.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['best']);}
                                                  ?>
                                          </ul>                                         
                                        <h4 class="text-primary">Places to Visit Near Covelong Beach:</h4>
                                          <ul>      <?php include 'samplebeach.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'samplebeach.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?> </li>                                                        
                                        </ul>

                                        </b>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>      
                                      </div>
                                    </div>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/marina.jpg" data-toggle="modal" data-target="#marina">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Marina Beach</h4>
                          <p class="card-text text-primary">Marina Beach is a natural urban beach in Chennai, Tamil Nadu, India, along the Bay of Bengal.The beach runs from near Fort St.George in the north to Foreshore Estate in the south, a distance of 6.0 km.</p>
                          <div class="modal fade" id="marina" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=2;include 'samplebeach.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['beachname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/marina.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Best Time to Visit:</h4>
                                           <ul><li>
                                                <?php include'samplebeach.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['best']);}
                                                  ?></li>
                                          </ul>                                         
                                        <h4 class="text-primary">Places to Visit Near Marina Beach:</h4>
                                          <ul>      <?php include 'samplebeach.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'samplebeach.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?> </li>                                                        
                                        </ul>

                                        </b>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>      
                                      </div>
                                    </div>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/kanyakumari.jpg" data-toggle="modal" data-target="#kanyakumari">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Kanyakumari Beach</h4>
                          <p class="card-text text-primary">Kanyakumari Beach is one of the most pristine beaches in the waterfront town of Kanyakumari.Beauty oozes here in the form of soft golden sand that is overlapped by shimmering waters of the endless sea.</p>
                          <div class="modal fade" id="kanyakumari" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=3;include 'samplebeach.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['beachname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/kanyakumari.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Best Time to Visit:</h4>
                                           <ul><li>
                                                <?php include'samplebeach.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['best']);}
                                                  ?></li>
                                          </ul>                                         
                                        <h4 class="text-primary">Places to Visit Near Kanyakumari Beach:</h4>
                                          <ul>      <?php include 'samplebeach.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'samplebeach.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?> </li>                                                        
                                        </ul>

                                        </b>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>      
                                      </div>
                                    </div>
                        </div>
                        </div>  
        </div>
        </div>
        <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/dhanushkodi.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Dhanushkodi Beach</h4>
                          <p class="card-text text-primary">Dhanushkodi Beach lies on the tip of the Rameswaram island.In this beach, the Bay of Bengal and Indian Ocean merge which is known as Arichal Munai in Tamil.Before 1964, Dhanushkodi was a busy city with lots of crowds. The Dhanushkodi Beach attracted thousands of tourists each day.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/mahabalipuram.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Mahabalipuram Beach</h4>
                          <p class="card-text text-primary">Also known as Mamallapuram by locals, the Mahabalipuram Beach is situated at a distance of 58 km from the Chennai city in Tamil Nadu. The beach lies on the shore of Bay of Bengal and comprises of some rock-cut sculptures which are pleasing to the eyes.This charming beach is one of the perfect places in India for sunbath.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/silver.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Silver Beach</h4>
                          <p class="card-text text-primary">Silver Beach is a beach on the southeast coast of India. It is located 2 km (1.2 mi) from downtown Cuddalore, the headquarters of Cuddalore district in the state of Tamil Nadu. Silver Beach, however, is untouched by the busy life of the city. It is the second longest beach on the Coromandel Coast and one of the longest beaches in Asia. </p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/golden.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Golden Beach</h4>
                          <p class="card-text text-primary">Tamilnadu is a beach located on the Bay of Bengal in Chennai, India. VGP Golden Beach is a major tourist attraction in Chennai. It is situated on the East Coast Road,the seaside road from Chennai to Cuddalore via Pondicherry.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/poompuhar.jpeg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Boompuhar Beach</h4>
                          <p class="card-text text-primary">Poompuhar Beach is a natural and ancient beach located in Poompuhar, Tamil Nadu, India, along the Bay of Bengal. The beach starts from the Kaveri river and extends around 3 km north side towards Neithavasal.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/elliots.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Elliots's Beach</h4>
                          <p class="card-text text-primary">Elliot's Beach is located in Besant Nagar, Chennai, India.It forms the end-point of the Marina Beach shore,and is named after Edward Elliot, onetime chief magistrate and superintendent of police, Madras.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/thiruchendur.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Thiruchendur Beach</h4>
                          <p class="card-text text-primary">The Thiruchendur beach is a beautiful beach located close to Kanyakumari in the small temple town of Thiruchendur. It is a famous spot for couples as well as families. Couples can have long romantic walks on the beach while families can enjoy the sea waves, relax and spend some quality time in the lap of nature.</p>
                        </div>
                        </div>  
        </div>
        
        </div>
      </div>
      	<script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>    
	</body>
</html>