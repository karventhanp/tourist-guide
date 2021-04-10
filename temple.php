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
	<title>Top 20 Temples in TamilNadu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.min.css">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/temple.css">
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
      <div class="container-fluid p-3 my-3">
      <h4 class="text-center">Top 20 Temples in TamilNadu</h4>
      </div>
      <div class="container">      	           	     
      	<div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/big-temple.jpg" data-toggle="modal" data-target="#bigtemple">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Brihadishvara Temple</h4>
                          <p class="card-text text-primary">Brihadishvara Temple, also called Rajarajesvaram or Peruvudaiyār Kōvil, is a Hindu temple dedicated to Shiva located in South bank of Kaveri river in Thanjavur, Tamil Nadu, India.</p>
                          <a href="booking.php" class="btn btn-success btn-md">Book Ticket</a>
                                    <div class="modal fade" id="bigtemple" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=1;include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['templename']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/big-temple.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Deity:</h4>
                                           <ul> 
                                              <li>
                                                <?php include'sampletemple.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['deity']);}
                                                  ?>
                                             </li>
                                          </ul>
                                          <h4 class="text-primary">Pooja Timing:</h4>
                                          <ul>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['pooja']);}
                                                  ?>                    
                                        </ul>
                                        <h4 class="text-primary">Famous for:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?>                                                         
                                          </li>
                                        </ul>
                                        <h4 class="text-primary">Festivals:</h4>
                                          <ul>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['festivals']);}
                                                  ?>                                                      
                                        </ul>
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?>                                                         
                                          </li>
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/descent-of-ganges.jpg" data-toggle="modal" data-target="#ganges">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Descent of the Ganges</h4>
                          <p class="card-text text-primary">Descent of the Ganges is a monument at Mamallapuram, on the Coromandel Coast of the Bay of Bengal, in the Chengalpattu district of the state of Tamil Nadu, India</p>
                          <div class="modal fade" id="ganges" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=2;include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['templename']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/descent-of-ganges.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Deity:</h4>
                                           <ul> 
                                              <li>
                                                <?php include'sampletemple.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['deity']);}
                                                  ?>
                                             </li>
                                          </ul>
                                          <h4 class="text-primary">Tourister Details:</h4>
                                          <ul>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['pooja']);}
                                                  ?>                                                      
                                        </ul>
                                        <h4 class="text-primary">Famous for:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?>                                                         
                                          </li>
                                        </ul>
                                        <h4 class="text-primary">Best Time to Visit:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['festivals']);}
                                                  ?>                                                         
                                          </li>
                                        </ul>
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?>                                                         
                                          </li>
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/ekambareswarar-temple.jpg" data-toggle="modal" data-target="#ekam">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Ekambareswarar Temple</h4>
                          <p class="card-text text-primary">Ekambareswarar Temple (Ekambaranathar Temple) is a Hindu temple dedicated to the deity Shiva, located in the town of Kanchipuram in Tamil Nadu, India.</p>
                                   <div class="modal fade" id="ekam" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=3;include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['templename']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/ekambareswarar-temple.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Deity:</h4>
                                           <ul> 
                                              <li>
                                                <?php include'sampletemple.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['deity']);}
                                                  ?>
                                             </li>
                                          </ul>
                                          <h4 class="text-primary">Pooja Timing:</h4>
                                          <ul>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['pooja']);}
                                                  ?>                                                         
                                
                                        </ul>
                                        <h4 class="text-primary">Famous for:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?>                                                         
                                          </li>
                                        </ul>
                                        <h4 class="text-primary">Festivals:</h4>
                                          <ul>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['festivals']);}
                                                  ?>                                                         
                          
                                        </ul>
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?>                                                         
                                          </li>
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/Golden-temple.jpg" data-target="#golden" data-toggle="modal">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Golden Temple</h4>
                          <p class="card-text text-primary">The ‘Sripuram Golden Temple’ is on the itineraries of almost all tourists on a trip to temples in South India. Standing tall in its stunning beauty and grandeur, the temple is truly a sight to behold.</p>
                          <div class="modal fade" id="golden" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=4;include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['templename']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/Golden-temple.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Deity:</h4>
                                           <ul> 
                                              <li>
                                                <?php include'sampletemple.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['deity']);}
                                                  ?>
                                             </li>
                                          </ul>
                                          <h4 class="text-primary">Pooja Timing:</h4>
                                          <ul>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['pooja']);}
                                                  ?>                                                         
                                
                                        </ul>
                                        <h4 class="text-primary">Famous for:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?>                                                         
                                          </li>
                                        </ul>
                                        <h4 class="text-primary">Near by Attractions:</h4>
                                          <ul>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['festivals']);}
                                                  ?>                                                         
                          
                                        </ul>
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?>                                                         
                                          </li>
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/kailasanathar-temple.jpg" data-toggle="modal" data-target="#kaila">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Kanchi Kailasanathar Temple</h4>
                          <p class="card-text text-primary">The Kanchi Kailasanathar temple is the oldest structure in Kanchipuram.Located in Tamil Nadu, India, it is a Hindu temple in the Tamil architectural style.</p>
                          <div class="modal fade" id="kaila" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=5;include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['templename']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/kailasanathar-temple.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Deity:</h4>
                                           <ul> 
                                              <li>
                                                <?php include'sampletemple.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['deity']);}
                                                  ?>
                                             </li>
                                          </ul>
                                          <h4 class="text-primary">Best Time to Visit:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['pooja']);}
                                                  ?> </li>                                                        
                                
                                        </ul>
                                        <h4 class="text-primary">Famous for:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?>                                                         
                                          </li>
                                        </ul>
                                        <h4 class="text-primary">Festivals:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['festivals']);}
                                                  ?> </li>                                                        
                          
                                        </ul>
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?>                                                         
                                          </li>
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/kapaleeswarar-temple.jpg" data-toggle="modal" data-target="#kapalee">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Kapaleeshwarar Temple</h4>
                          <p class="card-text text-primary">Kapaleeshwarar Temple is a Hindu temple dedicated to lord Shiva located in Mylapore.The form of Shiva's consort Parvati worshipped at this temple is called Karpagambal is from Tamil.</p>
                          <div class="modal fade" id="kapalee" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=6;include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['templename']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/kapaleeswarar-temple.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Deity:</h4>
                                           <ul> 
                                              <li>
                                                <?php include'sampletemple.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['deity']);}
                                                  ?>
                                             </li>
                                          </ul>
                                          <h4 class="text-primary">Pooja Timing:</h4>
                                          <ul>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['pooja']);}
                                                  ?>                                                         
                                
                                        </ul>
                                        <h4 class="text-primary">Famous for:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?>                                                         
                                          </li>
                                        </ul>
                                        <h4 class="text-primary">Festivals:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['festivals']);}
                                                  ?>  </li>                                                       
                          
                                        </ul>
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?>                                                         
                                          </li>
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/karpaga-vinayagar-temple.jpg" data-toggle="modal" data-target="#karpaga">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Karpaka Vinayakar Temple</h4>
                          <p class="card-text text-primary">Pillaiyarpatti Pillaiyar Temple is an ancient rock-cut cave shrine dedicated to Lord Ganesha, located at Pillayarpatti in Tiruppathur Taluk, Sivaganga district in the state of Tamil Nadu, India.</p>
                          <div class="modal fade" id="karpaga" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=8;include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['templename']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/karpaga-vinayagar-temple.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Deity:</h4>
                                           <ul> 
                                              <li>
                                                <?php include'sampletemple.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['deity']);}
                                                  ?>
                                             </li>
                                          </ul>
                                          <h4 class="text-primary">Pooja Timing:</h4>
                                          <ul>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['pooja']);}
                                                  ?>                                                         
                                
                                        </ul>
                                        <h4 class="text-primary">Famous for:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?>                                                         
                                          </li>
                                        </ul>
                                        <h4 class="text-primary">Festivals:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['festivals']);}
                                                  ?>  </li>                                                       
                          
                                        </ul>
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?>                                                         
                                          </li>
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/koodal-alagar-temple.jpeg" data-toggle="modal" data-target="#koodal">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Koodal Azhagar temple</h4>
                          <p class="card-text text-primary">Koodal Azhagar Temple in Madurai, a city in the South Indian state of Tamil Nadu, is dedicated to the Hindu god Vishnu. Constructed in the Dravidian style of architecture.</p>
                          <div class="modal fade" id="koodal" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=9;include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['templename']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/koodal-alagar-temple.jpeg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Deity:</h4>
                                           <ul> 
                                              <li>
                                                <?php include'sampletemple.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['deity']);}
                                                  ?>
                                             </li>
                                          </ul>
                                          <h4 class="text-primary">Pooja Timing:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['pooja']);}
                                                  ?> </li>                                                        
                                
                                        </ul>
                                        <h4 class="text-primary">Famous for:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?>                                                         
                                          </li>
                                        </ul>
                                        <h4 class="text-primary">Festivals:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['festivals']);}
                                                  ?>  </li>                                                       
                          
                                        </ul>
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?>                                                         
                                          </li>
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/marudhamalai-temple.jpg" data-toggle="modal" data-target="#marudhamalai">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Marudhamalai (temple)</h4>
                          <p class="card-text text-primary">Marudhachalamurthy Temple, Marudamalai is a popular 12th century hill temple build by Tamil kings during sangam period as shown in purananuru and dedicated to Thamizh god Murugan.</p>
                          <div class="modal fade" id="marudhamalai" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=10;include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['templename']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/marudhamalai-temple.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Deity:</h4>
                                           <ul> 
                                              <li>
                                                <?php include'sampletemple.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['deity']);}
                                                  ?>
                                             </li>
                                          </ul>
                                          <h4 class="text-primary">Pooja Timing:</h4>
                                          <ul>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['pooja']);}
                                                  ?>                                                         
                                
                                        </ul>
                                        <h4 class="text-primary">Famous for:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['famousfor']);}
                                                  ?>                                                         
                                          </li>
                                        </ul>
                                        <h4 class="text-primary">Festivals:</h4>
                                          <ul>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['festivals']);}
                                                  ?>                                                    
                          
                                        </ul>
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'sampletemple.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?>                                                         
                                          </li>
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/Meenakshi-Amman-Temple.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Meenakshi Amman Temple</h4>
                          <p class="card-text text-primary">Meenakshi Temple is a historic Hindu temple located on the southern bank of the Vaigai River in the temple city of Madurai, Tamil Nadu, India.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/palani-temple.png">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Palani Murugan temple</h4>
                          <p class="card-text text-primary">Arulmigu Dandayudhapani Swami Temple is one of the Six Abodes of Murugan. It is located in the city of Palani in Dindigul district,Tamil Nadu, India.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/pancha-rathas.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Pancha Rathas</h4>
                          <p class="card-text text-primary">Pancha Rathas is a monument complex at Mahabalipuram, on the Coromandel Coast of the Bay of Bengal, in Kanchipuram.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/pazhamudircholai-temple.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Pazhamudircholai</h4>
                          <p class="card-text text-primary">Pazhamudircholai Murugan Temple is a Hindu temple,located about 25 kilometres north of Madurai.One of the six important abodes of Lord Muruga.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/rameswaram.webp">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Ramanathaswamy Temple</h4>
                          <p class="card-text text-primary">Ramanathaswamy Temple is a Hindu temple dedicated to the god Shiva located on Rameswaram island in the state of Tamil Nadu, India.It is also one of the twelve Jyotirlinga temples.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/shore-temple.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Shore Temple</h4>
                          <p class="card-text text-primary">Mahabalipuram,it has been classified as a UNESCO World Heritage Site since 1984.It is one of the oldest structural stone temples of South India.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/sivan-temple.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Adiyogi Shiva Statue</h4>
                          <p class="card-text text-primary">The Adiyogi statue of the Indian deity Shiva with white Thirunamam at Coimbatore in the Indian state of Tamil Nadu,which has been recognized by the Guinness World Records as the "Largest Bust Sculpture” in the world.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/Sri-Ranganathaswamy-temple.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Ranganathaswamy Temple,Srirangam</h4>
                          <p class="card-text text-primary">The Sri Ranganathaswamy Temple or Thiruvarangam is a Hindu temple dedicated to Ranganatha, a reclining form of the Hindu deity Maha Vishnu.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/thillai-nadaraja-temple.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Nataraja Temple,Chidambaram</h4>
                          <p class="card-text text-primary">Nataraja Temple,also referred to as the Chidambaram Nataraja temple or Thillai Nataraja temple,is a Hindu temple dedicated to Nataraja – Shiva as the lord of dance – in Chidambaram,Tamil Nadu,India.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/thiruchendur-temple.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Thiruchendur Murugan Temple</h4>
                          <p class="card-text text-primary">Thiruchendur Murugan Temple is an ancient Hindu temple dedicated to lord Murugan situated in Tamil Nadu, India. The puranic name or historical name for this temple is Jayanthipuram.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/thiruparankundram-temple.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Thiruparankundram Murugan Temple</h4>
                          <p class="card-text text-primary">Thiruparankundram Murugan Temple or Subramanya Swamy Temple is a Hindu temple and one of the Six Abodes of Murugan.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/Tiruvannamalai-temple.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Arunachalesvara Temple</h4>
                          <p class="card-text text-primary">Arunachalesvara Temple, also called Annamalaiyar Temple, is a Hindu temple dedicated to the deity Shiva, located at the base of Arunachala hill in the town of Thiruvannamalai in Tamil Nadu, India.</p>
                        </div>
                        </div>  
        </div>
        </div>
      </div>
      	<script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>    
	</body>
</html>