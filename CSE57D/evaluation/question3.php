<html>
	<body>
		<form method = "post">
			<label>Sname</label></br>
				<input name="Sname"></br>
			<label>email</label></br>
				<input name="email"> </br>
			<label>regId</label></br>
				<input name="regId"></br>
			<input name="submit" value="submit" type="submit">
		</form>
	</body>
</html>


<?php
//order by registration number
$servername ="localhost";
$username="root";
$password="";
$database="custom";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$Sname = $_POST["Sname"];
	$email = $_POST["email"];
	$regId = $_POST["regId"];

$sql = "INSERT INTO registration(name, email, registrationNo) value('$Sname', '$email', '$regId')";
if(mysqli_query($conn, $sql)){
	echo "Data inserted Successfully.";
} else {
	echo "ERROR: could not able to execute $sql.". mysqli_error($conn);
} 
}

$sql = "SELECT * FROM registration ORDER BY registrationNo";
if($result = mysqli_query($conn, $sql)){
	if(mysqli_num_rows($result) > 0) {
	echo "Ordered Data:- </br>";
	echo "<table border='1'>";
		echo "<tr>";
			echo "<th>Sname</th>";
			echo "<th>email</th>";
			echo "<th>registrationNo</th>";
		echo "</tr>";
	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
			echo "<td>". $row['name']."</td>";
			echo "<td>". $row['email']."</td>";
			echo "<td>". $row['registrationNo']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_free_result($result);
	}else {
		echo "No record matching your query.";
	}
} else {
	echo "ERROR: could not able to execute $sql.". mysqli_error($conn);
}

mysqli_close($conn);
?>