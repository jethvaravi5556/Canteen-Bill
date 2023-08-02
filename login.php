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
  /* font-family: sans-serif; */
  font-family: Century Gothic;
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
  width: 100%; 
  margin: 20px 0;
  border-radius: 5px;
  font-weight: bold;
  background:#000;
  border: 1px solid white;
	padding: 10px 15px;
	color: #fff;
	text-decoration: none;
	transition: 0.6s ease;
}

.login-form a{
  color: greenyellow;
}

.login-form button:hover{
  
  background-color: #fff;
  color: #000;
}

@media(max-width:42px)
		{
			.container .form .input_field{
				flex-direction:column;
				align-items:flex-start;
			}
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
    <div class="login-form">
      <form method="POST" action="login_con.php">
        <div class="container">
          <h1>Login</h1>
          <p>User Id</p>
          <input type="text" name="cid"><br>
          <p>UserName</p>
          <input type="text" name="cname"><br>
            <p>Password</p> 
          <input type="password" name="password" minlength="8" maxlength="8"><br>
          
          <button type="submit" name="login">login</button><br>
          
          Forget Password ?<a href="forget_pass.php">click here</a><br>
          Not create account then<a href="signup.php">Signup</a><br>
          <!-- If you are admin then<a href="alogin.php"> login</a><br> -->
        </div>
      </form>
    </div>
</body>
</html>
