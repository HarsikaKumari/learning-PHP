<?php
include 'config.php';

$sql="INSERT INTO persons(first_name,last_name,email)VALUES(?,?,?)";

if($stmt=mysqli_prepare($conn,$sql)){
	mysqli_stmt_bind_param($stmt,"sss",$first_name,$last_name,$email);
	
	$first_name="Anchal";
	$last_name="Jaiswal";
	$email="anchaljaiswal@gmail.com";
	mysqli_stmt_execute($stmt);
	
	$first_name="Navya";
	$last_name="Jaiswal";
	$email="navyajaiswal@gmail.com";
	mysqli_stmt_execute($stmt);
	echo "Records Inserted";
}else{
	echo "Error:Please check ur code";
}
?>
