<!DOCTYPE html>
<html>
<head>
	<title>Gas Connection System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	<nav class="navbar navbar-expand-sm w3-red navbar-dark shadow fixed-top">
  <!-- Brand -->
  

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link pr-sm-5 w3-large text-white" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-sm-5 w3-large text-white" href="about.php">ABOUT US</a>
      </li>
<!--
      <li class="nav-item">
        <a class="nav-link pr-sm-5 w3-large text-white" href="#gallery">ALL CARS</a>
		</li>
		<li class="nav-item">
        <a class="nav-link pr-sm-5 w3-large text-white" href="cars.php">ALL COMPANIES</a>
		</li>
-->
		<li class="nav-item">
        <a class="nav-link pr-sm-5 w3-large text-white" href="login.php">LOGIN</a>
		</li>
		
		<li class="nav-item">
        <a class="nav-link pr-sm-5 w3-large text-white" href="contact.php">CONTACT US</a>
		</li>
		
		
<!--
		   <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
-->
    </ul>
  </div>
</nav>
		<div class="container-fluid pt-5 mt-5">
		<div class="row">
			<div class="col-sm-7">
			<h3 class="w3-text-red">CONTACT US</h3>
				<hr>
				<form method="post">
	<div class="form-group">
		<div class="input-group">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-user"></i></span>
			</div>
			<input type="text" placeholder="Name" class="form-control" name="n" required>
		</div>
	
		</div>
		<div class="form-group">
		<div class="input-group">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-phone"></i></span>
			</div>
			<input type="text" placeholder="Phone No." class="form-control" name="p" required>
		</div>
	
		</div>
		<div class="form-group">
		<div class="input-group">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-envelope"></i></span>
			</div>
			<input type="text" placeholder="Email" class="form-control" name="m" required>
		</div>
	
		</div>
		<div class="form-group">
		<textarea class="form-control" name="message" placeholder="Message" required></textarea>
		
		</div>
		
		<button type="submit" class="w3-button w3-red w3-hover-pale-red btn-block" name="login">Send Message</button>
	</form>
			</div>
			<div class="col-sm-5">
			<img src="img/g3.jpg" class="img-fluid">
			</div>
			</div>
		</div>
		
	</body>
</html>
<?php
if(isset($_POST['login']))
{
	include('db.php');
	$a = $_POST['n'];
	$b = $_POST['p'];
	$c = $_POST['m'];
	$d = $_POST['message'];
	$q = "insert into contact(name,phone,email,message) values ('$a','$b','$c','$d')";
	if($con->query($q))
	{
		echo "<script>alert('Message is sent')</script>";
	}
	else
	{
			echo "<script>alert('Message is not sent')</script>";
	}
}
?>