<?php
include("nav.php");
?>
<body>
<div class="container-fluid mt-5 pt-5">
<div class="row mt-5">
	<div class="col-sm-7">
	<h3 class="w3-text-red">ADD BOOKING</h3>
				<hr>
		<form class="p-3" style="width:500px;height:auto" method="post" enctype="multipart/form-data">
			<select class="form-control" name="customer" required>
				<option value="">Please select customer name</option>
			<?php
			include("db.php");
				$query = "select * from user";
				$result = $con->query($query);
				while(list($a,$b,$c,$d,$e,$f,$g,$h,$i,$j) = $result->fetch_array())
				{
				echo "<option value='$b'>$b</option>";
				}
			?>
				
			</select>
		<br>
			<input type="number" class="form-control" name="na" placeholder="Booking Amount" required min="600" max="2500">
			<br>
			Booking Date
			<input type="text" name="ba" value="<?php echo date('d/m/y'); ?>" class="form-control" required>
			<br>
			Delivery Date
			<input type="text" name="da" value="<?php $a = mktime(0,0,0,date('m'),date('d') + 3,date('y')); echo  date('d/m/y',$a); ?>" class="form-control" required>
			<br>
			<textarea placeholder="Booking Description" name="desp" class="form-control" required></textarea>
			<br>
			<button type="submit" class="w3-button w3-red w3-text-white" name="login">Submit</button>
			<button type="reset" class="w3-button w3-black w3-text-white">Reset</button>	
		</form>
	</div>
	<div class="col-sm-5">
		<h3 class="w3-text-red">ADVERTISEMENT</h3>
				<hr>
	<img src="img/g3.jpg" class="img-fluid">
	</div>
	</div>
	<?php
	if(isset($_POST['login']))
{
	$a = $_POST['customer'];
	$b = $_POST['na'];
	$c = $_POST['ba'];
	$d = $_POST['da'];
	$e = $_POST['desp'];
	$q = "insert into booking(name,bamount,bdate,bdelivery,desp) values ('$a','$b','$c','$d','$e')";
	
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