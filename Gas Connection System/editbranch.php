<?php
include("nav.php");
?>
<body>
<div class="container-fluid mt-5 pt-5">
<div class="row mt-5">
	<div class="col-sm-9">
		<h3 class="w3-text-red">Edit Branch Report</h3>
				<hr>
		<?php
		$id = $_GET['id'];
		include("db.php");
		$query = "select * from branch where id = $id";
		$result = $con->query($query);
		
		list($a,$b,$c,$d,$e,$f) = $result->fetch_array();
		
		?>
		<form class="p-3" method="post">
			<input type="text" class="form-control" placeholder="Branch Name" name="bn" required value="<?php echo $b; ?>">
			<br>
			<input type="email" class="form-control" placeholder="Branch Email" name="email" required value="<?php echo $c; ?>">
			<br>
			<input type="number" class="form-control" placeholder="Branch Phone" name="phone"
				   maxlength = "10" required value="<?php echo $d;?>">
			<br>
			<input type="text" class="form-control" placeholder="Branch City" name="city"
				   required value="<?php echo $e; ?>">
			<br>
			<input type="text" class="form-control" placeholder="Branch State" name="state"
				   required value="<?php echo $f; ?>">
			<br>
			<button type="submit" class="w3-button w3-red w3-text-white" name="login">Submit</button>
			<button type="reset" class="w3-button w3-black w3-text-white">Reset</button>	
			
			
			
		</form>
	</div>
	<div class="col-sm-3">
		<h3 class="w3-text-red">ADVERTISEMENT</h3>
				<hr>
	<img src="img/g1.jpg" class="img-fluid">
	</div>
	</div>
	
	<?php
		$id = $_GET['id'];
	include("db.php");
if(isset($_POST['login']))
{
	$a = $_POST['bn'];
	$b = $_POST['email'];
	$c = $_POST['phone'];
	$d = $_POST['city'];
	$e = $_POST['state'];
	$q = "update branch set name='$a',email='$b',phone='$c',city='$d',state='$e' where id='$id'";
	
if($con->query($q))
	{
		echo "<div class='alert alert-primary'>
		Data is successfully updated
		<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";
	}
	
	
	else
	{
		echo "<div class='alert alert-warning'>
		Data is not updated
		<button type='button' class='close' data-dismiss='alert'>&times;</button></div>";	
	}
	
}
	
	?>
