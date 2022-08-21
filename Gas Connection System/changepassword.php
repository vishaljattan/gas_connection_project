<?php
include("nav.php");
?>
<body>
<div class="container-fluid mt-5 pt-5">
<div class="row mt-5">
	<div class="col-sm-8">
		<h3 class="w3-text-red">Change Password</h3>
				<hr>
		<form method="post">
		<input type="password" class="form-control" name="new" placeholder="New Password">
			<br>
			<input type="password" class="form-control" name="confirm" placeholder="Confirm Password">
			<br>
			<button type="submit" class="w3-button w3-red w3-text-white" name="login">Submit</button>
			<button type="reset" class="w3-button w3-black w3-text-white">Reset</button>	
			
		
		</form></div>
	<div class="col-sm-4">
	<h3 class="w3-text-red">Advertisement</h3>
				<hr>
		<img src="img/g3.jpg" class="img-fluid">
	</div>
	</div>
	</div>
</body>
<?php
if(isset($_POST['login']))
{
	$a = $_POST['new'];
	$b = $_POST['confirm'];
	if(!($a == $b))
	{
		echo "<script>alert('Password should be matched');</script>";
	}
	else
	{
		include('db.php');
		$a = "update admin set password='$a' where id=1";
		if($con->query($a))
		{
			echo "<script>alert('Updated');</script>";
		}
		else
		{
			echo "<script>alert('Not Updated');</script>";
		}
		
	}
}