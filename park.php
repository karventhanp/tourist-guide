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
	<title>Top 10 Sanctuaries and NationalPark's in TamilNadu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.min.css">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/park.css">
  <link rel="icon" href="icon.png">
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
            <li><a href="beach.php"><span class="glyphicon glyphicon-cloud">&ensp;Beaches</a></li>
            <li><a href="dam.php"><span class="glyphicon glyphicon-inbox">&ensp;Dam's</a></li>
            <li class="active"><a href="park.php"><span class="glyphicon glyphicon-piggy-bank">&ensp;Sanctuaries&ensp;&&ensp;National&ensp;Park's</a></li>
            <li><a href="fort.php"><span class="glyphicon glyphicon-tower">&ensp;Fort's</a></li>
    				<li class="nav-item"><a class="nav-link"href="about.php"><span class="glyphicon glyphicon-about">&ensp;About</span></a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php" class="glyphicon glyphicon-log-out">&ensp;SignOut</a></li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid p-3 my-3">
      <h4 class="text-center">Top 10 Sanctuaries and NationalPark's in TamilNadu</h4>
      </div>
      <div class="container">      	           	     
      	<div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/mudumalai.jpg" data-toggle="modal" data-target="#mudumalai">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Mudumalai National Park</h4>
                          <p class="card-text text-primary">The Mudumalai National Park and Wildlife Sanctuary also a declared tiger reserve, lies on the northwestern side of the Nilgiri Hills,in Nilgiri District, about 150 kilometres north-west of Coimbatore city in Tamil Nadu.</p>
                          <div class="modal fade" id="mudumalai" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=1;include 'samplepark.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['parkname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/mudumalai.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Best Time to Visit:</h4>
                                           <ul>
                                                <?php include'samplepark.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['best']);}
                                                  ?>
                                          </ul> 
                                          <h4 class="text-primary">Famous For:</h4>
                                           <ul>
                                                <?php include'samplepark.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?>
                                          </ul>                                        
                                        <h4 class="text-primary">Duration:</h4>
                                          <ul>      <?php include 'samplepark.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['duration']);}
                                                  ?>                                                         
                                        </ul> 
                                         <h4 class="text-primary">Entry Fee:</h4>
                                          <ul>      <?php include 'samplepark.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['fee']);}
                                                  ?>                                                         
                                        </ul> 
                                         <h4 class="text-primary">Places to Visit Near Mudumalai National Park:</h4>
                                          <ul>      <?php include 'samplepark.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'samplepark.php';
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/indira.jpg" data-toggle="modal" data-target="#indira">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Indira Gandhi Wildlife Sanctuary</h4>
                          <p class="card-text text-primary">Aanaimalai Tiger Reserve, earlier known as Indira Gandhi Wildlife Sanctuary and National Park and previously as Aanaimalai Wildlife Sanctuary, is a protected area located in the Anaimalai Hills of Pollachi.</p>
                          <div class="modal fade" id="indira" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=2;include 'samplepark.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['parkname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/indira.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Best Time to Visit:</h4>
                                           <ul><li>
                                                <?php include'samplepark.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['best']);}
                                                  ?></li>
                                          </ul> 
                                          <h4 class="text-primary">Famous For:</h4>
                                           <ul>
                                                <?php include'samplepark.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?>
                                          </ul>                                        
                                        <h4 class="text-primary">Duration:</h4>
                                          <ul>      <?php include 'samplepark.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['duration']);}
                                                  ?>                                                         
                                        </ul> 
                                         <h4 class="text-primary">Entry Fee:</h4>
                                          <ul>      <?php include 'samplepark.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['fee']);}
                                                  ?>                                                         
                                        </ul> 
                                         <h4 class="text-primary">Places to Visit Near Indira Gandhi Wildlife Sanctuary:</h4>
                                          <ul>      <?php include 'samplepark.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'samplepark.php';
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/point.jpg" data-toggle="modal" data-target="#point">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Point Calimere Wildlife and Bird Sanctuary</h4>
                          <p class="card-text text-primary">Point Calimere Wildlife and Bird Sanctuary is a 21.47-square-kilometre protected area in Tamil Nadu.It is famous for large congregations of waterbirds, especially greater flamingos.</p>
                          <div class="modal fade" id="point" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=3;include 'samplepark.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['parkname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/point.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Best Time to Visit:</h4>
                                           <ul><li>
                                                <?php include'samplepark.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['best']);}
                                                  ?></li>
                                          </ul> 
                                          <h4 class="text-primary">Famous For:</h4>
                                           <ul><li>
                                                <?php include'samplepark.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?></li>
                                          </ul>                                        
                                        <h4 class="text-primary">Duration:</h4>
                                          <ul>     <?php include 'samplepark.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['duration']);}
                                                  ?>                                                     
                                        </ul> 
                                         <h4 class="text-primary">Entry Fee:</h4>
                                          <ul><li>      <?php include 'samplepark.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['fee']);}
                                                  ?>  </li>                                                       
                                        </ul> 
                                         <h4 class="text-primary">Places to Visit Near Point Calimere Wildlife and Bird Sanctuary:</h4>
                                          <ul>      <?php include 'samplepark.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'samplepark.php';
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/avalanche.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Avalanche Lake </h4>
                          <p class="card-text text-primary">Avalanchi Lake is an important tourism destination in the Nilgiris district. The lake is surrounded by a rolling landscape with blooming flowers like magnolias, orchids and rhododendrons. Tourists can traverse beside the lake through winding paths around the lake.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/arignar.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Arignar Anna Zoological Park</h4>
                          <p class="card-text text-primary">Arignar Anna Zoological Park,also known as the Vandalur Zoo, is a zoological garden located in Vandalur,about 31 kilometresfrom the Chennai Central and 15 km from Chennai Airport.Established in 1855, it is the first public zoo in India.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/vedanthagal.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Vedanthangal Bird Sanctuary</h4>
                          <p class="card-text text-primary">Vedanthangal Bird Sanctuary is a 30-hectare protected area located in the Kanchipuram District and Madurantakam taluk of the state of Tamil Nadu, India. The sanctuary is about 75 kilometres from Chennai on National Highway 45.Easily reachable from Madurantakam and Chengalpattu. </p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/koonthakulam.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Koonthankulam Bird Sanctuary</h4>
                          <p class="card-text text-primary">Koonthankulam Bird Sanctuary or Kunthankulam is a 1.2933 km2 protected area declared as a sanctuary in 1994.It adjoins the tiny village of Koonthankulam in Nanguneri Taluk of Tirunelveli district, Tamil Nadu, India.This is the largest reserve for breeding water birds in South India.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/kalakkad.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Kalakkad Mundanthurai Tiger Reserve</h4>
                          <p class="card-text text-primary">The Kalakkad Mundanthurai Tiger Reserve was created in 1988 by combining Kalakad Wildlife Sanctuary and Mundanthurai Wildlife Sanctuary,both established in 1962.A 400 km2 core area of this reserve has been proposed as a national park.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/amirthi.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Amirthi Zoological Park</h4>
                          <p class="card-text text-primary">Amirthi Zoological Park is a zoo in Tiruvannamalai District in the Indian state of Tamil Nadu.It was opened in 1967 and is about 55 km from district headquarters Tiruvannamalai city and 25 kilometres from the Vellore city.The area of the park is 25 hectares and one can find beautiful water falls</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/mukurthi.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Mukurthi National Park</h4>
                          <p class="card-text text-primary">TMukurthi National Park is a 78.46 km2 protected area located in the western corner of the Nilgiris Plateau west of Ootacamund hill station in the northwest corner of Tamil Nadu state in the Western Ghats mountain range of South India.</p>
                        </div>
                        </div>  
        </div>
        
        </div>
      </div>
      	<script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>    
	</body>
</html>