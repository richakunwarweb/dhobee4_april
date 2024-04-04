<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "dhobee123";
$dbname = "goodvibe_dhobeedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// You can use the following line to check if the connection is successful
echo "Connected successfully";

// Close connection
$conn->close();
?>