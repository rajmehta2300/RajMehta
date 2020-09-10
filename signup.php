<?php
	include("conc.php");
    global $fet; 
	
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Here!</title>
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
					<form method="POST" action="API/signupapi.php"  enctype="multipart/form-data">
						<input type="text" method="post" name="id" style="display: none;" value="<?php echo $fet["id"]; ?>">
						Firstname<input type="text" method="post" name="fname" class="form-control" placeholder="Firstname" value="<?php echo $fet["fname"]; ?>">
						Lastname<input type="text" method="post" name="lname" class="form-control" placeholder="Lastname" value="<?php echo $fet["lname"]; ?>">
						BirthDate<input type="date" method="post" name="bdate" class="form-control" placeholder="Date-Of-Birth" value="<?php echo $fet["fname"]; ?>">
						Email<input type="text" method="post" name="email" class="form-control" placeholder="Emailid" value="<?php echo $fet["email"];?>" <?php if(isset($_REQUEST["edit"])){echo "disabled";} else{echo "";}?>>
						Password<input type="<?php if(isset($_REQUEST["edit"])){echo "text"; } else{echo "password";}?>" method="post" name="pass" class="form-control" placeholder="Password" value="<?php echo $fet["pass"]; ?>">
						Mobile<input type="text" method="post" name="mobile" class="form-control" placeholder="Mobile Number" value="<?php echo $fet["mobile"]; ?>">
						
						
						<input class="btn-primary" type="submit" name="<?php if(isset($_REQUEST["edit"])){echo "update";} else{echo "signup";}?>" value="<?php if(isset($_REQUEST["edit"])){echo "Update!";} else{echo "SignUp!";}?>">	
					</form>
				</div>
				
				<a  href="index.php" style="margin-left: 135px;">Already Have An Account? Please Click Here!</a>
				
			</div>
			<div class="class-md-3"></div>
		</div>
	</div>
</body>
</html>