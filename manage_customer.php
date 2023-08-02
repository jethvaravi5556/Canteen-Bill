<html>
<head>
	<title>
	Displaying All Records
	</title>
	<style>
		*{
			margin:0;
			padding:0;
			box-sizing:border-box;
			font-family: Century Gothic;
		}
		body{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/c5.jpg');
			height:100px;
            background-size:cover;
			padding:0px 10px;
            background-size: cover;
            background-position: center;
		}

        .wrapper{
            padding:1%;
            margin:0 auto;
            width:80%;
        }

        .text-center{
            text-align: center;
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
        .logo img{
            float: left;
            width: 200px;
            height: auto;
        }
        .main{
            max-width: 1200px;
            margin: auto;
        }
		h2{
			color:#fff;
			margin-top:70px;
		}
		
		table{
			color:white;
			text-align:center;
			border:2px solid black;
			margin:30px auto;
			padding:40px;
			box-shadow:0px 50px 50px 5px rgba(0,0,0,0.7);
		}
		th{
			color:#f7ff00;
		}
        .admin{
            background-color:green;
			color:white;
			outline:none;
			border:0;
			border-radius:3px;
			height:25px;
			width:15%;
			font-weight;bold;
			cursor:pointer;
            
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
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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
.dropdown-content a:hover {background-color: #fff;
	color: #000;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #fff;
	color: #000;}
				
    </style>
</head>
<body>
<div class="main">
            <div class="wrapper">
                <div class="logo">
                    <img src="images/logo1.png">	
                </div> 
                <ul>
                    <li><a href="aindex.php">Home</a></li>
                    <li><a href="manage_item.php">items</a></li>
                    <li><a href="manage_order.php">Orders</a></li>
                    <li><a href="manage_admin.php">Admin</a></li>
					<li  class="active"><a href="manage_customer.php">Customer</a></li>
					<li><a href="manage_bill.php">Bill</a></li>
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
</body>

<?php
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"food");
	$query="select*from customer";
	$cmd=mysqli_query($con,$query);
				
	$total=mysqli_num_rows($cmd);
	
	if($total!=0)
	{
		?>
		<h2 align="center" >Customer Table<h2>
        
		<center><table border="1" cellspacing="7" width="100%">
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>password</th>
			<th>Confirm Password</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th width="10%">Operation</th>
			
		</tr>
		
		<?php
		while($row=mysqli_fetch_array($cmd))
		{
			echo "<tr>
					<td>".$row[cid]."</td>
					<td>".$row[cname]."</td>
					<td>".$row[lname]."</td>
					<td>".$row[password]."</td>
					<td>".$row[c_password]."</td>
					<td>".$row[gender]."</td>
					<td>".$row[email]."</td>
					<td>".$row[phone]."</td>
					<td>".$row[cadd]."</td>
					
					
			<td>
            
            <a href='customer_delete.php?cid=$row[cid]'><input type='submit' value='Delete' class='delete'></a>
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