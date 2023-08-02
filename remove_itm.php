<?php
    session_start();
    $cid=$_SESSION['cid'];
    $item_id = $_SESSION['item_id'];
    

    //print_r($_POST);

    $con = mysqli_connect("localhost", "root");
    $db = mysqli_select_db($con, "food");

    $query="DELETE FROM cart WHERE iid='$item_id' and cid='$cid' ";
    $cmd=mysqli_query($con,$query) or die (mysqli_error($con));
    
    //$total=mysqli_num_rows($cmd);
    echo $qurey;
    echo "<script>window.location.href='cart.php';</script>";
?>