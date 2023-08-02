<?php 
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"food");
	$aid=$_GET['aid'];
	$query="select*from admin where aid='$aid'";
	$cmd=mysqli_query($con,$query);
		
		$row=mysqli_fetch_array($cmd);
		
?>

<html>
	<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>
		form_informations
	</title>
	<style>
		*{
			margin:0;
			padding0;
			box-sizing:border-box;
			font-family: Century Gothic;
		}
		body{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/pizza.jpg');
			background-size:cover;
			padding:0 10px;
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
			width:420px;
			max-width:500px; 
			margin: 60px auto;
			padding:5px;
			box-shadow:0px 50px 50px 5px rgba(0,0,0,0.7);
		}
		.container .title{
			
			font-size:24px;
			font-weight:700;
			margin-bottom:20px;
			color: #fff;;
			text-align:center;
		}
		.container .form{
			width:400px;	
		}
		.container .form .input_field{
			margin-bottom:15px;
			display:flex;
			align-items:center;	
		}
		.container .form .input_field lable{
			width:200px;
			color:white;
			
		}
		.container .form .input_field .input{
			width:100%;
			outline:none;
			border:1px solid black;
			padding:8px 10px;
			font-size:12px;
			font-size:13px;
			border-radius:5px;
			transition:all 0.5s ease;
			resize:none;
		}
		.container .form .input_field .input:focus{
			border:1px solid #8eff09;
		}	
		.container .form .input_field .check{
			width:15px;
			height:15px;
			background:#8eff09;
		}
		.container .form .input_field p{
			margin-left:10px;
		}
		.container .form .input_field .btn{
			width:100%;
			padding:6px 10px;
			font-size:15px;
            font-weight: bold;
            background:#000;
            border: 1px solid white;
            color: #fff;
            text-decoration: none;
            transition: 0.6s ease;
		}
		.container .form .input_field .btn:hover{
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
		</style>
	
	</head>
	
	<body>
	<div class="main">
            <div class="wrapper">
                <div class="logo">
                    <img src="../images/logo.png">	
                </div> 
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="item.php">items</a></li>
                    <li><a href="order.php">Orders</a></li>
                    <li class="active"><a href="about.php">admin</a></li>
                    <li><a href="login.php">login</a></li>
                </ul>   
            </div>
		</div>
		
		<form action="#" method="POST";>
		<div class="container" >
		<div class="title"> 
			UPDATE DETAILS
		</div>
		<div class="form">
			<div class="input_field">
				<lable>First Name</lable>
				<input class="input" value="<?php echo $row['fname']; ?>" type="text" name="fname">
		</div>
		<div class="input_field">
				<lable>Last Name</lable>
				<input class="input" value="<?php echo $row['lname']; ?>" type="text" name="lname">
		</div>
		<div class="input_field">
				<lable>Password</lable>
<input class="input" value="<?php echo $row['password']; ?>"type="password" name="password">
		</div>
		<div class="input_field">
				<lable>Confirm Password</lable>
<input class="input" value="<?php echo $row['c_password']; ?>"type="password" name="cpassword">
		</div>
		<div class="input_field">
				<lable>Gender</lable>
				<select class="input" name="gender">
				<option value="">select</option>
				<option value="Male"
					<?php
							if($row['gender'] == 'Male')
							{
								echo "selected";
							}
							?>>Male</option>
							
							<option value="Female"
							<?php
							if($row['gender'] == 'Female')
							{
								echo "selected";
							}
							?>>Female</option>
							
				</select>
			</div>
			<div class="input_field">
				<lable>Email Address</lable>
				<input class="input" value="<?php echo $row['email']; ?>" type="text"  name="email">
			</div>
			<div class="input_field">
				<lable>Phone number</lable>
				<input class="input" value="<?php echo $row['phone']; ?>"type="text" name="phone">
			</div>
			<div class="input_field">
				<lable >Address</lable>
				<textarea class="input" name="address"><?php echo $row['address']; ?>
			</textarea>
			</div>
					
			<div class="input_field">
				<lable class="check">
				<input class="input" type="checkbox">
				<span class="checkmarks"></span>
				</lable>
				<p>Agree to terms & conditions</p>
			</div>
					
			<div class="input_field">
			<input type="submit" name="update" value="Update Details" class="btn">
			</div>
		</div>
	</div>
</body>
</html>

<?php
if($_POST['update'])
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$pwd=$_POST['password'];
		$cpwd=$_POST['cpassword'];
		$gen=$_POST['gender'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
			$con=mysqli_connect("localhost","root");
			$db=mysqli_select_db($con,"food");
			//$cmd=mysqli_query($con,"insert into form values('$fn','$ln','$pwd','$cpwd','$gen','$email','$phone','$address')");
			$query="UPDATE admin set fname='$fname',lname='$lname',password='$pwd',c_password='$cpwd',gender='$gen',email='$email',phone='$phone',address='$address' WHERE aid='$aid'";
			$cmd=mysqli_query($con,$query);
			if($cmd)
			{
				echo "<script>alert('Data  updated');
				window.location.href='manage_admin.php';</script>";
				?>
				<meta http-equiv ="refresh" content="0; url="http://localhost/food/manage_admin.php"/>
				<?php
			}
			else
			{
				echo "Failed to update";
			}
	}
?>