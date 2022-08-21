<?php
include("nav.php");
?>
<body>
<div class="container-fluid mt-5 pt-5">
<div class="row mt-5">
	<div class="col-sm-7">
	<center><form class=" p-3" style="width:500px;height:auto" method="post" enctype="mutipart/form-data">
		<h3 class="w3-text-red">ADD CUSTOMER</h3>
				<hr>
		<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-users"></i></span>
			</div>
			<input type="text" placeholder="Name" class="form-control" name="n" required>
		</div>
			<div class="input-group mt-3">
		<div class="input-group-prepend">
	<span class="input-group-text w3-red w3-text-white"><i class="fa fa-user"></i></span>
				</div>
			<input type="text" placeholder="Username" class="form-control" name="user" required>
		</div>
				<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-birthday-cake"></i></span>
			</div>
			<input type="date" placeholder="Date of Birth" class="form-control" name="dob" required>
		</div>
			
<!--
				<div class="input-group mt-3">
					<div class="input-group-append">
						<button type="submit" class="w3-button w3-red w3-text-white" formnovalidate name="upd">Upload</button>
					</div>
			<input type="file" class="form-control" name="photo">
		</div>
-->
			
				<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-envelope"></i></span>
			</div>
			<input type="email" class="form-control" name="mail" placeholder="Mail" required>
		</div>
				<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-lock"></i></span>
			</div>
			<input type="password" class="form-control" name="pass" placeholder="Password" required>
		</div>
				<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-lock"></i></span>
			</div>
			<input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required>
		</div>
		
			<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-bars"></i></span>
			</div>
			<input type="text" class="form-control" name="country" placeholder="Country" required>
		</div>
		
				<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-bars"></i></span>
			</div>
			<input type="text" class="form-control" name="city" placeholder="City" required>
		</div>
		
		
				<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-home"></i></span>
			</div>
		<textarea name="add" placeholder="Address" class="form-control" required></textarea>
		</div>
		
			<br>
		
		
			<button type="submit" class="w3-button w3-red btn-block" name="login">ADD CUSTOMER</button>
			</form></center>
	
	</div>
	<div class="col-sm-5">
		<h3 class="w3-text-red">ADVERTISEMENT</h3>
				<hr>
	<img src="img/g3.jpg" class="img-fluid">
	
	</div></div>
	</div>
	<?php
include("db.php");

	

if(isset($_POST['login']))
{
	$a = $_POST['n'];
	$b = $_POST['user'];
	$c = $_POST['dob'];
	$d = $_POST['mail'];	
	$e = $_POST['pass'];
	$f = $_POST['cpass'];
	$g = $_POST['country'];
	$h = $_POST['city'];
	$i = $_POST['add'];
	if(!($e == $f))
	{
		echo "<div class='alert alert-success'>
		Password should be same
		<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";
	}
	else
	{
	$q = "insert into user(name,user,dob,mail,pass,cpass,country,city,address) values ('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
	
if($con->query($q))
	{
		echo "<div class='alert alert-primary'>
		Data is successfully registered
		<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";
	}
	
	
	else
	{
		echo "<div class='alert alert-warning'>
		Images and data is not registered
		<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";	
	}
	
}
	
}

?>

</body>
