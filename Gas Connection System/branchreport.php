<?php
include("nav.php");
?>
<body>
<div class="container-fluid mt-5 pt-5">
<div class="row mt-5">
	<div class="col-sm-9">
		<h3 class="w3-text-red">View And Edit Branch Report</h3>
				<hr>
		<table class="table table-bordered table-hover">
			<tr><th>Sr.No.</th><th>Branch Name</th><th>Branch Email</th>
			<th>Branch Phone</th><th>Branch City</th><th>Branch State</th><th>Action</th><th>Delete</th></tr>
			<?php
		include("db.php");
		$query = "select * from branch";
		$result = $con->query($query);
		
		while(list($a,$b,$c,$d,$e,$f) = $result->fetch_array())
		{
			echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td>$f</td><td><a href='editbranch.php?id=$a'>Edit</a></td><td><a href='branchreport.php?id=$a'>Delete</td></tr>";
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
$query = "delete from branch where id = '$id'";
if($con->query($query))
{
	echo "<script>alert('Record is deleted');location.replace('branchreport.php');</script>";
}
else
{
	echo "<script>alert('Record is not deleted');location.replace('branchreport.php');</script>";
}
}

?>
