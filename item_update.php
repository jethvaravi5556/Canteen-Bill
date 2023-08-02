<?php 
	$con=mysqli_connect("localhost","root");
	$db=mysqli_select_db($con,"food");
	$iid=$_GET['iid'];
	$query="select*from item where iid='$iid'";
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
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/c1.jpg');
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
                    <img src="images/logo1.png">	
                </div> 
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="item.php">items</a></li>
                    <li><a href="order.php">Orders</a></li>
                    <li><a href="about.php">admin</a></li>
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
                    <lable>item Name</lable>
                    <input class="input" value="<?php echo $row['item_name']; ?>"type="text" name="item_name">
                </div>
                <div class="input_field">
                    <lable>description</lable>
                    <input class="input" value="<?php echo $row['description']; ?>"type="text" name="description">
                </div>
                <div class="input_field">
                        <lable>Item prise</lable>
                        <input class="input" value="<?php echo $row['item_mrp']; ?>"type="text" name="item_mrp">
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
		$item_name=$_POST['item_name'];
		$description=$_POST['description'];
		$item_mrp=$_POST['item_mrp'];

			$con=mysqli_connect("localhost","root");
			$db=mysqli_select_db($con,"food");
			$query="UPDATE item set item_name='$item_name',description='$description',item_mrp='$item_mrp' WHERE iid='$iid'";
			$cmd=mysqli_query($con,$query);
			if($cmd)
			{
				echo "<script>alert('Data  updated')
				window.location.href='manage_item.php';</script>";
				?>
				<meta http-equiv ="refresh" content="0; url="http://localhost/food/manage_item.php"/>
				<?php
			}
			else
			{
				echo "Failed to update";
			}
	}
?>