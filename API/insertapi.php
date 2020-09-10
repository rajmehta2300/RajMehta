<?php
include("../conc.php");
	session_start();
	if(isset($_POST["add"])){
		$se = $_SESSION["s1"];
		
		$sel = mysqli_query($con,"select id from employee where email = '$se'");
		$row = mysqli_fetch_assoc($sel);
		$task = $_REQUEST["task"];
		$id = $row['id'];
		$ins = mysqli_query($con,"INSERT INTO `task`(`e_id`, `tasks`) VALUES ('$id','$task')");
		header("location:../data.php");
	}
?>