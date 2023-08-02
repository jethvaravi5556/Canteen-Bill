<?php
session_start();
// if(!empty($_POST['login']))
// if($_SERVER["REQUEST_METHOD"]=="POST")
if(isset($_POST['login']))
$uname=$_POST['fname'];
$pwd=$_POST['password'];
$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,"food");
$query="select*from admin where fname='$uname' and password='$pwd'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num>0)
{
    $_SESSION['aname']=$uname;
    // header('location:aindex.php');
    echo "<script>alert('Login Succsesfully');
		window.location.href='aindex.php';</script>";
}
else
{
    header('location:alogin.php');
    echo "enter valid password";
}
?>
