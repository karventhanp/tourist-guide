<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:index.php?error=you+are+not+login");
}
?>
<!DOCTYPE HTML>
<html>
<head><title>New Account Creation</title>
	     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/icon.png">
<link rel="stylesheet" type="text/css" href="css/register.css">	  
</head>
<body>
  <div class="Main2">
    <div class="head">
    <h2 style="color: white">Create New Account</h2>
  </div>
       <div class="Sub2">
    <img src="images/icon2.png" id="c"></img></br>
	<form name="form1"  method="POST">
    <input type="text" name="fullname" placeholder="Full name" id="name" required=""></br>
	<input type="email" name="email" placeholder="Email address" id="name" required=""></br>
	<input type="password" name="upswd1" placeholder="Password" id="name" required=""></br>
	<input type="password" name="upswd2" placeholder="Retype Password" id="name" required=""></br>
	<input type="submit"  formaction="register.php" name="register-submit" value="Create!" id="b" >
	</form>
	</div>
  </div>
  <?php
 if(isset($_POST['register-submit']))
 {
  include_once 'include/dbh.inc.php';
$USERNAME=$_POST['fullname'];
$EMAIL =$_POST['email'];
$PSWD =$_POST['upswd1'];
$PSWD1 =$_POST['upswd2'];
//checking values
if(empty($USERNAME)||empty($EMAIL)||empty($PSWD)||empty($PSWD1))
{
  header("Location:register.php?error=emptyfields&username=".$USERNAME."&email=".$EMAIL);
  exit();
}
else if(!filter_var($EMAIL,FILTER_VALIDATE_EMAIL)&& !preg_match("/^[a-zA-Z0-9]*$/",$USERNAME))
{
  header("Location:register.php?error=invalidmail&username");
  exit();
}
else if(!filter_var($EMAIL,FILTER_VALIDATE_EMAIL))
{
  header("Location:register.php?error=invalidmail&username=".$USERNAME);
  exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/",$USERNAME)) {
  header("Location:register.php?error=invalidusername&mailiid=".$EMAIL);
  exit();
}
else if($PSWD!==$PSWD1)
{
header("Location:register.php?error=passwordcheck&username=".$USERNAME."&email=".$EMAIL);
  exit();
}
else {
  $sql="SELECT USERNAME FROM register WHERE USERNAME=?";
  $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql))
  {
    header("Location:register.php?error=sqlerror");
  exit();
  }
  else{
    mysqli_stmt_bind_param($stmt,"s",$USERNAME);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck=mysqli_stmt_num_rows($stmt);
    if($resultCheck>0)
    {
      header("Location:register.php?error=usertaken");
       exit();
    }
    else{        
      $SELECT ="SELECT EMAIL FROM register WHERE EMAIL= ? LIMIT 1 ";//set limit for email id
       $INSERT ="INSERT INTO register(USERNAME,EMAIL,PSWD)VALUES(?,?,?)";//said by inserting values for  this 4 fields by order
       //prepare statement for inserting for email
       $stmt=$conn->prepare($SELECT);
       $stmt->bind_param("s",$EMAIL);//s for string ,if any number i
       $stmt->execute();
       $stmt->bind_result($EMAIL);
       $stmt->store_result();
       $rnum=$stmt->num_rows;
       if($rnum>0)
       {
        header("Location:register.php?error=emailtaken");
       }
       else
              {
        $stmt->close();
        $stmt=$conn->prepare($INSERT);
        $stmt->bind_param("sss",$USERNAME,$EMAIL,$PSWD);
        $stmt->execute();
        header("Refresh:1; url=index.php?sucess");
       }
         }
  
      }
   }   
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
  ?>
  </body>
</html>