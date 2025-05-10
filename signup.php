<?php
$servername = "localhost";
$username = "root";
$password = "Cdevyani@1"; // Leave it blank since phpMyAdmin doesn't require a password
$dbname = "cineaura";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
