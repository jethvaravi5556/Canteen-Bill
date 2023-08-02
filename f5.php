<?php
$password=$_POST['password'];
$c_password=$_POST['c_password'];
session_start();
session_regenerate_id();
$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,"food");
$query="UPDATE customer set password='$password',c_password='$c_password' WHERE email='$_SESSION[email]'";
$result=mysqli_query($con,$query);
// $num=mysqli_num_rows($result);
if($result === TRUE)
{
    echo "<script>alert('Record Updated successfully:');window.location.href='forget_pass.php';</script>";
}
else
{
    echo "<script>alert('Error Updating recording:');window.location.href='forget_pass.php';</script>";
}
?>
