<?php
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="project01";
        $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(!$conn)
	{
		die("Connection failed:".mysqli_connect_error());
	}
       
     