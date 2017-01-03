<?php
$servername = "146.148.107.234:3306";
$username = "root";
$password = "Escudo2430!";
$db = "guestbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
