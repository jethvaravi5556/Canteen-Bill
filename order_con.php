<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
		*{
			margin:0;
			padding0;
			box-sizing:border-box;
            font-family: Century Gothic;
		}
		body{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/pizza.jpg');
			height:100px;
            background-size:cover;
			padding:0px 10px;
            background-size: cover;
            background-position: center;
		}
        .main{
            max-width: 1200px;
            margin: auto;
        }
        .wrapper{
            padding:1%;
            margin:0 auto;
            width:80%;
        }
        .logo img{
            float: left;
            width: 200px;
            height: auto;
        }
        ul{
            float: right;
            list-style-type: none;
            margin-top: 25px;

        }
        ul li{
            display: inline-block;
        }
        ul li a{
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease;
        }
        ul li a:hover{
            background-color: #fff;
            color: #000;
        }
        ul li.active a{
            background-color: #fff;
            color: #000;
        }
        /* h2{ 
			color:#fff;
			margin-top:70px;
		}*/
        th{
			color:#f7ff00;
		}
        /* .admin{ 
            background-color:green;
			color:white;
			outline:none;
			border:0;
			border-radius:3px;
			height:25px;
			width:15%;
			font-weight;bold;
			cursor:pointer;
            
		}*/
        table{
			color:white;
			text-align:center;
			border:2px solid black;
			margin:30px auto;
			padding:40px;
			box-shadow:0px 50px 50px 5px rgba(0,0,0,0.7);
		}
        .delete{
			background-color:red;
			color:white;
			outline:none;
			border:0;
			border-radius:3px;
			height:22px;
			width:90px;
			font-weight;bold;
			cursor:pointer;
		}
        .footer{ 
            background-color:rgba(32, 0, 0, 0.2); 
            color:rgb(253, 253, 253);
            position: fixed;
            text-align: center;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 4%;
        } 

</style>
</head>
<body>
    
    <div class="main">
        <div class="wrapper">
            <div class="logo">
                <img src="../images/logo.png">	
            </div> 
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="item.php">items</a></li>
                <li class="active"><a href="order.php">Orders</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="login.php">login</a></li>
            </ul>   
        </div>
    </div>
    <center><table border="1" cellspacing="7" width="100%">
		<tr>
			<th>OID</th>
			<th>CID</th>
			<th>Order Name</th>
			<th>Total amount</th>
			
			<th width="10%">Operation</th>
			
		</tr>
        
</body>

<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"food");
	$query="select*from order";
	$cmd=mysqli_query($con,$query);
	$total=mysqli_num_rows($cmd);
        if($total!=0)
	{
		?>
		<h2 align="center" >Orders<h2>
        
		<center><table border="1" cellspacing="7" width="100%">
		<tr>
			<th>OID</th>
			<th>CID</th>
			<th>Order Name</th>
			<th>Total amount</th>
			
			<th width="10%">Operation</th>
			
		</tr>
		
		<?php
		while($row=mysqli_fetch_array($cmd))
		{
			echo "<tr>
					<td>".$row[oid]."</td>
					<td>".$row[cid]."</td>
					<td>".$row[order_name]."</td>
					<td>".$row[total_amt]."</td>			
					
			<td>
	            <a href='customer_delete.php?oid=$row[oid]'><input type='submit' value='Delete' class='delete'></a>
            </td>
			</tr>";
		}
    }
	else
	{
		echo "not found any record";
	}
?>
        </table>
		</center>
        <div class="footer">
            <!-- <div class="container text-center">  -->
            <p>All rights reserved. Designed and developed By, <a href="#">Deep Patel & ravi jethva</a></p>
        </div>

</html>