<?php
include("nav.php");
?>
<body>
<div class="container-fluid mt-5 pt-5">
<div class="row mt-5">
	<div class="col-sm-7">
		
		<?php
		$id = $_GET['id'];
		include("db.php");
		$query = "select * from connection where id = $id";
		$result = $con->query($query);
		
		list($a,$b,$c,$d,$e,$f,$g,$h) = $result->fetch_array();
		
		?>
		<form class=" p-3" method="post">
			<h3 class="w3-text-red">UPDATE CONNECTION</h3>
				<hr>
			<input type="text" class="form-control" value="<?php echo $b;?>" name="name">
			<br>
			<input type="text" class="form-control" value="<?php echo $c;?>" name="branch">
			<br>
			
			Connection Date
			<input type="date" class="form-control" name="cd" required 
				   value="<?php echo $d;?>"> 
			<br>
	No. of Cylinder
			<input type="number" class="form-control" name="cylinder" min=1 max=10 required
				   value="<?php echo $e;?>"> 
			<br>
			Connection Cost
			<input type="number" class="form-control" name="cost" min="5000" max="15000" required value="<?php echo $f;?>"> 
			<br>
			Address
			<textarea name="add" placeholder="Address" class="form-control" required><?php echo $g;?></textarea>
			<br>
			Description
			<textarea name="desp" placeholder="Description" class="form-control" required><?php echo $h;?></textarea>
			<br>
			<button type="submit" class="w3-button w3-red w3-text-white" name="login">Submit</button>
			<button type="reset" class="w3-button w3-black w3-text-white">Reset</button><br>
			
		</form></div>
	<div class="col-sm-5">
		<h3 class="w3-text-red">ADVERTISEMENT</h3>
		<hr>
	<img src="img/g2.jpg" class="img-fluid">
	</div>
	<?php
	
	
	if(isset($_POST['login']))
{
		
	$a = $_POST['name'];
	$b = $_POST['branch'];
	$c = $_POST['cd'];
	$d = $_POST['cylinder'];
	$e = $_POST['cost'];
		$f = $_POST['add'];
		$g = $_POST['desp'];
	$q = "update connection set name='$a',branch='$b',cd='$c',cylinder='$d',cost='$e',address='$f',desp='$g' where id='$id'";
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

	