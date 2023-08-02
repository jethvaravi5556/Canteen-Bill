<!DOCTYPE html>
<html>
<head>

  


  
  <!-- Vendor CSS Files -->
  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  

	<title>OFFICE-STAFF CANTEEN BILL WEBSITES</title>
  <!-- Template Main CSS File -->
  <!-- <link href="css/style1.css" rel="stylesheet"> -->
	<style>
        *{
	margin: 0;
	padding: 0;
	font-family:  Century Gothic;
}

header{
	 background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)), url('images/c1.jpg'); 
  /* background-color: wheat; */
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





  /*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 40px;
}

.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #4e73df;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #4e73df;
}

.portfolio-details .portfolio-info {
  padding: 30px;
  box-shadow: 0px 0 30px rgba(51, 66, 66, 0.08);
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li+li {
  margin-top: 10px;
}

.portfolio-details .portfolio-description {
  padding-top: 30px;
}

.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
}
/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team {
  /* background: #fff; */
  padding: 60px 0;
}

.team .member {
  margin-bottom: 10px;
  margin-left: 10px;
  overflow: hidden;
  border-radius: 10px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.4);
}

.team .member .member-img {
  position: relative;
  overflow: hidden;
}

.team .member .social {
  position: absolute;
  left: 0;
  bottom: 30px;
  right: 0;
  opacity: 0;
  transition: ease-in-out 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.team .member .social a {
  transition: color 0.3s;
  color: #334242;
  margin: 0 3px;
  border-radius: 50px;
  width: 36px;
  height: 36px;
  background: rgba(0, 193, 193, 0.8);
  display: inline-block;
  transition: ease-in-out 0.3s;
  color: #fff;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}

.team .member .social a:hover {
  background: #4e73df;
}

.team .member .social i {
  font-size: 18px;
  line-height: 0;
}

.team .member .member-info {
  padding: 25px 15px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #334242;
}

.team .member .member-info span {
  display: block;
  font-size: 13px;
  font-weight: 400;
  color: #aaaaaa;
}

.team .member .member-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  color: #777777;
}

.team .member:hover .social {
  opacity: 1;
  bottom: 15px;
}


section {
  padding: 60px 0;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 33px;
  font-weight: bold;
  text-transform: uppercase;
  position: relative;
  margin-bottom: 20px;
  margin-top: 10px;
  padding-bottom: 25px;
  color: #f8f9fa;
 
}
.rows{
 
    display:flex;
    margin-left: 20%;
    
    /* width:100%; */
    
}



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
                    <li ><a href="index.php">Home</a></li>
                    <li><a href="item.php">items</a></li>
                    <li><a href="order.php">Orders</a></li>
                    <li class="active"><a href="about.php">About</a></li>
                    <div class="dropdown">
                      <button class="dropbtn">LOGIN</button>
                      <div class="dropdown-content">
                        <a href="alogin.php">As admin</a>
                        <a href="login.php">As customer</a>
						          </div>
				            </div>
                    <li> <a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="50%" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 15 16">
 		 <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		</svg></a></li>
                </ul>   
            </div>
        </div>
	



 <!-- ======= Team Section ======= -->
 <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Our Team</h2>
        </div>

        <div class="rows">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/team/d1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href="#"><i class="bi bi-twitter"></i></a> -->
                  <a href="https://www.facebook.com/profile.php?id=100076435967272"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/deeppatel1355/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/deep-patel-538114263/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Deep Patel</h4>
                <span>Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/team/ravi.jpg" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href="#"><i class="bi bi-twitter"></i></a> -->
                  <!-- <a href="https://www.facebook.com/denis.ruparel/"><i class="bi bi-facebook"></i></a> -->
                  <a href="https://www.instagram.com/20_ll_mr.ravi_ll_04/"><i class="bi bi-instagram"></i></a>
                  <!-- <a href="https://www.linkedin.com/in/denis-ruparel-249539243/"><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
              <div class="member-info">
                <h4>Ravi Jethva</h4>
                <span>Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/team/amit.jpg" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter"></i></a>-->
                  <a href="https://www.facebook.com/profile.php?id=100028756912083"><i class="bi bi-facebook"></i></a> 
                  <a href="https://www.instagram.com/vasava1055/"><i class="bi bi-instagram"></i></a>
                  <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
              <div class="member-info">
                <h4>Amit Vasava</h4>
                <span>Developer</span>
              </div>
            </div>
          </div>

          
        </div>

      </div>
    </section>




</body>
</html>
