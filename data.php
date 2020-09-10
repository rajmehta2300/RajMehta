<?php
include("conc.php");
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
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
						header("location:index.php");
					}
				?>
			</p>
			<a href="logout.php">Logout!</a>
			<div class="container">
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" style="background: rgba(255,253,208,0.5);margin-top: 50px;margin-bottom: 20px;height: 100px;width: 250px;border-radius: 10px;">
				<div class="form-group">
				<form method="POST" action="API/insertapi.php">
					<input type="text" method="post" name="task" class="form-control" placeholder="Add Your Task Here!">
					
					<input type="submit" name="add" style="margin-top: 10px;" value="Add!">
				</form>	
				</div>
				
					
			</div>
			<div class="col-md-3">
			</div>
		</div>
	</div>
			<table class="table table-bordered table-dark" style="border-radius: 7px;">
					  <thead>
						<tr>
						  
						  <th scope="col">Tasks</th>
						  
						  
						</tr>
					  </thead>
					  <?php
					    $se = $_SESSION["s1"];
						$sel = mysqli_query($con,"select id from employee where email = '$se'");
						$row = mysqli_fetch_assoc($sel);
						$id = $row['id'];
						$sel = mysqli_query($con,"select * from task where e_id = '$id'");
						$num = mysqli_num_rows($sel);
						while($fetch = mysqli_fetch_array($sel))
						{
					  ?>
					  <tbody>
						<tr>
						  
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
