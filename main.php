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
     <title>Top 10 Tourist Places in TamilNadu</title>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>     
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/main.css">  
     <link rel="icon" href="images/icon.png">
     <style type="text/css">
    .modal-header{
      background-image: linear-gradient(-90deg,#66ffff,#66ff33);
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
    				<li class="active nav-item"><a class="nav-link"href="main.php"><span class="glyphicon glyphicon-home">&ensp;Home</span></a></li>
    				<li class="nav-item"><a class="nav-link" href="temple.php"><span class="glyphicon glyphicon-road">&ensp;Temples</span></a></li>
    				<li class="nav-item"><a class="nav-link"href="hill.php"><span class="glyphicon glyphicon-oil">&ensp;Hill&ensp;Stations</span></a></li>    				
    				<li class="nav-item"><a class="nav-link"href="beach.php"><span class="glyphicon glyphicon-cloud">&ensp;Beaches</span></a></li>
    				<li class="nav-item"><a class="nav-link"href="dam.php"><span class="glyphicon glyphicon-inbox">&ensp;Dam's</span></a></li>
    				<li class="nav-item"><a class="nav-link"href="park.php"><span class="glyphicon glyphicon-piggy-bank">&ensp;Sanctuaries&ensp;&&ensp;National&ensp;Park's</span></a></li>
            <li class="nav-item"><a class="nav-link"href="fort.php"><span class="glyphicon glyphicon-tower">&ensp;Fort's</span></a></li>
    				<li class="nav-item"><a class="nav-link"href="about.php"><span class="glyphicon glyphicon-about">&ensp;About</span></a></li>
            
    			</ul>
    			<ul class="nav navbar-nav navbar-right">
    				<li class="nav-item"><a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-out">&ensp;SignOut</span></a></li>
    			</ul>
    	</nav>
    	   <nav class="navbar navbar-default navbar-fixed">
    		<div class="container-fluid">
    			<div class="nav navbar-nav">
    				<h4>Top 10 Tourist Places in TamilNadu</h4>
    			</div>	    			 			
    		</div>
    	</nav>    	
    	<div class="container">
    		<div class="col-md-12">
    	          <div class="row">
    	                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/thanjavur_temple.jpg">
                         <div class="card-block">
                              <h4 class="card-title text-primary">Thanjavur Big Temple</h4>
                          <p class="card-text">Brihadishvara Temple, also called Rajarajesvaram or Peruvudaiyār Kōvil, is a Hindu temple dedicated to Shiva located in South bank of Kaveri river in Thanjavur, Tamil Nadu, India.</p> 
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#bigtemple">See more...</button>         <div class="modal fade" id="bigtemple" role="dialog">
                                      <div class="modal-dialog">                                   
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Thanjavur Big Temple</h4> 
                                          </div>
                                          <div class="modal-body">                                                                         
                                        <img src="images/thanjavur_temple.jpg" class="img-responsive img-thumbnail">
                                        <b>
                                        <h4 class="text-primary">Deity:</h4>
                                         <ul><li>Lord Shiva</li></ul>
                                        <h4 class="text-primary">Brihadeeswarar Temple Timings:</h4>
                                        <ul>
                                        <li>6:00 am to 12:30 pm</li>
                                        <li>4:00 pm to 9:00 pm</li>
                                        </ul>
                                        <h4 class="text-primary">Brihadeeswarar Temple Pooja Timings:</h4>
                                        <ul>
                                        <li>KalaSandi-9:00 am</li>
                                       <li>UchiKalam-12:00 pm</li>
                                        <li>Sayyaraitchai-6:00 pm</li>
                                        <li>ArthaJaamam-8:00 pm</li>
                                       </ul>
                                        <h4 class="text-primary">Brihadeeswarar Temple Festivals:</h4>
                                        <ul>
                                          <li>Masi-Shivarathiri</li>
                                          <li>Aippasi-Pournami</li>
                                          <li>Panguni-Thiruvizha</li>
                                          <li>Margazhi-Thiruvadhirai</li>
                                        </ul>
                                        <h4 class="text-primary">Location:</h4>
                                        <ul>
                                          <li>Membalam Rd, Balaganapathy Nagar, Thanjavur, Tamil Nadu 613007</li>
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
                     		<div class="card"><img alt="Card image cap" class="card-img-top fit-image img-responsive img-thumbnail" src="images/kollihills.jpg">
                         <div class="card-block">
                              <h4 class="card-title text-primary">Kolli Hills</h4>
                          <p class="card-text">Kolli Hills or Kolli Malai is a small mountain range located in Western Tamil Nadu and spreaded over the Namakkal district of India.</p></br>
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#kolli">See more...</button>
                              <div class="modal fade" id="kolli" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Kolli Hills</h4>
                                    </div>
                                    <div class="modal-body">
                                    <img src="images/kollihills.jpg" class="img-responsive img-thumbnail">
                                    <b>
                                      <h4 class="text-primary">Best Time to Visit:</h4>
                                      <ul><li>February to December</li></ul>
                                      <h4 class="text-primary">Places To Visit In Kolli Hills:</h4>
                                      <ul><li>Arapaleeswarar Temple</li>
                                        <li> Botanical Garden,Kolli Hills</li>
                                        <li>Tampcol Medicinal Farm</li>
                                        <li>Agaya Gangai Waterfalls</li>
                                        <li>Vasalurpatty Boat House</li>
                                        <li>The Siddhar Caves</li>
                                      </ul>
                                      <h4 class="text-primary">Places To Visit Near Kolli Hills:</h4>
                                      <ul>
                                        <li>Puliancholai</li>
                                      </ul>
                                      <h4 class="text-primary">Location:</h4>
                                      <ul><li>Namakkal District,Tamil Nadu</li></ul>
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
                 		    <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-responsive img-thumbnail" src="images/Kanyakumari.png">
                         <div class="card-block">
                              <h4 class="card-title text-primary">Vivekananda Rock </h4>
                          <p class="card-text">Vivekananda Rock Memorial is a popular tourist monument in Vavathurai, Kanyakumari, India.It was built in 1970 in honour of Swami Vivekananda who is said to have attained enlightenment on the rock.</p>
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">See more...</button>
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Vivekananda Rock</h4>
                                  </div>
                                  <div class="modal-body">
                                  <img src="images/Kanyakumari.png" class="img-responsive img-thumbnail">
                                  <b>
                                    <h4 class="text-primary">Best Time to Visit:</h4>
                                    <ul><li>October to March</li></ul>
                                    <h4 class="text-primary">Places to Visit in Kanyakumari:</h4>
                                    <ul>
                                      <li>Thiruvalluvar Statue</li>
                                      <li>Bhagavathy Amman Temple</li>
                                      <li>Gandhi Mandapam</li>
                                      <li>Kanyakumari Beach</li>
                                      <li>Padmanabhapuram Palace</li>
                                      <li>Thirparappu Falls</li>
                                      <li>Wax Museum</li>
                                      <li>Sunset View Point</li>
                                      <li>Vattakottai Fort</li>
                                    </ul>
                                    <h4 class="text-primary">Location:</h4>
                                    <ul><li>Vavathurai,Kanyakumari,Tamilnadu,India</li></ul>
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
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/chennai_beach.jpg">
                         <div class="card-block">
                              <h4 class="card-title text-primary">Marina Beach</h4>
                          <p class="card-text">Marina Beach is a natural urban beach in Chennai, Tamil Nadu, India, along the Bay of Bengal.The beach runs from near Fort St.</p>
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#marina">See more...</button>
                                <div class="modal fade" id="marina" role="dialog">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Marina Beach</h4>
                                      </div>
                                      <div class="modal-body">
                                      <img src="images/chennai_beach.jpg" class="img-responsive img-thumbnail">
                                      <b>
                                      <h4 class="text-primary">Best Time to Visit:</h4>
                                      <ul><li>November to February</li></ul>
                                      <h4 class="text-primary">Places to Visit Near Marina Beach:</h4>
                                      <ul><li>Chennai Marina Lighthouse</li>
                                        <li>Vivekananda House</li>
                                        <li>Avvaiyar Statue</li>
                                        <li>Labour Statue</li>
                                        <li>Mahatma Gandhi Statue</li>
                                        <li>Light House Museum</li>
                                        <li>Vivekananda Statue and Park</li>
                                        <li>Government Museum Chennai</li>
                                        <li>Marina Beach Photo Spot</li>
                                        <li>Kannagi Statue</li>
                                      </ul>
                                      <h4 class="text-primary">Location:</h4>
                                      <ul><li>Chennai,Tamil Nadu,India.</li></ul>
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
                     		<div class="card"><img alt="Card image cap" class="card-img-top fit-image img-responsive img-thumbnail" src="images/museum.jpg">
                         <div class="card-block">
                              <h4 class="card-title text-primary">Goverment Museum</h4>
                          <p class="card-text">The Government Museum or Madras Museum is a museum of human history and culture located in the neighbourhood of Egmore in Chennai, India</p>
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#govt">See more...</button>
                            <div class="modal fade" id="govt" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Goverment Museum</h4>
                                  </div>
                                  <div class="modal-body">
                                  <img src="images/museum.jpg" class="img-responsive img-thumbnail">
                                  <b>
                                    <h4 class="text-primary">Timing:</h4>
                                    <ul><li>Closed:Friday 09:30 a.m to 5:00 p.m</li></ul>
                                  <h4 class="text-primary">Entry Fee:</h4>
                                  <ul>
                                    <li>Indians:Rs.15(Adults),Rs.10(Children),Rs.5(Students and teachers in group with prior permission)</li>
                                    <li>Foreigners:Rs.250(Adults),Rs.125(Children),Rs.75(Students and teachers in group with prior permission)</li>
                                    <li>Camera Fee:Rs.200 (still photography),Rs.500 (video camera)
                                    </li>
                                  </ul>
                                  <h4 class="text-primary">Time Spent:</h4>
                                  <ul><li>1 to 2 hours</li></ul>
                                  <h4 class="text-primary">Places to Visit Near Museum:</h4>
                                  <ul><li>Valluvar Kottam Temple</li>
                                    <li>The Victory War Memorial</li>
                                    <li>Vadapalani Murugan Temple</li>
                                    <li>Sri Parthasarathy Temple</li></ul>
                                  <h4 class="text-primary">Location:</h4>
                                  <ul><li>Egmore,Chennai,Tamil Nadu,India</li></ul>
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
                 		    <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-responsive img-thumbnail" src="images/thiruchirappalli.jpg">
                         <div class="card-block">
                              <h4 class="card-title text-primary">Rock Fort Temple</h4>
                          <p class="card-text">Tiruchirappalli Rockfort is a historic fortification and temple complex built on an ancient rock. It is located in the city of Tiruchirappalli, Tamil Nadu, India.</p>
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#fort">See more...</button>
                              <div class="modal fade" id="fort" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Rock Fort Temple</h4>
                                    </div>
                                    <div class="modal-body">
                                    <img src="images/thiruchirappalli.jpg" class="img-responsive img-thumbnail">
                                    <b>
                                    <h4 class="text-primary">Timing:</h4>
                                    <ul><li>Every Day-6:00 am to 8:00 pm</li></ul>
                                    <h4 class="text-primary">Pooja Timing:</h4>
                                    <ul>
                                      <li>Usakkalam-6.00 A.M -7.00 A.M</li>
                                      <li>Kalasandhi-8.00 A.M - 9.00 A.M</li>
                                      <li>Ucchikaalam(Noon Pooja)-8.00 A.M - 9.00 A.M</li>
                                      <li>Saayarachai Pooja(Evening)-5:00 P.M - 6.00 P.M</li>
                                       <li>Fifth Kalam-6:00 P.M - 7.00 P.M</li>
                                       <li>Ardhajama Pooja(Night)-7:00 P.M - 8.00 P.M</li>
                                    </ul>
                                    <h4 class="text-primary">Festivals:</h4>
                                    <ul>
                                      <li>Aadi (Aadi Pooram) 11 Days</li>
                                      <li>Avani (Vinayagar Sagurthi) 14 Days</li>
                                      <li>Purattasi (Navarathari) 10 Days</li>
                                      <li>Kandha Sasti 7 Days</li>
                                      <li>Panguni (Theppa Thiruvila) 10 Days</li>
                                      <li>Chithirai (Thiru Ther) 14 Days</li>
                                      <li>Vasantha Urchavavilla 10 Days </li>
                                      <li> Pradhosam</li>                                         
                                      <li>Thiru Karthigai Deepa</li>                                                                        </ul>
                                      <h4 class="text-primary">Location:</h4>
                                      <ul><li>Rock Hills,Tiruchirappalli,Tamilnadu,India</li></ul>
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
       		</div>       			
       		
       			 <div class="row">
    	                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-thumbnail" src="images/mahabalipuram_temple.jpg">
                         <div class="card-block">
                              <h4 class="card-title text-primary">Mamallapuram Temple</h4>
                          <p class="card-text">Mamallapuram, also known as Mahabalipuram,is a town in Chengalpattu district in the southeastern Indian state of Tamil Nadu.It is on the coastline 58 kilometres south of the city of Chennai.</p></br> <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#puram">See more...</button>
                            <div class="modal fade" id="puram" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Mamallapuram Temple</h4>
                                  </div>
                                  <div class="modal-body">
                                  <img src="images/mahabalipuram_temple.jpg" class="img-responsive img-thumbnail">
                                  <b>
                                  <h4 class="text-primary">Best Time to Visit:</h4>
                                  <ul><li>Winters:November to February</li></ul>
                                  <h4 class="text-primary">Famous For:</h4>
                                  <ul><li>Tourism</li>
                                    <li>Religious Trips</li></ul>
                                    <h4 class="text-primary">Entrance Fee:</h4>
                                    <ul><li>Indians:10Rs</li>
                                      <li>Foreigners:340Rs</li>
                                      <li>Children:Free</li></ul>
                                      <h4 class="text-primary">Visiting Time:</h4>
                                      <ul><li>Everyday:6 am to 6 pm</li></ul>
                                      <h4 class="text-primary">Visit Duration:</h4>
                                      <ul><li>1 to 2 Hours</li></ul>
                                      <h4 class="text-primary">NearBy Attractions:</h4>
                                      <ul><li>Sthala Sayana Perumal Temple</li>
                                        <li>Ganesha Ratha</li>
                                        <li>Sculpture Museum</li>
                                        <li>Arjuna's Penance</li>
                                        <li>Light House Museum</li>
                                        <li>Trimurti Cave</li>
                                        <li>Mamallapuram Light House</li>
                                        <li>Karukathamman Temple</li></ul>
                                        <h4 class="text-primary">Location:</h4>
                                        <ul><li>Mahabalipuram,Chengalpattu District,Tamil Nadu,Indian</li></ul>
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
    		           	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     		<div class="card"><img alt="Card image cap" class="card-img-top fit-image img-responsive img-thumbnail" src="images/mudumalai_park.jpg">
                         <div class="card-block">
                              <h4 class="card-title text-primary">Mudumalai National Park</h4>
                          <p class="card-text">The Mudumalai National Park and Wildlife Sanctuary also a declared tiger reserve, lies on the northwestern side of the Nilgiri Hills,in Nilgiri District,about 150 kilometres north-west of Coimbatore city in Tamil Nadu.</p>
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#park">See more...</button>
                              <div class="modal fade" id="park" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Mudumalai National Park</h4>
                                    </div>
                                    <div class="modal-body">
                                    <img src="images/mudumalai_park.jpg" class="img-responsive img-thumbnail">
                                    <b>
                                      <h4 class="text-primary">Best Time to Visit:</h4>
                                      <ul><li>Winters and the onset of Summers</li>
                                        <li> October to May</li></ul>
                                        <h4 class="text-primary">Entry Fee:</h4>
                                        <ul><li>Rs.30 per person Entry fee</li>
                                           <li>Rs.53 for Still Camera</li>
                                           <li>Rs.315 for Video Camera</li>
                                           <li>Rs.340 per person For Bus safari</li>
                                           <li>Rs.4200 per trip For Jeep safari</li>
                                           <li>Rs.1120 per trip For Elephant safari
                                          </li></ul>
                                          <h4 class="text-primary">Famous For:</h4>
                                          <ul><li>Jungle Safari</li>
                                            <li>Elephant Safari</li>
                                            <li>Elephant camps</li>
                                            <li>Trekking in the forest</li>
                                            <li>Bird watching</li></ul>
                                            <h4 class="text-primary">Places to visit near Mudumalai National Park:</h4>
                                            <ul><li>Needle Rock View Point</li>
                                              <li>Pykara Lake</li>
                                              <li>Wenlock Downs</li>
                                              <li>Pine Tree Forests</li>
                                              <li>Tea Estate View Point </li></ul>
                                              <h4 class="text-primary">Location:</h4>
                                              <ul><li>Theppakadu,Nilgiri District,TamilNadu,India</li></ul>
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
                 		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 		    <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-responsive img-thumbnail" src="images/ooty.jpg">
                         <div class="card-block">
                              <h4 class="card-title text-primary">Kodaikanal Lake</h4>
                          <p class="card-text">Kodaikanal Lake, also known as Kodai Lake is a manmade lake located in the Kodaikanal city in Dindigul district in Tamil Nadu, India</p></br></br>
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#lake">See more...</button>
                                <div class="modal fade" id="lake" role="dialog">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Kodaikanal Lake</h4>
                                      </div>
                                      <div class="modal-body">
                                      <img src="images/ooty.jpg" class="img-responsive img-thumbnail">
                                      <b>
                                        <h4 class="text-primary">Best Time to Visit:</h4>
                                        <ul><li>April to June and between July and September</li></ul>
                                        <h4 class="text-primary">Famous For:</h4>
                                        <ul><li>Nature Lovers</li>
                                          <li>Photography buffs</li>
                                          <li>Boating</li>
                                          <li>Horse Riding</li></ul>
                                          <h4 class="text-primary">Entrance Fee:</h4>
                                          <ul><li>Free Entry</li></ul>
                                          <h4 class="text-primary">Visiting Time:</h4>
                                          <ul><li>Entry allowed on all days</li>
                                            <li>Day and Evening times are favorable</li></ul>
                                            <h4 class="text-primary">Visit Duration:</h4>
                                            <ul><li>1 to 2 Hours</li></ul>
                                            <h4 class="text-primary">Nearby Attractions:</h4>
                                            <ul><li>Berijam Lake</li>
                                              <li>Coaker Lake</li>
                                              <li>Kodaikanal Solar Observatory</li>
                                              <li>Bryant Caves</li>
                                              <li>Chettiar Falls</li>
                                              <li>Kumbakarrai Falls</li>
                                              <li>Silver Cascade Falls</li>
                                              <li>Bear Shola Falls</li></ul>
                                              <h4 class="text-primary">Location:</h4>
                                              <ul><li>Kodaikanal,Dindigul District,TamilNadu,India</li></ul>
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
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                 		    <div class="card"><img alt="Card image cap" class="card-img-top fit-image img-responsive img-thumbnail" src="images/rameswaram.jpg">
                         <div class="card-block">
                              <h4 class="card-title text-primary">Dhanushkodi Beach</h4>
                          <p class="card-text">Dhanushkodi Beach lies on the tip of the Rameswaram island.In this beach, the Bay of Bengal and Indian Ocean merge which is known as Arichal Munai in Tamil.The Dhanushkodi Beach attracted thousands of tourists each day</p>  
                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ram">See more...</button>
                                <div class="modal fade" id="ram" role="dialog">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Dhanushkodi Beach</h4>
                                      </div>
                                      <div class="modal-body">
                                      <img src="images/rameswaram.jpg" class="img-responsive img-thumbnail">
                                      <b>
                                        <h4 class="text-primary">Best Time to Visit:</h4>
                                        <ul><li>The winter months from October to February are the best time to visit Dhanushkodi.</li></ul>
                                        <h4 class="text-primary">Timing:</h4>
                                        <ul><li>Timing:6 AM to 6 PM</li></ul>
                                        <h4 class="text-primary">Entry Fee:</h4>
                                        <ul><li>Entry Fee: Free (charges apply for jeep service)</li></ul>
                                        <h4 class="text-primary">Places to Visit Near DhanushKodi Beach:</h4>
                                        <ul><li>Vibhishan temple</li>
                                          <li>Dhanushkodi Beach Point</li>
                                          <li>Holy Island Water Sports</li>
                                          <li>Arulmigu Ramanathaswamy Temple</li>
                                          <li>Pamban Beach Rameswaram</li>
                                          <li>Dr.A.P.J. Abdul Kalam Memorial</li>
                                          <li>Ram sethu tours and travels</li>
                                          <li>Lakshmana Tirtham</li></ul>
                                           <h4 class="text-primary">Location:</h4>
                                           <ul><li>Dhanushkodi,Ramanathapuram Ditrict,TamilNadu,India</li></ul>
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
        </div>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>
	</body>
 </html>
