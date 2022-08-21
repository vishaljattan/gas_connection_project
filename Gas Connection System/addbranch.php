<?php
include("nav.php");
?>
<body>
<div class="container-fluid mt-5 pt-5">
<div class="row mt-5">
	<div class="col-sm-7">
	<h3 class="w3-text-red">ADD BRANCH</h3>
				<hr>
		<form class="p-3" style="width:500px;height:auto" method="post">
			<input type="text" class="form-control" placeholder="Branch Name" name="bn" required>
			<br>
			<input type="email" class="form-control" placeholder="Branch Email" name="email" required>
			<br>
			<input type="number" class="form-control" placeholder="Branch Phone" name="phone"
				   maxlength = "10" required>
			<br>
			<input type="text" class="form-control" placeholder="Branch City" name="city"
				   required>
			<br>
			<input type="text" class="form-control" placeholder="Branch State" name="state"
				   required>
			<br>
			<button type="submit" class="w3-button w3-red w3-text-white" name="login">Submit</button>
			<button type="reset" class="w3-button w3-black w3-text-white">Reset</button>	
			
			
			
		</form>
	</div>
	<div class="col-sm-5">
		<h3 class="w3-text-red">ADVERTISEMENT</h3>
				<hr>
	<img src="img/g1.jpg" class="img-fluid">
	</div>
	</div>
	<?php
include("db.php");

	

if(isset($_POST['login']))
{
	$a = $_POST['bn'];
	$b = $_POST['email'];
	$c = $_POST['phone'];
	$d = $_POST['city'];
	$e = $_POST['state'];
	$q = "insert into branch(name,email,phone,city,state) values ('$a','$b','$c','$d','$e')";
	
if($con->query($q))
	{
		echo "<div class='alert alert-primary'>
		Data is successfully registered
		<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";
	}
	
	
	else
	{
		echo "<div class='alert alert-warning'>
		Data is not registered
		<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";	
	}
	
}
	


?>
