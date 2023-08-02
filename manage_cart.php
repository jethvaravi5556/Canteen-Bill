<html>
    <body>
        <form method="post" action="cart.php">
            <?php
                session_start();  
                if (isset($_POST['addcart'])) 
                {

                    $con = mysqli_connect("localhost", "root");
                    $db = mysqli_select_db($con, "food");

                    $item_id = $_POST['item_id'];
                    $item_name = $_POST['item_name'];       
                    $qty = $_POST['qty']; 
                    $item_mrp = $_POST['item_mrp'];
                    $cid = $_SESSION['cid'];
                    $mrp = $_POST['mrp'];


                    foreach ($item_id as $k => $v) 
                    {
                        
                        if (!empty($qty[$k])) 
                        {
                            $price=$item_mrp[$k] * $qty[$k] ;
                            $totalprice += $price ;
                                            
                            $query="insert into cart VALUES('$item_id[$k]','$cid','$item_name[$k]','$item_mrp[$k]','$qty[$k]','$price')";
                            $cmd=mysqli_query($con,$query);
                                            
                                 //echo $query;
                        }
                                        
                    }
                    //echo "Total =".$totalprice;
                   

                   header('location:cart.php');
                    
                }                               
            ?>
        </form>
    </body>
</html>
