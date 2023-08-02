<?php

$email=$_POST['email'];
$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,"food");
$query="select email from customer where email='$email'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num>0)
{
    $otp=rand(100000,999999);
    session_start();
    session_regenerate_id();
    $_SESSION['otp']=$otp;
    $_SESSION['email']=$email;

    header('location:f2.php');
}
else
{
    echo "<script>alert('No email found.');window.location.href='forget_pass.php';</script>";
}
?>
