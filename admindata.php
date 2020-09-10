<?php
include("conc.php");
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome! Admin</title>
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
		<div class="col-md-3"></div>
		<div class="col-md-6" style="margin-top: 100px;">
			<p>
				<?php
					if(isset($_SESSION["s1"])){
						echo "Welcome  ".$_SESSION["s1"];
					}
					else{
						header("location:adminlogin.php");
					}
				?>
			</p>
			<a href="adminlogout.php">Logout!</a>
			<div class="container">
		
	</div>
			<table class="table table-bordered table-dark" style="border-radius: 7px;">
					  <thead>
						<tr>
						  <th scope = "col">Employee Name</th>
						  <th scope="col">Tasks</th>
						  
						  
						</tr>
					  </thead>
					  <?php
					    $sel = mysqli_query($con,"select e.fname , t.tasks from employee e join task t on e.id = t.e_id");
						while($fetch = mysqli_fetch_array($sel))
						{
					  ?>
					  <tbody>
						<tr>
						  <td><?php echo $fetch["fname"];?></td>
						  <td><?php echo $fetch["tasks"];?></td>
						  
						  
						  
						  	
						</tr>
						
					  </tbody>
					  <?php
						}
					  ?>	
			</table>
			
		</div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>