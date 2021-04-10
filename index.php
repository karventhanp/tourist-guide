<?php
session_start();
$_SESSION['name']='12345';
?>
<!DOCTYPE HTML>
<html>
<head><title>Tourtick</title>
	     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/icon.png">
  
<style>
  body{ 
     margin:0;
	 padding:0;
	 background-image:url("css/images/login.jpg");
	 background-size:cover;
}
.head{
	color:white;
	position: absolute;
	top: 10px;
	left:47%; 
}
.Main{
	   top:45%;
	   left:50%;
	   position:absolute;
	   transform:translate(-50%,-50%);
	   
}
.Sub{
	padding:60px 40px 50px 40px;
	background-color:#cccccc;
	border-radius:10px;
	
}
#name{
	color:black;
	font-weight:bold;
	width:230px;
	border:none;
	background:transparent;
	border-bottom:1px solid white;
	padding:10px;
	margin-bottom:20px;
	outline:none;
	
}	
#v{
  height:100px;
	width:100px;
	   top:0%;
	   left:50%;
	   position:absolute;
	   transform:translate(-50%,-50%);
}
a{
	font-size:14px;
	font-weight:bold;
	color:black;
	top:90%;
	left:60%;
	position:absolute;
}
#s{
	color:black;
	top:90%;
	left:5%;
	position:absolute;
	}

#bb{
	font-weight:bold;
	border-radius:10px;
	padding:10px 15px;
	background:dodgerblue;
	color:white;
	margin-top:8px;
	border:none;
	outline:none;
	margin-left:80px;
  }
a{
    text-decoration: none;
  }

</style>
</head>
<body>
	<div class="head">
		<h2>SIGN IN</h2>
	</div>
     <div class="Main">	
	     <div class="Sub">		 
		      <img src="images/icon2.png" id="v" ><img/></br>
			  <form name="form1"   method="POST">
              <input type="text" name="uname" placeholder="Username" id="name" required=""></br>
	          <input type="password" name="pswd" placeholder="Password" id="name" required=""></br>
			  <a href="forgot.php" onmouseover="this.style.color='red'" onmouseout="this.style.color='black'" id="ün">Forgot Password?</a></br>
	          <input type="submit"  formaction="index.php" name="login-submit"  value="Login" id="bb">
			  </form>
	     </div>
		 <a href="register.php" onmouseover="this.style.color='red'"
           onmouseout="this.style.color='black'" id="s">Create new account!</a>
     </div>	 
     <?php
if(isset($_POST['login-submit']))
{
       $USERNAME=$_POST['uname'];
       $PSWD=$_POST['pswd'];
       if(!empty($USERNAME)||!empty($PSWD))
       {

         include_once 'include/dbh.inc.php';
          $sql="SELECT USERNAME,PSWD FROM register WHERE USERNAME='$USERNAME' AND PSWD='$PSWD'";
          $result=mysqli_query($conn,$sql);
          $count=mysqli_num_rows($result);
          if(($count)==0)
          {
             header("Location:register.php?error=username does not exist create new account");
          }
          else
          {
            $_SESSION['ID']='1234#@56';
            header("Location:main.php");
           }
                  
          $conn->close();

       }

       else//1 if statement
       {
        header("Location:index.php?error=All Fields require");
       }
     }
     ?>
        
</body>
</html>