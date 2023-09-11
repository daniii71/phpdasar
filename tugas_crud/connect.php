<?php
$servername = "localhost";
$username = "root";
$password = "";
$datebase = "db_sekolah";


// Create connection
$conn = new mysqli($servername, $username, $password, $datebase);

// Check connection
if ($conn->connect_error) {
  die("Koneksi Gagal: " . $conn->connect_error);
}
// echo "koneksi Berhasil";
?>
