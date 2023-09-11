<?php
$servername = "localhost";
$username = "root";
$password = "";
$datebase = "db_sekolah";


// Create connection
$conn = new mysqli($servername, $username, $password, $datebase);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
