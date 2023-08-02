<?php

session_start();
if(isset($_SESSION["cname"])){
session_destroy();   
unset($_SESSION['cname']);
        echo "<script>alert('Logged out successfully.'); window.location = './index.php';</script>";
}
else
{
        echo "<script>alert('please login first'); window.location = './index.php';</script>";
}   
    

?>