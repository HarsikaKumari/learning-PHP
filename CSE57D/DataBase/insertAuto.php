 <?php
 // one row at one time
 include('config.php');
 $sql="INSERT INTO register(firtname,lastname,email)VALUES
 ('Anchal','Jaiswal','anchal@gmail.com'),
 ('Harshika','Kumari','Harshika@gmail.com'),
 ('Anushka','Ranjan','anushka@gmail.com'),
 ('Mihir','Saumya','mihir@gmail.com')";
 
 if(mysqli_query($conn,$sql)){
	 echo "Records inserted Successfully";
 }else{
	 echo"Error: Could not able to execute $sql";
 }
 ?>