<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"food");
	$aid=$_GET['aid'];
	$query="delete from admin where aid='$aid'";
	$cmd=mysqli_query($con,$query);
	if($cmd)
	{
		echo "<script>alert('Data  deleted');
		window.location.href='manage_admin.php';</script>";
				?>
				<meta http-equiv ="refresh" content="5; url="http://localhost/food/admin/manage_admin.php"/>
				<?php
	}
	else
	{
		echo "<script>alert('Failed to delete')</script>";
	}
?>