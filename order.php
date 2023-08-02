<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Century Gothic;




        }

        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('images/c1.jpg');
            height: 100vh;
            background-size: cover;
            padding: 0px 10px;
            background-size: cover;
            background-position: center;


        }
        .head{
            color: white;
            font-size: 20px;
            margin: 0% 10% 0%;
        }

        .wrapper {
            padding: 1%;
            margin: 0 auto;
            width: 80%;
        }

        .text-center {
            text-align: center;
        }

        ul {
            float: right;
            list-style-type: none;
            margin-top: 25px;

        }

        ul li {
            display: inline-block;
        }

        ul li a {
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease;
        }

        ul li a:hover {
            background-color: #fff;
            color: #000;
        }

        ul li.active a {
            background-color: #fff;
            color: #000;
        }

        .logo img {
            float: left;
            width: 200px;
            height: auto;
        }

        .main {
            max-width: 1200px;
            margin: auto;
        }

        h3 {
            color: #fff;
            font-weight: bold;
            font-size: 35px;
            margin: 1% 40% 1%;
        }

        h2 {
            color: #fff;
            font-size: 30px;
            margin: 13% 40% 1%;
        }


        table {
            color: white;
            text-align: center;
            border: 2px solid black;
            margin: 30px auto;
            padding: 20px;
            font-size: 20px;
            box-shadow: 0px 50px 50px 5px rgba(0, 0, 0, 0.7);
            width: 70%;
        }

        th {
            color: #f7ff00;
        }

        .total {
            color: white;
            font-size: 20px;
            margin-left: 65%;
            padding-top: 0px;
            /* height: 30px;
            width: 15%; */
        }

        .button {
            position: absolute;
            left: 69%;
            background-color: green;
            color: white;
            outline: none;
            border: 0;
            border-radius: 3px;
            height: 30px;
            width: 15%;
            font-weight: bold;
            cursor: pointer;

        }

        .order {
            background-color: green;
            color: white;
            outline: none;
            border: 0;
            border-radius: 3px;
            height: 25px;
            width: 10%;
            font-weight;
            bold;
            cursor: pointer;
            background-color: green;
        }

        .container {
            border: 2px solid black;
            /* background-color: green; */
            border-radius: 5px;
            width: 100%;
            max-width: 700px;
            margin: 80px auto;
            padding: 5px;
            color: white;
            box-shadow: 0px 50px 50px 5px rgba(0, 0, 0, 0.7);
        }

        .container .btn {
            width: 20%;
            height: 30px;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 15px;
            font-weight: bold;
            background: #000;
            border: 1px solid white;
            color: #fff;
            text-decoration: none;
            transition: 0.6s ease;
        }

        .to {
            font-weight: bold;
        }

        .dropbtn {
            text-decoration: none;
            /* color: #fff; */
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #fff;
            color: #000;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #fff;
            color: #000;
        }

        #myUL {
            list-style-type: none;
            padding: 2%;
            margin: 1%;
            width: 35%;
            height: 25px;
            border-radius: 5px;
            border: 0px;
        }

        #myUL li a {
            border: 1px solid #ddd;
            margin-top: -1px;
            /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
        }

        #myUL li a:hover:not(.header) {
            background-color: #eee;
        }


        .container .btn:hover {
            background-color: #fff;
            color: #000;
        }

        .new {
            color: white;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="wrapper">
            <div class="logo">
                <img src="images/logo1.png">
            </div>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="item.php">items</a></li>
                <li class="active"><a href="order.php">Orders</a></li>
                <!-- <li><a href="insertcart.php">cart</a></li> -->
                <li><a href="about.php">About</a></li>

                <div class="dropdown">
                    <button class="dropbtn">LOGIN</button>
                    <div class="dropdown-content">
                        <a href="alogin.php">As admin</a>
                        <a href="login.php">As customer</a>
                    </div>
                </div>
                <li> <a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-cart" viewBox="0 0 18 18">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg></a></li>
            </ul>
        </div>
    </div>

    <?php




    if (isset($_SESSION["cid"])) {
        @header('location:order.php');
    } else {
        echo "<script>alert('plz login first...');
                    window.location.href='login.php';</script>";

    }
    ?>
    <br><br><br>

    <?php

    if (isset($_POST['remove'])) {
        $item_id = $_POST['item_id'];
        $_SESSION['item_id'] = $item_id;

        ?>

        <!-- <form method="POST" action="remove_itm">
                <input type='hidden' name='item_name[]' value=" . $iname . ">
                </form> -->
        <?php
        // echo "<input type='hidden' name='item_name' value=" . $iname . ">";
    

        echo "<script>window.location.href='remove_itm.php';</script>";
    }


    if (isset($_POST['order'])) {


        $con = mysqli_connect("localhost", "root");
        $db = mysqli_select_db($con, "food");

        $cid = $_SESSION['cid'];
        $item_name = $_POST['item_name'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];



        $con = mysqli_connect("localhost", "root");
        $db = mysqli_select_db($con, "food");

        $query = " select * from customer where cid='$cid' ";
        $cmd = mysqli_query($con, $query);
        $row = mysqli_fetch_array($cmd);
        $table_no = $row['table_no'];
        echo
            $i = 0;
        foreach ($item_name as $key => $value) {
            $query = "insert into item_order VALUES(NULL,'$cid','$table_no',NULL,'$value','$qty[$i]','$price[$i]')";
            $cmd = mysqli_query($con, $query);
            $i++;

            //echo $query;
        }



        $query = "DELETE FROM cart WHERE cid='$cid' ";
        $cmd = mysqli_query($con, $query) or die(mysqli_error($con));



        if ($cmd) {
            echo "<script>alert('order successfull'); 
                        window.location.href='order.php';</script>";
            ?>
            <meta http-equiv="refresh" content="0; url=" http://localhost/food/order.php" />
            <?php
        } else {
            echo "<script>alert('opps something went wrong'); 
                        window.location.href='order.php';</script>";

        }

    }




    ?>

    <div class="container">
        <h5 style="font-size:20px;color:white;margin-left:30%">select date:</h6>
            <form action="" method="post">

                <input type="date" id="myUL" name="search1" placeholder="from order date.." title="Type in a date">
                TO
                <input type="date" id="myUL" name="search2" placeholder="to order date.." title="Type in a date">
                <button class="btn" name="search">search</button>

            </form>
    </div>
    <?php
    // $search = '';
    if (isset($_POST['search1'])) {
        $search1 = $_POST['search1'];
        $search2 = $_POST['search2'];
        //echo $search1;
    }
    $con = mysqli_connect("localhost", "root");
    $db = mysqli_select_db($con, "food");
    $cid = $_SESSION['cid'];
    $cname= $_SESSION['cname'];
    //echo $cid;
    $query = "select*from ord where date between '$search1' and '$search2' and cid='$cid'";
    // $query = "select*from ord";
    $cmd = mysqli_query($con, $query) or die(mysqli_error($con));
    $total = mysqli_num_rows($cmd);
    //if($total){echo "10";}
    $query2 = "select*from ord where cid='$cid'";
    $cmd2 = mysqli_query($con, $query2) or die(mysqli_error($con));

    if ($total != 0) {
        ?>
        <center>
            <div id='print'>
                <h3 align="center">Bill</h3>
                <div class="head"><?php echo nl2br("customer id: $cid &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; customer Name: $cname"); ?></div><br>
                <table border="1" cellspacing="7" width="100%">
                    <tr>
                        <th>order id</th>
                        <!-- <th>customer id</th> -->
                        <th>order date</th>
                        <th>item name</th>
                        <th>quntity</th>
                        <th>price</th>
                    </tr>
                    <form method='post' action="bill.php">

                        <?php
                        // $c = 1;
                        // while ($row = mysqli_fetch_array($cmd))
                        while ($row = mysqli_fetch_array($cmd)) {
                            echo "<tr>
                            <td>" . $row['oid'] . "</td>                            
                            <td>" . $row['date'] . "</td>
                            <td>" . $row['order_name'] . "</td>
                            <td>" . $row['qty'] . "</td>
                            <td>" . $row['total_amt'] . "</td>		
                            
                                <input type='hidden' name='customer_id' value=" . $row['cid'] . ">
                                <input type='hidden' name='order_name' value=" . $row['order_name'] . ">
                                <input type='hidden' name='total_amt' value=" . $row['total_amt'] . ">
                            
                            </tr>";
                            $totalprice += $row['total_amt'];

                        }
                        // <td>" . $row['cid'] . "</td>
                        ?>

                </table><br>
                <div class="total"> total :
                    <?php echo $totalprice; ?>
                </div>
            </div>
            <input type='button' value='print bill' onclick="printDiv()" class='order'>
            <!-- <input type="button" value="print" onclick="printDiv()"> -->
            </form>
            <?php
            echo "<script>
                function printDiv() {
                    var divContents = document.getElementById('print').innerHTML;
                    
                    var a = window.open('', '');
                    a.document.write(divContents);
                    a.document.close();
                    a.print();
                }
            </script>";
            // window.alert(divContents); ?>
            <?php
    }

    // else { 
    
    //         echo '<h2 class="text-danger">data not found</h2>';
    
    //     }
    ?>






    </center>
</body>

</html>