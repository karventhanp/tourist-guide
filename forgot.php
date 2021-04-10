<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:index.php?error=you+are+not+login");
}
?>
<!DOCTYPE HTML>
<html>
<head><title>Set New Password</title>	
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/icon.png">
<link rel="stylesheet" type="text/css" href="css/forgot.css">
</head>
<body>
<div class="heading"> 
 <h2>Set New Password</h2>
 </div>	
     <div class="Main3">	
	     <div class="Sub3">		 
		      <img src="images/icon2.png" id="k"></img></br>
			  <form name="form1"  method="POST">
			  <input type="text" placeholder="Username" id="name" name="uname" required=""></br>
              <input type="password" placeholder="New Password" id="name" name="npswd" required=""></br>
	          <input type="password" placeholder="Re-Enter Password" id="name" name="rpswd" required=""></br>
		      <input type="submit" formaction="forgot.php" name="forgot-submit" value="Submit" id="d">
			  </form>
	     </div>
	 </div>
	 <?php
 if(isset($_POST['forgot-submit']))
 {
$USERNAME=$_POST['uname'];
$npswd=$_POST['npswd'];
$rpswd=$_POST['rpswd'];
if(!empty($USERNAME)||!empty($npswd)||!empty($rpswd))
{
  $host="localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="project01";
  $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
  if(mysqli_connect_error())
    {
      die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
  else
   {
   	$sql="SELECT USERNAME FROM register WHERE USERNAME='".$USERNAME."'";
   	$result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
   	if($count!=0)
   	{
   		if($npswd==$rpswd)
   		{   		   	
           $sql1="UPDATE register SET PSWD='$npswd' WHERE USERNAME='$USERNAME'";
           if(mysqli_query($conn,$sql1))
           	{
           		session_start();
           		session_destroy();
           	 header("Refresh:1; url=index.php?success=changed");
   		   		}
   		   else
   		   {
   		   	header("Location:forgot.php?error=sqlerror");
   		   }   
   		}

   		else
   		{
   			header("Location:forgot.php?error=passwordcheck&password=".$npswd."&retypepassword=s".$rpswd);
   			header("Refresh:1; url=forgot.php");
   		}
   	}
   	else
   	{
   		header("Location:register.php?error=username doesnot exist create new account");
   	}
   }
   $conn->close();
}
else
{
	header("Location:forgot.php?error=all fields require");
}
}
?>
</body>
<html>