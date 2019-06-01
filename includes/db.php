<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database ="JobPortal";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
	echo "welcome";
}
//echo "Connected successfully";
//session_start();

?>

