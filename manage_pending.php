<?php
    session_start();
    $cid=$_SESSION['cid'];
    $oid = $_POST['oid'];
    $cid = $_POST['cid'];
    $qty = $_POST['qty'];
    $item_name = $_POST['item_name'];
    $totalprice = $_POST['totalprice'];
    

    print_r($_POST);

    $con = mysqli_connect("localhost", "root");
    $db = mysqli_select_db($con, "food");

    $query="insert into ord VALUES('$oid','$cid',NULL,'$item_name','$qty','$totalprice')";
    $cmd=mysqli_query($con,$query);
    //echo $qurey;
    
    $query="DELETE FROM item_order WHERE oid='$oid' ";
    $cmd=mysqli_query($con,$query) or die (mysqli_error($con));
    
    //$total=mysqli_num_rows($cmd);

    
    
   echo "<script>window.location.href='pending.php';</script>";
?>