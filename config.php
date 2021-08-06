<?php
$servername = "localhost";
$username = "deeps";
$password = "deepthi";

// Create connection
$conn = new mysqli($servername, $username, $password,"hotel",3307);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>