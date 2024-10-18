<?php
include("./config.php");

$sql="CREATE DATABASE ANCHAL";
if(mysqli_query($conn,$sql)){
	echo "Database created successfully $sql";
}else{
	echo "Error";
}
?>