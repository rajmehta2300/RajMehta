<?php
	$host="localhost";
	$uname="root";
	$pass="";
	$db_name="raj";
	
	$con = mysqli_connect($host,$uname,$pass,$db_name);
	if(!$con){
		echo "Database not connected".mysqli_error();
	}
?>