<?php
$hostname="localhost";
$username="root";
$password="";

$conn=mysqli_connect($hostname,$username,$password);

if(!$conn){
	die("Connection is failed".mysqli_connect_error($conn));
}else{
	echo "Connected successfully";
}


?> 