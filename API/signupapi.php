<?php
include("../conc.php");
if(isset($_POST["signup"])){
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$bdate = $_POST["bdate"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$mobile = $_POST["mobile"];
		
		
		$ins1 = mysqli_query($con,"insert into employee(fname,lname,bdate,email,pass,mobile)
		values('$fname','$lname','$bdate','$email','$pass','$mobile')");
		
		header("location:../index.php");
	}
	?>