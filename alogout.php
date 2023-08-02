<?php

session_start();
if(isset($_SESSION["aname"])){
session_destroy();   
unset($_SESSION['aname']);
        echo "<script>alert('Logged out successfully.'); window.location = './aindex.php';</script>";
}
else
{
        echo "<script>alert('please login first'); window.location = './aindex.php';</script>";
}   
    

?>