<?php
include("nav.php");
?>
<body>
<div class="container-fluid mt-5 pt-5">
<div class="row mt-5">
	<div class="col-sm-9">
		<h3 class="w3-text-red">Edit Customer Report</h3>
				<hr>
		<?php
		$id = $_GET['id'];
		include("db.php");
		$query = "select * from user where id = $id";
		$result = $con->query($query);
		
		list($a,$b,$c,$d,$e,$f,$g,$h,$i,$j) = $result->fetch_array();
		
		?>
		<form class=" p-3" method="post">
		<h3 class="w3-text-red">ADD CUSTOMER</h3>
				<hr>
		<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-users"></i></span>
			</div>
			<input type="text" placeholder="Name" class="form-control" name="n" required value="<?php echo $b; ?>">
		</div>
			<div class="input-group mt-3">
		<div class="input-group-prepend">
	<span class="input-group-text w3-red w3-text-white"><i class="fa fa-user"></i></span>
				</div>
			<input type="text" placeholder="Username" class="form-control" name="user" required
				value="<?php echo $c; ?>">
		</div>
				<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-birthday-cake"></i></span>
			</div>
			<input type="date" placeholder="Date of Birth" class="form-control" name="dob" required value="<?php echo $d; ?>">
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
			<input type="email" class="form-control" name="mail" placeholder="Mail" required
				   value="<?php echo $e; ?>">
		</div>
				<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-lock"></i></span>
			</div>
			<input type="password" class="form-control" name="pass" placeholder="Password" required value="<?php echo $f; ?>">
		</div>
				<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-lock"></i></span>
			</div>
			<input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required value="<?php echo $g; ?>">
		</div>
		
			<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-bars"></i></span>
			</div>
			<input type="text" class="form-control" name="country" placeholder="Country" required value="<?php echo $h; ?>">
		</div>
		
				<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-bars"></i></span>
			</div>
			<input type="text" class="form-control" name="city" placeholder="City" required
				   value="<?php echo $i; ?>">
		</div>
		
		
				<div class="input-group mt-3">
		<div class="input-group-prepend">
			<span class="input-group-text w3-red w3-text-white"><i class="fa fa-home"></i></span>
			</div>
		<textarea name="add" placeholder="Address" class="form-control" required><?php echo $j; ?></textarea>
		</div>
		
			<br>
		
		
			<button type="submit" class="w3-button w3-red btn-block" name="login">UPDATE CUSTOMER</button>
			</form>
	</div>
	<div class="col-sm-3">
	<h3 class="w3-text-red">ADVERTISEMENT</h3>
				<hr>
	<img src="img/g2.jpg" class="img-fluid">
	</div>
	</div>
	</div>
</body>
<?php
include("db.php");
$id = $_GET['id'];
	

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
	
	$q = "update user set name='$a',user='$b',dob='$c',mail='$d',pass='$e',cpass='$f',country='$g',city='$h',address='$i' where id=$id";
		if($con->query($q))
	{
		echo "<div class='alert alert-primary'>
		Data is successfully Updated
		<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";
	}
	
	
	else
	{
		echo "<div class='alert alert-warning'>
		Data is not Updated
		<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";	
	}
	
}

	
	?>