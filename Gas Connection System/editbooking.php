<?php
include("nav.php");
?>
<body>
<div class="container-fluid mt-5 pt-5">
<div class="row mt-5">
	<div class="col-sm-9">
		<h3 class="w3-text-red">Edit Booking Report</h3>
				<hr>
		<?php
		$id = $_GET['id'];
		include("db.php");
		$query = "select * from booking where id = $id";
		$result = $con->query($query);
		
		list($a,$b,$c,$d,$e,$f) = $result->fetch_array();
		
		?>
		<form class=" p-3" method="post">
			<input type="text" class="form-control" value="<?php echo $b; ?>" name="customer">
			<br>
			<input type="number" class="form-control" name="na" placeholder="Booking Amount" required min="600" max="2500" value="<?php echo $c; ?>">
			<br>
			Booking Date
			<input type="text" name="ba" value="<?php echo date('d/m/y'); ?>" class="form-control" required>
			<br>
			Delivery Date
			<input type="text" name="da" value="<?php $a = mktime(0,0,0,date('m'),date('d') + 3,date('y')); echo  date('d/m/y',$a); ?>" class="form-control" required>
			<br>
			<textarea placeholder="Booking Description" name="desp" class="form-control" required><?php echo $f; ?></textarea>
			<br>
			<button type="submit" class="w3-button w3-red w3-text-white" name="login">Submit</button>
			<button type="reset" class="w3-button w3-black w3-text-white">Reset</button>	
		</form>
	</div>
	<div class="col-sm-3">
		<h3 class="w3-text-red">ADVERTISEMENT</h3>
				<hr>
	<img src="img/g3.jpg" class="img-fluid">
	</div>
	</div>
	<?php
		$id = $_GET['id'];
	include("db.php");

	if(isset($_POST['login']))
{
	$a = $_POST['customer'];
	$b = $_POST['na'];
	$c = $_POST['ba'];
	$d = $_POST['da'];
	$e = $_POST['desp'];
	$q = "update booking set name='$a',bamount='$b',bdate='$c',	bdelivery='$d',desp='$e' where id='$id'";
	
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
