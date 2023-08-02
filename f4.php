<?php
session_start();
?>
<html>
<head>
</head>
<style>
*{
  padding: 0;
  margin: 0;
  font-family:  Century Gothic;
}

body{
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/c1.jpg');
  background-size: cover;
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

.container{
		border:2px solid black;
		width:300px;
		max-width:500px; 
		margin: 45px auto;
		padding:10px;
		box-shadow:0px 50px 50px 5px rgba(0,0,0,0.7);	
}

.login-form{
  width: 350px;
  top:50%;
  left: 50%;
  transform: translate(-50%,-50%);
  position: absolute;
  color: #fff;
}

.login-form h1{
  font-size:40px;
	font-weight:700;
	margin-bottom:25px;
	color:#fff;
	text-align:center;
}
.login-form p{
  font-size: 20px;
  margin: 15px 0; 
}

.login-form input{
  font-size: 16px;
  width: 100%;
  padding: 15px 10px;
  border:1px solid black;
  outline: none;
  border-radius: 5px;
}

.login-form button{
  width: 50%; 
  margin: 20px 0;
  font-weight: bold;
  background:#000;
  border: 1px solid white;
	padding: 10px 15px;
	color: #fff;
	text-decoration: none;
	transition: 0.6s ease;
}

.login-form button:hover{
  background-color: #fff;
  color: #000;
}

.login-form a{
  
  color:yellow;
}
.login-form a:hover{
  color:red;
}
@media(max-width:42px)
		{
			.container .form .input_field{
				flex-direction:column;
				align-items:flex-start;
			}
		}
</style>
<body>
		<div class="main">
            <div class="wrapper">
                <div class="logo">
                    <img src="images/logo1.png">	
                </div> 
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="item.php">items</a></li>
                    <li><a href="order.php">Orders</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="active"><a href="login.php">login</a></li>
                </ul>   
            </div>
		</div>
    <div class="login-form">
    <form method="POST" action="f5.php">
    <div class="container">
    <h4>Enter new password.</h4>
    <p>New password</p>
    <input type="text" name="password" ><br>
    <p>confirm password</p>
    <input type="text" name="c_password" ><br>
    <button type="submit" name="e">Update</button><br>
    
  </div>
</form>
</div>
</body>
</html>
