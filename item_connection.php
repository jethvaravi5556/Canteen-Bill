
<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"food");
	if($_POST['submit'])
	{
		$item_name=$_POST['item_name'];
		$description=$_POST['description'];
		$item_mrp=$_POST['item_mrp'];
				
		$query="insert into item VALUES(NULL,'$item_name','$description','$item_mrp')";
	
			$cmd=mysqli_query($con,$query);
			if($cmd)
			{
				echo "<script>alert('data insert into db');
				window.location.href='manage_item.php';</script>";
			}
			else
			{
				echo "<script>alert('data not insert into db');</script>";
			}	
	}
?>
