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
	<title>Top 20 Hill Stations in TamilNadu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.min.css">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/hill.css">
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
            <li class="active"><a href="hill.php"><span class="glyphicon glyphicon-oil">&ensp;Hill&ensp;Stations</a></li>           
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
      <h4 class="text-center">Top 20 Hill Stations in TamilNadu</h4>
      </div>
      <div class="container">      	           	     
      	<div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/anaimalai.jpg" data-toggle="modal" data-target="#anaimalai">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Anaimalai Hills</h4>
                          <p class="card-text text-primary">The Anaimalai or Anamala Hills,also known as the Elephant Mountains, are the range of mountains that form the southern portion of the Western Ghats and span the border of Tamil Nadu and Kerala in Southern India</p>
                          <div class="modal fade" id="anaimalai" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=1;include 'samplehill.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['hillname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/anaimalai.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Best Time to Visit:</h4>
                                           <ul><li>
                                                <?php include'samplehill.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['best']);}
                                                  ?></li>
                                          </ul>                                         
                                        <h4 class="text-primary">Places to Visit Near Anaimalai Hills:</h4>
                                          <ul>      <?php include 'samplehill.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'samplehill.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['location']);}
                                                  ?></li>                                                         
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/coonoor.jpg" data-toggle="modal" data-target="#coonoor">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Coonoor Hills</h4>
                          <p class="card-text text-primary">Coonoor is one of the popular Places to visit in Tamilnadu and among the best hill stations near Bangalore. At an altitude of 6,000 feet above sea level, Coonoor is famous for its verdant environs and for a variety of wildflowers and birds.</p>
                          <div class="modal fade" id="coonoor" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=2;include 'samplehill.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['hillname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/coonoor.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Best Time to Visit:</h4>
                                           <ul> <li>
                                                <?php include'samplehill.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['best']);}
                                                  ?></li>
                                          </ul>                                         
                                        <h4 class="text-primary">Places to Visit Near Coonoor Hills:</h4>
                                          <ul>      <?php include 'samplehill.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'samplehill.php';
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/ketti-valley.jpg" data-toggle="modal" data-target="#ketti">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Ketti Valley</h4>
                          <p class="card-text text-primary">Located in the beautiful hills extending from Coonoor to Ooty in Tamil Nadu is the beautiful Ketti Valley. ...Being the second largest gorge in the world, the Ketti Valley is a natural beauty surrounded by the beautiful blue mountains.</p>
                           <div class="modal fade" id="ketti" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php $id=3;include 'samplehill.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo ($row['hillname']);}
                                                  ?>                                                    
                                            </h4>
                                          </div>
                                          <div class="modal-body"><b>
                                          <img src="images/ketti-valley.jpg" class="img-responsive img-thumbnail">
                                          <h4 class="text-primary">Best Time to Visit:</h4>
                                           <ul> <li>
                                                <?php include'samplehill.php'; 
                                                while($row=mysqli_fetch_assoc($result)){echo nl2br($row['best']);}
                                                  ?></li>
                                          </ul>                                         
                                        <h4 class="text-primary">Places to Visit Near Ketti Valley HillStation:</h4>
                                          <ul>      <?php include 'samplehill.php';
                                                   while($row=mysqli_fetch_assoc($result)){echo nl2br($row['near']);}
                                                  ?>                                                         
                                        </ul>                                        
                                        <h4 class="text-primary">Location:</h4>
                                          <ul><li>
                                                  <?php include 'samplehill.php';
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/kodaikanal.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Kodaikanal Hill Station</h4>
                          <p class="card-text text-primary">Kodaikanal Hill Station is a destination where you can make a trip in any time or any season throughout the year due to its persistent lovely pleasant whether.Summer season(March to June)is better then winter in Kodaikanal Town.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/kolli-hills.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Kolli Hills</h4>
                          <p class="card-text text-primary">Kolli Hills or Kolli Malai is a small mountain range located in Western Tamil Nadu and spreaded over the Namakkal district of India. The mountains rise to 1300m in height and cover an area of approximately 280 km. </p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/kolukumalai.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Kolukku Malai</h4>
                          <p class="card-text text-primary">Kolukkumalai is a small village/hamlet in Bodinayakanur Taluk in the Theni district of the Indian state of Tamil Nadu bordering Idukki district of Kerala.It is home to the highest tea plantations in the world.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/kotagiri.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Kotagiri Hills</h4>
                          <p class="card-text text-primary">Kotagiri is the oldest and the third largest hill stations in the Nilgiris. Looming over and above all the surrounding hills in the North-eastern escarpments, its climate is claimed to be one of the best in the World. Kotagiri literally means the lines of the house of the Kotas.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/manjolai.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Manjolai Hills</h4>
                          <p class="card-text text-primary">Manjolai Hills is a lovely hill station tucked away deep in the magnificent Kalakad Mundanthurai Tiger Reserve in the Western Ghats.The hills rise to a height of 1000-1500 meters and are covered here with tranquil tea gardens and to the nearby forests.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/megamalai.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Meghamalai</h4>
                          <p class="card-text text-primary">Meghamalai popularly called the Highwavy Mountains, is a mountain range situated in the Western Ghats in Theni district,Tamil Nadu near to Kumily,Kerala.It is dotted with cardamom plantations and tea estates.The place is situated at an elevation of 1,500 m above sea level.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/ooty.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Nilgiri Mountain Railway</h4>
                          <p class="card-text text-primary">The Nilgiri Mountain Railway was built by the British in 1908.The railway still relies on its fleet of steam locomotives.NMR comes under the jurisdiction of the newly formed Salem Division.In July 2005,UNESCO added the Nilgiri Mountain Railway as an extension to the World Heritage Site of Darjeeling Himalayan Railway.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/pachamalai.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Pachamalai Hills</h4>
                          <p class="card-text text-primary">The Pachaimalai Hills also known as the Pachais,are low mountain range in the Eastern Ghats System.In the Tamil language,Pachai means green. The range's vegetation is greener than some of the other hills in the region.The Tamil Nadu Government is planning to develop the Pachais as a tourist destination.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/palani.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Palani Hills</h4>
                          <p class="card-text text-primary">The Palani Hills are a mountain range in the states of Kerala and Tamil Nadu in South India.The Palani Hills are an eastward extension of the Western Ghats ranges, which run parallel to the west coast of India.The Palani Hills adjoin the high Anamalai range on the west, and extend east into the plains of Tamil Nadu, covering an area of 2,068SKS.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/sathuragiri.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Sathuragiri Hills</h4>
                          <p class="card-text text-primary">Sathuragiri Hills or Chathuragiri is situated 10 km from Watrap near Srivilliputhur.The name Sathuragiri came from Chathur Veda Giri, where all the four Vedas met and formed the hill. Another meaning is that the whole mountain is in square in shape so they called by name Chathuragiri. </p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/sirumalai.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Sirumalai</h4>
                          <p class="card-text text-primary">Sirumalai is a region of 60,000 acres situated 25 km from Dindigul and 90 km from Madurai,Tamil Nadu, India.There are many high hills in the area.Hillock International School is located in Sirumalai.Sirumalai is a dense forest region with a moderate climate throughout the year.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/topslip.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Top Slip</h4>
                          <p class="card-text text-primary">Topslip is located near Pollachi in the state of Tamil Nadu, India, at an altitude of 800 feet from the sea level on the Anamalai mountain range. It is a part of the protected Indira Gandhi Wildlife Sanctuary.Topslip is blessed with a gentle altitude, salubrius climate and a vareity of flora and fauna.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/valparai.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Valparai</h4>
                          <p class="card-text text-primary">Valparai is a Taluk and hill station in the Coimbatore district of Tamil Nadu, India. It consists of Anamalai Tiger Reserve. It is located 4,500 feet (1,400 m) above sea level on the Anaimalai Hills range of the Western Ghats.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/yelagiri.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Yelagiri</h4>
                          <p class="card-text text-primary">Yelagiri is a hill station located in the newly formed Tirupattur district of Tamil Nadu, India, situated off the Vaniyambadi-Tirupattur road.Located at an altitude of 1,110.6 metres above Mean Sea Level and spread across 30 km.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/yercaud.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Yercaud</h4>
                          <p class="card-text text-primary">Yercaud is a Hill station in Salem District, in Tamil Nadu, India. It is located in the Shevaroys range of hills in the Eastern Ghats. It is situated at an altitude of 1515 metres above sea level, and the highest point in Yercaud is the Servarayan temple.</p>
                        </div>
                        </div>  
        </div>
        </div>
         <div class="row">
      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/hogenakkal.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Hogenakkal Falls</h4>
                          <p class="card-text text-primary">Hogenakkal is a waterfall in South India on the Kaveri river in the Dharmapuri district of the Indian state of Tamil Nadu.Sometimes referred to as the "Niagara Falls of India,"it is known for bathing areas and hide boat rides, projecting itself as a major tourist attraction.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/javadi.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Javadi Hills</h4>
                          <p class="card-text text-primary">The Javadhu Hills are an extension of the Eastern Ghats spread across parts of Vellore and Tiruvannamalai districts in the northern part of the state of Tamil Nadu in southeastern India. This range separates Vellore and Tiruvannamalai districts.</p>
                        </div>
                        </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/kalrayan.jpg">
                         <div class="card-block well">
                              <h4 class="card-title text-danger">Kalrayan Hillls</h4>
                          <p class="card-text text-primary">The Kalvarayan Hills are a major range of hills situated in the Eastern Ghats of the southern Indian state of Tamil Nadu.Along with the Pachaimalai,Alavaimalai,Javadi,and Shevaroy hills, they separate the Kaveri River basin to the south from the Palar River basin to the north.</p>
                        </div>
                        </div>  
        </div>
        </div>
      </div>
      	<script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>    
	</body>
</html>