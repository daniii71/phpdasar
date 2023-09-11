<?php 
$servername = "localhost:3306"; 
$username_db = "root"; 
$password_db = ""; 
$dbname ="db_sekolah"; 
 
$email = isset($_POST['email']) ? $_POST['email'] : '';  
$username = isset($_POST['username']) ? $_POST['username'] : ''; 
$password = isset($_POST['password']) ? $_POST['password'] : ''; 
 
$conn = new mysqli($servername, $username_db, $password_db, $dbname); 
if ($conn->connect_error) { 
die("Connection failed: ".$conn->connect_error); 
} else { 
$stmt= $conn->prepare("INSERT INTO admin (email, username, password) VALUES (?, ?, ?)"); 
$stmt->bind_param("sss", $email, $username, $password); 
$stmt->execute(); 
echo "Registrasi berhasil"; 
$stmt->close(); 
$conn->close(); 
} 
 
?>