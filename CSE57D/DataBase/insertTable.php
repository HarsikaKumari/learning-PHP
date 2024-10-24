 <?php
 // one row at one time
 include('config.php');
 $sql="INSERT INTO customer(customerid,companyname,companyemail)VALUES
 ('1220','Anchal','anchal@gmail.com'),
 ('1221','Harshika','Harshika@gmail.com'),
 ('1222','Anushka','anushka@gmail.com'),
 ('1223','Mihir','mihir@gmail.com')";
 
 if(mysqli_query($conn,$sql)){
	 echo "Records inserted Successfully";
 }else{
	 echo"Error: Could not able to execute $sql";
 }
 ?>