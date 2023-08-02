
<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"food");
	if($_POST['submit'])
	{
		$cid=$_POST['cid'];
		$cname=$_POST['cname'];
		$lname=$_POST['lname'];
		$pwd=$_POST['password'];
		$cpwd=$_POST['c_password'];
		$gen=$_POST['gender'];
		$table_no=$_POST['table_no'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$cadd=$_POST['cadd'];

		
		
$query="insert into customer VALUES(NULL,'$cname','$lname','$pwd','$cpwd','$gen','$table_no','$email','$phone','$cadd')";
	
			$cmd=mysqli_query($con,$query);
			if($cmd)
			{
				$_SESSION['cname']=$uname;
				$_SESSION['cid']=$cid;
				
				$_SESSION['table_no']=$table_no;

				// echo "table session =".$table_no;
				// echo "table =".$table_no;
				//echo $_SESSION['table_no'] ;
				
				echo "<script>alert('sign Up Succsesfully');
				window.location.href='index.php';</script>";
				
			}
			else
			{
				echo "<script>alert('data not insert into db');</script>";
			}	
	}
?>
