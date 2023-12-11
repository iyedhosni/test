<?php
$servername = "70.38.21.233"; // Replace with your database server name
$username = "elbaytn_chat"; // Replace with your database username
$password = "19@Mars2023"; // Replace with your database password
$dbname = "elbaytn_chatest"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the connection
$conn->close();
?>
