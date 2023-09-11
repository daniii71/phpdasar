<?php
    include 'connect.php';
    include 'connect.php';  
session_start(); // Pastikan Anda sudah memanggil session_start() di file lain yang memproses login  
  
if (!isset($_SESSION['email'])) {  
    // Jika pengguna belum login, tampilkan pesan kesalahan dan arahkan mereka kembali ke halaman login  
    echo "<script>alert('Maaf, Anda belum login!');</script>";  
    echo "<script>window.location.href = 'login.php';</script>"; // Gantilah 'login.php' dengan nama halaman login Anda  
    exit;  
}
    if (isset($_POST['submit'])) {
        $nama_sekolah = $_POST['nama'];
        $alamat_sekolah = $_POST['jenis'];
        $alamat_sekolah = $_POST['harga'];
        $alamat_sekolah = $_POST['total'];
        $sql = "insert into sekolah(nama_sekolah, alamat_sekolah) values('$nama_sekolah', '$alamat_sekolah')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location:read.php');
            } else {
            die($conn->connect_error);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
<?php
    include 'connect.php';
    if (isset($_POST['submit'])) {
        $nama_sekolah = $_POST['nama'];
        $alamat_sekolah = $_POST['alamat'];
        $sql = "insert into sekolah(nama_sekolah, alamat_sekolah) values('$nama_sekolah', '$alamat_sekolah')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location:read.php');
            } else {
            die($conn->connect_error);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="min-vh-100 d-flex align-itens-center">

<div class="card w-55 m-auto p-3">
    <h3 class="text-center text-danger">DAFTAR SISWA</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">SISWA</th>
                <th scope="col">ALAMAT SISWA</th>
                <th scope="col">TUNGGAS SISWA</th>
                <th scope="col">DESA SISWA</th>
                <th scope="col">TEMPAT LAHIR SISWA</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>

    </table>
   <form action="register.php" method="POST">
    <div class="box-imput">
        <i class="fas fa-user"></i>
        <input type="text" name="fullname" placeholder="">
    </div>
    <div class="box-input">
        <i class="fas fa-address-book"></i>
        <input type="text" name="username" placeholder="">
    </div>
    <div class="box-input">
        <i class="fas fa-address-book"></i>
        <input type="text" name="institution" placeholder="">
    </div>
    <div class="box-input">
        <i class="fas fa-address-book"></i>
        <input type="text" name="Email" placeholder="">
    </div>
    <div class="box-input">
        <i class="fas fa-address-book"></i>
        <input type="text" name="password" placeholder="">
    </div>
    <a href="login.html">
        <button type="sumbit" name="rigister" class="btn-imput">LANJUT</button>
    </a>
    <div class="botton">
        <p>Sudah Punya akun?
            <a href="index.html">Login disini</a>
        </p>
    </div>  
 </div>
</body>
</html>
</html>
</body>

</html>