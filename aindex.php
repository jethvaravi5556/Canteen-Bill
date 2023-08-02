<!DOCTYPE html>
<html>
<head>
	<title>OFFICE-STAFF CANTEEN BILL WEBSITES</title>
	
<style>
    *{
	margin: 0;
	padding: 0;
	font-family:  Century Gothic;
}

header{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/c5.jpg');
	height: 100vh;
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
.title{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.title h1{
	color: #fff;
	font-size: 70px;
}
.button{
	position: absolute;
	top: 62%;
	left: 50%;
	transform: translate(-50%,-50%);
}

.btn{
	
	border: 1px solid #fff;
	padding: 10px 30px;
	color: #fff;
	text-decoration: none;
	transition: 0.6s ease;
}

.btn:hover{
	background-color: #fff;
	color: #000;
}


 .footer{ 
	background-color:rgba(32, 0, 0, 0.2); 
	color:rgb(253, 253, 253);
	position: fixed;
	text-align: center;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 5%;
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
	<header>
		<div class="main">
            <div class="wrapper">
                <div class="logo">
                    <img src="images/logo1.png">	
                </div> 
                <ul>
                    <li class="active"><a href="aindex.php">Home</a></li>
                    <li><a href="manage_item.php">items</a></li>
                    <li><a href="manage_order.php">Orders</a></li>
                    <li><a href="manage_admin.php">Admin</a></li>
                    <li><a href="manage_customer.php">Customer</a></li>
					<li><a href="manage_bill.php">Bill</a></li>
                    <?php
         session_start();

          if(isset($_SESSION["aname"])){
            ?><li><a href='alogout.php'>Log out</a></li><?php
          }
          else{
				?> <div class="dropdown">
					<button class="dropbtn">LOGIN</button>
					<div class="dropdown-content">
						<a href="alogin.php">As admin</a>
						<a href="login.php">As customer</a>
					</div>
				</div><?php
		 }
         ?>
                </ul>   
            </div>
		</div>
		<div class="title">   
            <?php
            
            echo  "<h1>Welcome $_SESSION[aname]</h1>";
            ?>
			   
            </div>
		</div>
      
        <div class="footer">
            <div class="container text-center"> 
            <p>All rights reserved. Designed and developed By, <a href="#">Deep Patel & ravi jethva</a></p>
        </div>
    </div>
	</header>
</body>
</html>
 
 

