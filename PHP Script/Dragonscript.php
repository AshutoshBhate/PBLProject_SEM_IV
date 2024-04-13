<?php

// Database connection details (replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Extract RFID data from POST request (replace with actual parameter name)
$rfidData = $_POST["rfid_data"];

// Validate RFID data (optional, implement as needed)
// ...

// Prepare SQL statement (replace 'pbl_attendance' with your table name)
$sql = "INSERT IGNORE INTO pbl_attendance (rfid_data) VALUES ('$rfidData')";


if (mysqli_query($conn, $sql)) {
  echo "RFID data inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
