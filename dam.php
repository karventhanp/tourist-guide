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
  <title>Top 10 Dam's in TamilNadu</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.min.css">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/dame.css">
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
            <li class="active"><a href="dam.php"><span class="glyphicon glyphicon-inbox">&ensp;Dam's</a></li>
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
      <h4 class="text-center">Top 10 Dam's in TamilNadu</h4>
      </div>
      <div class="container">                        
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/kallanai.jpg" data-toggle="modal" data-target="#kallanai">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Kallanai Dam</h4>
                          <p class="card-text text-primary">Kallanai is an ancient dam, which is built (in running water) across the Kaveri river in Thogur - Koviladi village, Budalur Taluk in Thanjavur District in the state of Tamil Nadu in India.The dam was originally built by King Karikalan of the Chola Dynasty in c. 100 BC – c. 100 AD</p>
                          <div class="modal fade" id="kallanai" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=1;include 'sampledam.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['damname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/kallanai.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Built By:</h4>
                                           <ul>
                                                <?php include'sampledam.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['builtby']);}
                                                  ?>
                                          </ul> 
                                          <h4 class="text-primary">Famous For:</h4>
                                           <ul><li>
                                                <?php include'sampledam.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?></li>
                                          </ul>                                        
                                        <h4 class="text-primary">Places to Visit Near Kallanai Dam:</h4>
                                          <ul>      <?php include 'sampledam.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'sampledam.php';
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/sholayar.jpg" data-toggle="modal" data-target="#sholayar">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Solayar Dam</h4>
                          <p class="card-text text-primary">The Solaiyar Dam is part of the Solaiyar Hydroelectric Project. The project comprises the main Soliayar Dam, the Solaiyar Flanking, and the Solaiyar Saddle Dam.Upper Solaiyar or Upper Sholayar Dam is located 20 km from Valparai, Tamil Nadu in India.</p>
                          <div class="modal fade" id="sholayar" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=2;include 'sampledam.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['damname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/sholayar.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Built By:</h4>
                                           <ul>
                                                <?php include'sampledam.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['builtby']);}
                                                  ?>
                                          </ul> 
                                          <h4 class="text-primary">Famous For:</h4>
                                           <ul><li>
                                                <?php include'sampledam.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?></li>
                                          </ul>                                        
                                        <h4 class="text-primary">Places to Visit Near Solayar Dam:</h4>
                                          <ul>      <?php include 'sampledam.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'sampledam.php';
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/aliyar.jpg" data-toggle="modal" data-target="#aliyar">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Aliyar Dam</h4>
                          <p class="card-text text-primary">Aliyar Dam is a charming location surrounded by Annamali Hills with wonderful natural views. It is located between Pollachi and Valparai.At a distance of 64 Kms from Coimbatore, 24 Kms from Pollachi & 545 Kms from Chennai.</p>
                          <div class="modal fade" id="aliyar" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=3;include 'sampledam.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['damname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/aliyar.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Built By:</h4>
                                           <ul>
                                                <?php include'sampledam.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['builtby']);}
                                                  ?>
                                          </ul> 
                                          <h4 class="text-primary">Famous For:</h4>
                                           <ul><li>
                                                <?php include'sampledam.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?></li>
                                          </ul>                                        
                                        <h4 class="text-primary">Places to Visit Near Aliyar Dam:</h4>
                                          <ul>      <?php include 'sampledam.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'sampledam.php';
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/manimuthar.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Manimuthar Dam</h4>
                          <p class="card-text text-primary">The Manimuthar Dam is located in Manimutharu 50.8 kilometres away from Tirunelveli in Tamil Nadu, India. It is the biggest reservoir of the Tirunelveli district.This dam was built in 1958 near Singampatti and Kallidaikurichi, by the "then Tamil Nadu Chief Minister Kamaraj" and K T Kosalram MP to prevent mixing of rainwater with the Bay of Bengal during the rainy season.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/mettur.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Mettur Dam</h4>
                          <p class="card-text text-primary">The Mettur Dam is one of the largest dams in India and the largest in Tamil Nadu, located across the river Cauvery where it enters the plains. Built in 1934, it took 9 years to complete.[1] Maximum height and width of the dam are 214 and 171 feet respectively. The dam receives inflows from its own catchment area, Kabini Dam and Krishna Raja Sagara Dams located in Karnataka. </p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/vaigai.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Vaigai Dam</h4>
                          <p class="card-text text-primary">The Vaigai Dam is built across the Vaigai River near Andipatti, in the Theni district of Tamil Nadu, southern India.It provides water for irrigation for the Madurai district and the Dindigul district as well as drinking water to Madurai and Andipatti.Near the dam, the Government of Tamil Nadu has constructed an Agricultural Research Station for researching the growing of a variety of crops.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/kodiveri.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Kodiveri Dam</h4>
                          <p class="card-text text-primary">Kodiveri Dam, is located on the Bhavani river near Gobichettipalayam in Western Tamil Nadu The dam is situated along the State Highway 15 about 15 km (9.3 mi) from Gobichettipalayam towards Sathyamangalam.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/krishnagiri.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Krishnagiri Dam</h4>
                          <p class="card-text text-primary">The Krishnagiri Dam is a dam that spans the Thenpennai River by the village of Dhuduganahalli, located in Krishnagiri district, Tamil Nadu, India. The Krishnagiri Dam is also known as Krishnagiri Reservoir Project (KRP) Dam.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/bhavani.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">BhavaniSagar Dam</h4>
                          <p class="card-text text-primary">Bhavanisagar Dam or Lower Bhavani Dam, is located in Erode district,Tamil Nadu, India.It is constructed on the Bhavani river.It is one of the world's largest earthen dams. The dam is situated some 16 km west of Sathyamangalam.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/pillur.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Pillur Dam</h4>
                          <p class="card-text text-primary">Pillur is a village in Tiruvarur district, Tamil Nadu, India. It has a population of about 2,500. Agriculture is the main business and source of income for the people. People believe that the village got its name after a visit by Lord Siva and Parvathi. This village has many historical temples, including Jayambal Sametha Jayenkondeshwarar Swamy Temple and Sri Poorna Pushkalambal Sametha Hari Hara Puthra Swami and temple.</p>
                        </div>
                        </div>  
        </div>
        
        </div>
      </div>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>    
  </body>
</html>