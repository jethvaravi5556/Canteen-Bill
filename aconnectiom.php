
<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"food");
	if($_POST['submit'])
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$pwd=$_POST['password'];
		$cpwd=$_POST['cpassword'];
		$gen=$_POST['gender'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		
	$query="insert into admin VALUES(NULL,'$fname','$lname','$pwd','$cpwd','$gen','$email','$phone','$address')";
	
			$cmd=mysqli_query($con,$query);
			if($cmd)
			{
				echo "<script>alert('Account succesfully created');
				window.location.href='manage_admin.php';</script>";
			}
			else
			{
				echo "<script>alert('data not insert into db');</script>";
			}	
	}
?>
