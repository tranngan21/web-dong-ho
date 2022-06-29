<?php 
session_start()
$servername = "mysql5046.site4now.net";
$username ="a8933e_dongho";
$password = "dongho2022";
$dbname = "db_a8933e_dongho";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("COnnection failed".mysqli_connect_error());
}
mysqli_query($conn,"set names utf8");
?>
