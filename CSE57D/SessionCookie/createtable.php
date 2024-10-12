<?php

$conn=mysqli_connect("localhost","root","","anchal");

if(!$conn){
	die("Connection is failed".mysqli_connect_error());
}else{
	echo "Connected successfully";
}
$sql="create table customer(
customerid VARCHAR(50)NOT NULL,
companyname VARCHAR(50)NOT NULL,
companyemail VARCHAR(50)NOT NULL)";

if(mysqli_query($conn,$sql)){
	echo "Table created successfully $sql";
}else{
	echo "Error";
}
?>