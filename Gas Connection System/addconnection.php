<?php
include("nav.php");
?>
<body>
<div class="container-fluid mt-5 pt-5">
<div class="row mt-5">
	<div class="col-sm-7">
	<h3 class="w3-text-red">ADD CONNECTION</h3>
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
			<select class="form-control" name="branch" required>
				<option value="">Please select Branch name</option>
			<?php
			include("db.php");
				$query = "select * from branch";
				$result = $con->query($query);
				while(list($a,$b,$c,$d,$e,$f) = $result->fetch_array())
				{
				echo "<option value='$b'>$b</option>";
				}
			?>
				
			</select>
		<br>
			Connection Date
			<input type="date" class="form-control" name="cd" required min="2018-11-20"> 
			<br>
	No. of Cylinder
			<input type="number" class="form-control" name="cylinder" min=1 max=10 required> 
			<br>
			Connection Cost
			<input type="number" class="form-control" name="cost" min="5000" max="15000" required> 
			<br>
			Address
			<textarea name="add" placeholder="Address" class="form-control" required></textarea>
			<br>
			Description
			<textarea name="desp" placeholder="Description" class="form-control" required></textarea>
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
		
	$a = $_POST['customer'];
	$b = $_POST['branch'];
	$c = $_POST['cd'];
	$d = $_POST['cylinder'];
	$e = $_POST['cost'];
		$f = $_POST['add'];
		$g = $_POST['desp'];
		
	$q = "insert into connection(name,branch,cd,cylinder,cost,address,desp) values ('$a','$b','$c','$d','$e','$f','$g')";
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