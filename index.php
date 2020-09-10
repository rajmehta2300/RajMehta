<?php
	include("conc.php");
	session_start();
	if(isset($_REQUEST["login"])){
		$email = $_REQUEST["email"];
		$pass = $_REQUEST["pass"];
		$sel = mysqli_query($con,"select * from employee where email='$email' and pass='$pass'");
		$num = mysqli_num_rows($sel);
		if($num==1){
			$_SESSION["s1"] = $email;
			header("location:data.php");
		}
		else{
			echo "Invalid username or password!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Here!</title>
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
				<form method="POST" action="index.php">
					Email<input type="text" method="post" name="email" class="form-control" placeholder="Email">
					Password<input type="password" method="post" name="pass" class="form-control" placeholder="Password">
					<input type="submit" name="login" class="btn-primary" value="Login!">
				</form>	
				</div>
				<a  href="signup.php" style="margin-left: 170px;">No account? Please Click Here!</a>
				<a  href="adminlogin.php" style="margin-left: 170px;">Are You Admin? Please Click Here!</a>
					
			</div>
			<div class="col-md-3">
			</div>
		</div>
	</div>
</body>
</html>
