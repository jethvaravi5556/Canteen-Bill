
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
	background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)), url('images/c1.jpg');
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
	margin-top: 20px;
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
.title h2{
	color: #fff;
	font-size: 40px;
	margin: 0% 20% 0%;
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
	border: 1px solid #fff;
	padding: 10px 30px;
	/* color: #fff; */
	text-decoration: none;
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
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  /* z-index: 1; */
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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="item.php">items</a></li>
                    <li><a href="order.php">Orders</a></li>
					
                    <li><a href="about.php">About</a></li>
                    
					<?php
         session_start();

          if(isset($_SESSION["cname"])){
            ?><li><a href='logout.php'>Log out</a></li><?php
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
		<li> <a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="50%" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 15 16">
 		 <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		</svg></a></li>
                </ul>   
            </div>
		</div>
		<div class="title">
        <?php
          

         if(isset($_SESSION["cname"])){
           
            echo  "<h1>Welcome $_SESSION[cname]</h1>";
			echo  "<h2>Your id no. is $_SESSION[cid]</h2>";
			// echo "<h2>table no ".$_SESSION['table_no']."</h2>";
			// echo $_SESSION['table_no'];
         }
         else{
            echo "<h1>welcome</h2>";
         }
         ?>
			
                
            </div>
		</div>
		<?php
			// include 'slidebar.php';
		?>

        <div class="footer">
            <div class="container text-center"> 
            <p>All rights reserved. Designed and developed By, <a href="about.php">Deep patel</a></p>
        </div>
    </div>
	</header>
</body>
</html>
 
 

