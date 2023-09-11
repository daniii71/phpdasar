<?php
$servername = "localhost:3306";
$username_db = "root";
$password_db = "";
$datebase_name = "db_sekolah";

$email = isset($_POST['email']) ? $_POST['email'] : ''; 
$username = isset($_POST['username']) ? $_POST['username'] : ''; 
$password = isset($_POST['password']) ? $_POST['password'] : ''; 

$conn = new mysqli($servername, $username_db, $password_db, $datebase_name);


if ($conn->connect_error) {
  die("koneksi datebase gagal: " . $conn->connect_error);
  }else{
    $stmt = $conn->prepare("INSERT INTO admin (email, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $username, $password);
    $stmt->execute();
    echo "Regristrasi berhasil";
    $stmt->close();

   }

?>
