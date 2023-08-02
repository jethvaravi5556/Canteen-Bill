<?php if($_POST['submit'])
{
    //header('location:item.php');
    echo "<script>alert('item added to cart.');
    window.location.href='item.php';</script>";
    
}
else
{
    //header('location:login.php');
    echo "<script>alert('Sorry item not inserted !');
    window.location.href='item.php';</script>";
}
?>