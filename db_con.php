<?php 	

//declare variables
$dbhost = 'localhost';  //Default hostname
$dbuser = 'root'; //Default username
$dbpass = ''; //Default password
$dbname = 'food'; //your database name

//Create connection using object oriented way
$con=mysqli_connect($dbhost,$dbuser);
$sel=mysqli_select_db($con,$dbname);
//Check Connection
if (!$con) {
    echo "Connect failed: <br />";
}

// $localhost = "localhost";
// $username = "root";
// $password = "";
// $dbname = "food";
// $store_url = "http://localhost/phpmyadmin/";
// // db connection
// $connect = new mysqli($localhost, $username, $password, $dbname);
// // check connection
// if($connect->connect_error) {
//   die("Connection Failed : " . $connect->connect_error);
// } else {
//   // echo "Successfully connected";
// }

?>


