<?php
    include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	   
	   //create a template
       $sql="SELECT * FROM dam WHERE id=?;";
       //create a prepared statement
       $stmt=mysqli_stmt_init($conn);
       //prepare the prepared statement       
       if(!mysqli_stmt_prepare($stmt,$sql))
       {
       	echo " sql statement failed";
       } else{
       	     //bind parameters to the placeholder
       	mysqli_stmt_bind_param($stmt,'s',$id);
       	//run parameters inside the database
       	mysqli_stmt_execute($stmt);
       	$result=mysqli_stmt_get_result($stmt);

       }       
	?>
	
</body>
</html>