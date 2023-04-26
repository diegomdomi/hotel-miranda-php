<?php
$servername = "localhost";
$username = "root";
$password = "sql2023";
$dbname = "hotelmiranda";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>