
<?php
session_start();
if(isset($_POST['login']))
$uname=$_POST['cname'];
$cid=$_POST['cid'];
$pwd=$_POST['password'];
// $table_no= $row['table_no'];
//$table_no= 5;

$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,"food");
$query="select*from customer where cid='$cid' and cname='$uname' and password='$pwd'";

//$table_no= $row['table_no'];
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num>0)
{
    $_SESSION['cname']=$uname;
    $_SESSION['cid']=$cid;
   // $_SESSION['table_no']=$table_no;
    ///echo $_SESSION['table_no'];
    // // header('location:index.php');
    echo "<script>alert('Login Succsesfully');
	window.location.href='index.php';</script>";
}
else
{
    //header('location:login.php');
    //echo "enter valid password";
    echo "<script>alert('enter valid data');
	window.location.href='login.php';</script>";
}
?>