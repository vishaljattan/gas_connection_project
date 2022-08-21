<?php
include("nav.php");
?>
<body>
<div class="container-fluid mt-5 pt-5">
<div class="row mt-5">
	<div class="col-sm-9">
		<h3 class="w3-text-red">View And Edit Booking Report</h3>
				<hr>
		<table class="table table-bordered table-hover">
		<tr><th>Sr.No.</th><th>Booking Name</th><th>Booking Amount</th><th>Booking Date</th>
			<th>Booking Delivery</th><th>Booking Description</th><th>Action</th><th>Delete</th></tr>
		<?php
		include("db.php");
		$query = "select * from booking";
		$result = $con->query($query);
		
		while(list($a,$b,$c,$d,$e,$f) = $result->fetch_array())
		{
			echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td>$f</td><td><a href='editbooking.php?id=$a'>Edit</a></td><td><a href='bookreport.php?id=$a'>Delete</td></tr>";
		}
			?>
		</table>
	</div>
	<div class="col-sm-3">
	<h3 class="w3-text-red">Advertisement</h3>
				<hr>
		<img src="img/g3.jpg" class="img-fluid">
	</div>
	</div>
	</div>
	<?php
if(isset($_GET['id']))
{
$id = $_GET['id'];
include("db.php");
$query = "delete from booking where id = '$id'";
if($con->query($query))
{
	echo "<script>alert('Record is deleted');location.replace('bookreport.php');</script>";
}
else
{
	echo "<script>alert('Record is not deleted');location.replace('bookreport.php');</script>";
}
}

?>
