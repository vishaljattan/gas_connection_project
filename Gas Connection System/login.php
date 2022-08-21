<?php
session_start();
?>
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
			<div class="col-sm-8">
			<h3 class="w3-text-red">LOGIN TO YOUR ACCOUNT</h3>
				<hr>
			<form class="p-3" style="width:500px;height:200px" method="post">
			<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-user"></i></span>
			</div>
			<input type="text" placeholder="Username" class="form-control" name="user" required>
		</div>
				<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-lock"></i></span>
			</div>
			<input type="password" placeholder="Password" class="form-control" name="pass" required>
		</div>
			<br>
			<button type="submit" class="w3-button w3-red btn-block" name="login">Login</button>
			</form>
			
			
			</div>
			<div class="col-sm-4">
				<h3 class="w3-text-red">ADVERTISEMENT</h3><hr>
			<img src="img/g4.jpg" class="img-fluid">
			
			</div>
			
			</div>
		
		</div>
	</body>
</html>
<?php
if(isset($_POST['login']))
{
	include("db.php");
	$u = $_POST['user'];
	$p = $_POST['pass'];
	$_SESSION['username'] = $u;
	$q = "select * from admin where user ='$u' and password = '$p'";
	$r = $con->query($q);
	list($a,$b,$c) = $r->fetch_array();
	if($u == $b && $p == $c)
	{
		header("location:administrator.php");
	}
	else
	{
		echo "<script>alert('Username and Password is not valid')</script>";
	}
	
}
?>