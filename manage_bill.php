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
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/c1.jpg');
            height: 100vh;
            background-size: cover;
            padding: 0px 10px;
            background-size: cover;
            background-position: center;

        }
        .head{
            font-size: 20px;
            margin: 0% 25% 0%;
        }

        .wrapper {
            padding: 1%;
            width: 80%;
        }
        .menu{
            font-size: 15px;
        }

        .total {
            margin-left: 75%;
            padding-top: 0px;
            /* height: 30px;
            width: 15%; */
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

        h2 {
            color: #fff;
            /* margin-top: 2%; */
            margin: 0% 0% 0%;
        }

        .danger {
            color: white;
            font-size: 30px;
            /* background-color: white; */
            width: 30%;
            /* padding: 5px; */
            margin: 10% 35% 10%;
            /* border-radius: 25px;
            border-color: red; */

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
            font-size: 17px;
            color: white;
            outline: none;
            border: 1px;
            border-radius: 3px;
            height: 30px;
            width: 10%;
            /* font-weight:bold; */
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
                <li><a href="aindex.php">Home</a></li>
                <li><a href="manage_item.php">items</a></li>
                <li><a href="manage_order.php">Orders</a></li>
                <li><a href="manage_admin.php">Admin</a></li>
                <li><a href="manage_customer.php">Customer</a></li>
                <li class="active"><a href="manage_bill.php">Bill</a></li>
                <div class="dropdown">
                    <button class="dropbtn">LOGIN</button>
                    <div class="dropdown-content">
                        <a href="alogin.php">As admin</a>
                        <a href="login.php">As customer</a>
                    </div>
                </div>
            </ul>
        </div>
    </div>




    <div class="container">
        <h5 style="font-size:20px;color:white;margin-left:30%">select date:</h6>
            <form action="" method="post">

                <input type="date" id="myUL" name="search1" placeholder="from order date.." title="Type in a date">
                TO
                <input type="date" id="myUL" name="search2" placeholder="to order date.." title="Type in a date">
                <input type="text" id="myUL" name="search" placeholder="Enter customer id.." title="Type in a name">
                <button class="btn" name="submit">search</button>

            </form>
    </div>
    <?php
    //$search = '';
    if (isset($_POST['search'])) {
        $search1 = $_POST['search1'];
        $search2 = $_POST['search2'];
    }

    $cid = $_POST['search'];


    $con = mysqli_connect("localhost", "root");
    $db = mysqli_select_db($con, "food");
    $query = "select * from ord where date between '$search1' and '$search2' and cid='$cid' ";
    $cmd = mysqli_query($con, $query) or die(mysqli_error($con));
    $total = mysqli_num_rows($cmd);
    //echo $query;
    $query2 = " select * from customer where cid='$cid' ";
    $cmd2 = mysqli_query($con, $query2);
    $row = mysqli_fetch_array($cmd2);
    $cname = $row['cname'];
    
    if ($total != 0) {
        ?>
        <div id='print2'>
            <h2 align="center">Bill<h2> 
            <div class="head"><?php echo nl2br("customer id: $cid &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; customer Name: $cname"); ?></div><br>
                    <center>
                        <table border="1" cellspacing="7" width="100%">
                            <tr>
                                <th>order id</th>
                                <th>order date</th>
                                <th>item name</th>
                                <th>qty</th>
                                <th>total amount</th>


                            </tr>
                            <!-- <form method='post' action="abill.php"> -->

                                <?php
                                //$c = 1;
                                while ($row = mysqli_fetch_array($cmd)) {
                                    echo "<tr>
                            <td>" . $row['oid'] . "</td>
                            <td>" . $row['date'] . "</td>
                            <td>" . $row['order_name'] . "</td>
                            <td>" . $row['qty'] . "</td>
                            <td>" . $row['total_amt'] . "</td>		
                            
                            <input type='hidden' name='customer_name[]' value=" . $row['customer_name'] . ">
                            <input type='hidden' name='order_name[]' value=" . $row['order_name'] . ">
                            <input type='hidden' name='total_amt[]' value=" . $row['total_amt'] . ">
                    
                            
                            </tr>";
                                    $totalprice += $row['total_amt'];

                                } ?>
                        </table>
                        </center><br>
                        <div class="total"> total :
                            <?php echo $totalprice; ?>
                        </div> <center>
        </div> <div align="center">
        <input type='submit' name='print bill' value='print bill' onclick="printDiv()" class='order'> </div>
        <?php
        echo "<script>
                        function printDiv() 
                        {
                            var divContents = document.getElementById('print2').innerHTML;
                            
                            var a = window.open('', '');
                            a.document.write(divContents);
                            a.document.close();
                            a.print();
                        }
                    </script>";
    } else {

        echo '<h2 class="danger">Please enter the data first</h2>';
    }
    ?>





    <!-- </form> -->
    </center>

</body>

</html>