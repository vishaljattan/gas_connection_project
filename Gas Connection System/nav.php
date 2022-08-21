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
		<?php
		if(isset($_SESSION['username']))
		{
		?>
		<nav class="navbar navbar-expand-sm w3-red navbar-dark shadow fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#">GAS CONNECTION SYSTEM</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
		<li class="nav-item">
        <a class="nav-link w3-large text-white" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link w3-large text-white" href="about.php">About Us</a>
      </li>
		<li class="nav-item">
        <a class="nav-link w3-large text-white" href="administrator.php">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link w3-large text-white dropdown-toggle" href="about.php" data-toggle="dropdown">Administration</a>
		  <div class="dropdown-menu">
		  <a class="dropdown-item" href="addcustomer.php">ADD CUSTOMER</a>
			  	  <a class="dropdown-item" href="addbooking.php">ADD BOOKING</a>
			  	  <a class="dropdown-item" href="addconnection.php">ADD CONNECTION</a>
			  	  <a class="dropdown-item" href="addbranch.php">ADD BRANCH</a>
			  
		  </div>
      </li>
		    <li class="nav-item dropdown">
        <a class="nav-link w3-large text-white dropdown-toggle" data-toggle="dropdown" href="about.php">Reports</a>
				  <div class="dropdown-menu">
				<a class="dropdown-item" href="customerreport.php">CUSTOMER REPORT</a>
			  	  <a class="dropdown-item" href="bookreport.php">BOOKING REPORT</a>
			  	  <a class="dropdown-item" href="viewconnection.php">CONNECTION REPORT</a>
			  	  <a class="dropdown-item" href="branchreport.php">BRANCH REPORT</a>
				</div>
      </li>
			    <li class="nav-item">
        <a class="nav-link w3-large text-white" href="viewcontact.php">View Contact</a>
      </li>
				    <li class="nav-item">
        <a class="nav-link w3-large text-white" href="changepassword.php">Change Password</a>
      </li>
		
      <li class="nav-item">
        <a class="nav-link w3-large text-white" href="#"><?php echo $_SESSION['username'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link w3-large text-white" href="logout.php">Logout</a>
      </li>

    </ul>
  </div>
</nav>
		
		<?php
		}
		else
		{
			echo "<h1 class='text-center'>Please Login Again to view the page</h1>";
			echo "<p class='text-center'><a href='login.php'>Go to Login</a></p>";
		}
		?>