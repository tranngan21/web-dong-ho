<?php 
session_start()
$servername = "mysql8002.site4now.net";
$username ="a892f6_dongho";
$password = "Tranngan2022";
$dbname = "db_a892f6_dongho";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("COnnection failed".mysqli_connect_error());
}
mysqli_query($conn,"set names utf8");
?>
