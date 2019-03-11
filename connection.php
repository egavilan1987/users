<?php

$conn = mysqli_connect("localhost","root","","users");

if(!$conn){
	die("Connection failed: ".mysql_connect_error());
}
//echo "Connected successfully";
?>