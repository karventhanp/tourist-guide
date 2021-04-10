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
	<title>Top 10 Fort's in TamilNadu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.min.css">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/fort.css">
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
            <li><a href="park.php"><span class="glyphicon glyphicon-piggy-bank">&ensp;Sanctuaries&ensp;&&ensp;National&ensp;Park's</a></li>
            <li class="active"><a href="fort.php"><span class="glyphicon glyphicon-tower">&ensp;Fort's</a></li>
    				<li class="nav-item"><a class="nav-link"href="about.php"><span class="glyphicon glyphicon-about">&ensp;About</span></a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php" class="glyphicon glyphicon-log-out">&ensp;SignOut</a></li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid p-3 my-3">
      <h4 class="text-center">Top 10 Fort's in TamilNadu</h4>
      </div>
      <div class="container">      	           	     
      	<div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/rock.jpg" data-toggle="modal" data-target="#rock">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Tiruchirapalli Rock Fort</h4>
                          <p class="card-text text-primary">Tiruchirappalli Rockfort is a historic fortification and temple complex built on an ancient rock. It is located in the city of Tiruchirappalli, Tamil Nadu, India.There are two Hindu temples inside, the Ucchi Pillayar Temple, Rockfort and the Thayumanaswami Temple, Rockfort.</p>
                          <div class="modal fade" id="rock" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=1;include 'samplefort.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['fortname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/rock.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Built By:</h4>
                                           <ul><li>
                                                <?php include'samplefort.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['builtby']);}
                                                  ?></li>
                                          </ul> 
                                          <h4 class="text-primary">Entry Fee:</h4>
                                           <ul>
                                                <?php include'samplefort.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['fee']);}
                                                  ?>
                                          </ul>                                        
                                        <h4 class="text-primary">Timing:</h4>
                                          <ul>     <?php include 'samplefort.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['timing']);}
                                                  ?>                                                     
                                        </ul>                                          
                                         <h4 class="text-primary">Places to Visit Near Rock Fort Temple:</h4>
                                          <ul>      <?php include 'samplefort.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'samplefort.php';
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/vellore.jpg" data-toggle="modal" data-target="#vellore">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Vellore Fort</h4>
                          <p class="card-text text-primary">Vellore Fort is a large 16th-century fort situated in heart of the Vellore city, in the state of Tamil Nadu, India built by Vijayanagara kings. The fort was at one time the headquarters of the Aravidu Dynasty of the Vijayanagara Empire. The fort is known for its grand ramparts, wide moat and robust masonry.</p>
                          <div class="modal fade" id="vellore" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=2;include 'samplefort.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['fortname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/vellore.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Built By:</h4>
                                           <ul><li>
                                                <?php include'samplefort.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['builtby']);}
                                                  ?></li>
                                          </ul> 
                                          <h4 class="text-primary">Entry Fee:</h4>
                                           <ul><li>
                                                <?php include'samplefort.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['fee']);}
                                                  ?></li>
                                          </ul>                                        
                                        <h4 class="text-primary">Timing:</h4>
                                          <ul><li>     <?php include 'samplefort.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['timing']);}
                                                  ?> </li>                                                    
                                        </ul>                                          
                                         <h4 class="text-primary">Places to Visit Near Vellore Fort:</h4>
                                          <ul>      <?php include 'samplefort.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'samplefort.php';
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/gingee.jpg" data-toggle="modal" data-target="#gingee">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Gingee Fort</h4>
                          <p class="card-text text-primary">Gingee Fort or Senji Fort in Tamil Nadu, India is one of the surviving forts in Tamil Nadu, India. It lies in Villupuram District, 160 kilometres from the state capital, Chennai. The fort is so fortified, that Shivaji, the Maratha king, ranked it as the "most impregnable fortress in India"</p>
                          <div class="modal fade" id="gingee" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=3;include 'samplefort.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['fortname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/gingee.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Built By:</h4>
                                           <ul><li>
                                                <?php include'samplefort.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['builtby']);}
                                                  ?></li>
                                          </ul> 
                                          <h4 class="text-primary">Entry Fee:</h4>
                                           <ul>
                                                <?php include'samplefort.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['fee']);}
                                                  ?>
                                          </ul>                                        
                                        <h4 class="text-primary">Timing:</h4>
                                          <ul>     <?php include 'samplefort.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['timing']);}
                                                  ?>                                                     
                                        </ul>                                          
                                         <h4 class="text-primary">Places to Visit Near Gingee Fort:</h4>
                                          <ul>      <?php include 'samplefort.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'samplefort.php';
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/udayagiri.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Udayagiri Fort</h4>
                          <p class="card-text text-primary">Originally built in the 17th century, the fort was rebuilt by Maharaja Marthanda Varma of Travancore in the 18th century.Enclosing an area of about 90 acres, including an isolated 260 feet,the fort contains an old foundry which was used for casting guns.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/vattakottai.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Vattakottai Fort</h4>
                          <p class="card-text text-primary">Vattakottai Fort is a seaside fort near Kanyakumari.It was built in the 18th century as a coastal defence-fortification and barracks in the erstwhile Travancore kingdom.Vattakottai Fort commands a picturesque view of both the sea on the one side, and the hills on the other.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/dindugal.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Dindigul Fort</h4>
                          <p class="card-text text-primary">The Dindigul Fort or Dindigul Malai Kottai is a 17th-century hill fort, built by Madurai Nayak situated in the town of Dindigul in the state of Tamil Nadu in India. The fort was built by the Madurai Nayak king Muthu Krishnappa Nayak in 1605. In the 18th century the fort passed on to Kingdom of Mysore.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/danish.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Fort Dansborg</h4>
                          <p class="card-text text-primary">Fort Dansborg, locally called Danish Fort, is a Danish fort located in the shores of Bay of Bengal in Tranquebar (Tharangambadi) in the South Indian state of Tamil Nadu. Fort Dansborg was built in the land ceded by Thanjavur king Ragunatha Nayak in an agreement with Danish Admiral Ove Gjedde in 1620 and acted as the base for Danish settlement in the region during the early 17th century. </p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/thirumayam.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Thirumayam Fort</h4>
                          <p class="card-text text-primary">The Thirumayam Fort is a 40-acre wide fortress in the town of Thirumayam in Pudukkottai-Karaikudi Highway in Pudukkottai District.It was constructed by Vijaya Raghunatha Sethupathi, the Raja of Ramnad in 1687.Later the fort was handed over to his brother in law Raghunatha Raya Tondaiman. The fort has been extensively renovated by Archaeological Survey of India in 2012.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/sankagiri.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Sankagiri Fort</h4>
                          <p class="card-text text-primary">Sankagiri Fort was built in the 15th century by the Vijayanagar empire. It has 14 fort walls built on and around a hill and the last phase these walls were built by the British. The fort served as a British tax storage facility for Kongu Nadu, a region comprising the districts of Salem, Erode, Coimbatore, Tiruppur, Namakkal, Karur and Dindukal.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/panchalanguruchi.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Panchalankurichi Fort</h4>
                          <p class="card-text text-primary">This fort was under the rule of Veerapandiya Kattabomman and was annexed by the British and destroyed by Major J. Bannerman. Later Kattabomman was betrayed by Vijaya Raghunatha Tondaiman and handed over to the British. He was hanged at Kayatharu on 16 October 1799.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/rajagiri.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Rajagiri Fort</h4>
                          <p class="card-text text-primary">The Rajagiri Fort was built in 1200 AD. It is located in Rajagiri, Tamil Nadu, India, meaning Kings Hill.It is 1 km from Gingee Market.Currently, the fort includes a magazine, gymnasium, palace site, audience hall, stable, clock tower, granary, treasury in Indo-Islamic style.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/namakkal.jpeg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Namakkal Fort</h4>
                          <p class="card-text text-primary">Namakkal Fort is a historic fort present in Namakkal in Namakkal district in the South Indian state of Tamil Nadu. The fort was built during the reign of Thirumalai Nayak of Madurai in 17th century.The fort is located on the top of a hillock made of a single rock, 75 m (246 ft) tall. </p>
                        </div>
                        </div>  
        </div>        
        </div>
      </div>
      	<script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>    
	</body>
</html>