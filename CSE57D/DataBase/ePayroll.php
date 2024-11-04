<?php
// Connect to the MySQL database
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare an SQL statement to update employee payroll
$stmt = $conn->prepare("UPDATE employees SET payroll = ? WHERE employee_id = ?");

// Check if statement was prepared successfully
if ($stmt === false) {
    die("Statement preparation failed: " . $conn->error);
}

// Bind parameters to the SQL statement
$payroll_amount = 5000; // Example payroll amount
$employee_id = 1; // Example employee ID
$stmt->bind_param("di", $payroll_amount, $employee_id);

// Execute the prepared statement
if ($stmt->execute()) {
    echo "Employee payroll updated successfully.";
} else {
    echo "Error updating payroll: " . $stmt->error;
}

// Close the statement and the connection
$stmt->close();
$conn->close();
