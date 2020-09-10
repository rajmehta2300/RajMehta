<?php
	include("conc.php");
	session_start();
	if(isset($_REQUEST["login"])){
		$uname = $_REQUEST["uname"];
		$pass = $_REQUEST["pass"];
		$sel = mysqli_query($con,"select * from admin where uname='$uname' and pass='$pass'");
		$num = mysqli_num_rows($sel);
		if($num==1){
			$_SESSION["s1"] = $uname;
			header("location:admindata.php");
		}
		else{
			echo "Invalid username or password!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/query.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
		background-image:url(img/back.jpg);
		background-size : cover;
	}
	</style>
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" style="background: rgba(255,253,208,0.5);margin-top: 160px;height: 340px;border-radius: 10px;">
				<div class="form-group">
				<form method="POST" action="adminlogin.php">
					Username<input type="text" method="post" name="uname" class="form-control" placeholder="Username">
					Password<input type="password" method="post" name="pass" class="form-control" placeholder="Password">
					<input type="submit" name="login" class="btn-primary" value="Login!">
				</form>	
				</div>
				<a  href="signup.php" style="margin-left: 170px;">No account? Please Click Here!</a>
				<a  href="index.php" style="margin-left: 170px;">Already Have An Account? Please Click Here!</a>
					
			</div>
			<div class="col-md-3">
			</div>
		</div>
	</div>
</body>
</html>
