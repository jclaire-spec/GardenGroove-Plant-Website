<?php
$hostname = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "user_db";
$conn = mysqli_connect($hostname, $dbuser, $dbpassword, $dbname);

if(!$conn){
	die("something went wrong;");
}
?>