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
    h4{
        margin-left: 550px;
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
    				<li class="nav-item"><a class="nav-link"href="main.php"><span class="glyphicon glyphicon-home">&ensp;Home</span></a></li>
    				<li class="nav-item"><a class="nav-link" href="temple.php"><span class="glyphicon glyphicon-road">&ensp;Temples</span></a></li>
    				<li class="nav-item"><a class="nav-link"href="hill.php"><span class="glyphicon glyphicon-oil">&ensp;Hill&ensp;Stations</span></a></li>    				
    				<li class="nav-item"><a class="nav-link"href="beach.php"><span class="glyphicon glyphicon-cloud">&ensp;Beaches</span></a></li>
    				<li class="nav-item"><a class="nav-link"href="dam.php"><span class="glyphicon glyphicon-inbox">&ensp;Dam's</span></a></li>
    				<li class="nav-item"><a class="nav-link"href="park.php"><span class="glyphicon glyphicon-piggy-bank">&ensp;Sanctuaries&ensp;&&ensp;National&ensp;Park's</span></a></li>
            <li class="nav-item"><a class="nav-link"href="fort.php"><span class="glyphicon glyphicon-tower">&ensp;Fort's</span></a></li>
                    <li class="nav-item"><a class="nav-link"href="fort.php"><span class="glyphicon glyphicon-tower">&ensp;Fort's</span></a></li>
    				<li class="active nav-item"><a class="nav-link"href="about.php"><span class="glyphicon glyphicon-about">&ensp;About</span></a></li>
                    
            
    			</ul>
    			<ul class="nav navbar-nav navbar-right">
    				<li class="nav-item"><a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-out">&ensp;SignOut</span></a></li>
    			</ul>
    	</nav>
    	   <nav class="navbar navbar-default navbar-fixed">
    		<div class="container-fluid">
    			<div class="nav navbar-nav">
    				<h4>Developed by Karventhan P</h4>
    			</div>	    			 			
    		</div>
    	</nav>    	
    	    
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>
	</body>
 </html>
