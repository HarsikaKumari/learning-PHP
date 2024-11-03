<?php
include('config.php');

$sql = "SELECT * FROM customer ORDER BY customerid";
if ($result = mysqli_query($conn, $sql)) {
	if (mysqli_num_rows($result) > 0) {
		echo "<br>";
		echo "ORDER LIST";
		echo "<table border='1' cellpadding='1' cellspacing='0'>";
		echo "<tr>";
		echo "<th>Customer_Id</th>";
		echo "<th>Company_Name</th>";
		echo "<th>Company_Email</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $row['customerid'] . "</td>";
			echo "<td>" . $row['companyname'] . "</td>";
			echo "<td>" . $row['companyemail'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
} else {
	echo "Error: Could not able to execute $sql";
}
