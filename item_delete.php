<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"food");
	$iid=$_GET['iid'];
	$query="delete from item where iid='$iid'";
	$cmd=mysqli_query($con,$query);
	if($cmd)
	{
		echo "<script>alert('Data  deleted');
		window.location.href='manage_item.php';</script>";
				?>
				<meta http-equiv ="refresh" content="5; url="http:/http://localhost/admin/manage_item.php"/>
				<?php
	}
	else
	{
		echo "<script>alert('Failed to delete')</script>";
	}
?>