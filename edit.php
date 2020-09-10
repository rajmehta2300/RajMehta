<?php
	include("conc.php");

	if(isset($_POST["signup"])){
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$address = $_POST["address"];
		$target_dir = "upload/";
		
		

		if(empty($_FILES["file"]["name"])){
			header("location:no.php");
		}
		else{

			$filetype = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
			$filename = rand().$_FILES["file"]["name"];
			$targetfilepath = $target_dir . $filename;
				
			move_uploaded_file($_FILES["file"]["tmp_name"],$targetfilepath);
			
		}
		
		$ins1 = mysqli_query($con,"insert into employee(fname,lname,email,pass,address,file_path)
		values('$fname','$lname','$email','$pass','$address','$targetfilepath')");
		
		header("location:done.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Akshar WebSolution</title>
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
			<div class="col-md-3"></div>
			<div class="col-md-6" style="background: rgba(255,253,208,0.5);margin-top: 60px;margin-bottom: 60px;height: 600px; border-radius: 10px;">
				<div class="form-group">
					<form method="POST" action="signup.php"  enctype="multipart/form-data">
						Firstname<input type="text" method="post" name="fname" class="form-control" placeholder="Firstname">
						Lastname<input type="text" method="post" name="lname" class="form-control" placeholder="Lastname">
						Email<input type="text" method="post" name="email" class="form-control" placeholder="Emailid">
						Password<input type="password" method="post" name="pass" class="form-control" placeholder="Password">
						Address<input type="text" method="post" name="address" class="form-control" placeholder="Address">
						Profile Picture<input type="file" name="file" class="form-control">
						
						<input class="btn-primary" type="submit" name="Update" value="Update!">	
					</form>
				</div>
				
				<div class="row">
					<a href="http://aksharwebsolution.co.in"><img style="width: 180px; height:100px; margin-left: 205px;" src="img/akshar.png"></a>
				</div>
			</div>
			<div class="class-md-3"></div>
		</div>
	</div>
</body>
</html>