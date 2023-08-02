<?php 
{
    session_start();
    session_regenerate_id();
    if($_SESSION['otp']==$_POST['otp'])
    {
        header('location:f4.php');
    }
    else
    {
        echo "<script>alert('wrong otp,please enter right otp');window.location.href='f2.php';</script>";
    }
}