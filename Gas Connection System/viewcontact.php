<?php
include("nav.php");
?>
<body>
<div class="container-fluid mt-5 pt-5">
<div class="row mt-5">
	<div class="col-sm-9">
		<h3 class="w3-text-red">View And Delete Contact</h3>
				<hr>
		<table class="table table-bordered table-hover">
		<tr><th>Sr.No.</th><th>Name</th><th>Phone</th><th>Email</th>
			<th>Message</th><th>Delete</th></tr>
			<?php
		include("db.php");
		$query = "select * from contact";
		$result = $con->query($query);
		
		while(list($a,$b,$c,$d,$e) = $result->fetch_array())
		{
			echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td><a href='viewcontact.php?id=$a'>Delete</td></tr>";
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
$query = "delete from contact where id = '$id'";
if($con->query($query))
{
	echo "<script>alert('Record is deleted');location.replace('viewcontact.php');</script>";
}
else
{
	echo "<script>alert('Record is not deleted');location.replace('viewcontact.php');</script>";
}
}

?>
