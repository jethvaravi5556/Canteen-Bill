<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"food");
	$cid=$_GET['cid'];
	$query="delete from customer where cid='$cid'";
	$cmd=mysqli_query($con,$query);
	if($cmd)
	{
		echo "<script>alert('customer account deleted');
		window.location.href='manage_customer.php';</script>"
		?>
				<meta http-equiv ="refresh" content="5; url="http://localhost/food/admin/manage_customer.php"/>
				 <?php 
	}
	else
	{
		echo "<script>alert('Failed to delete')</script>";
	}
?>