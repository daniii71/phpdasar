<?php  
  include 'connect.php';  
  $id = $_GET['id'];  
  $get_data = "select * from sembako where id=$id";  
  $result_data = mysqli_query($conn, $get_data);  
  $row = mysqli_fetch_assoc($result_data);  
  $nama = $row['nama'];  
  $jenis = $row['jenis'];  
  $harga = $row['harga'];  
  $barang = $row['barang'];  
  $total = $row['total']; 

  if (isset($_POST['submit'])) {  
    $nama = $_POST['nama'];  
    $jenis = $_POST['jenis'];  
    $harga = $_POST['harga'];  
    $barang = $_POST['barang'];  
    $total = $_POST['total'];  
    $sql = "update sembako set id=$id, jenis='$jenis', harga='$harga',   barang=$barang', total=$total";  
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
    <title>Update</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
</head> 
 
<body class="min-vh-100 d-flex align-items-center"> 
    <div class="card w-50 m-auto p-3"> 
        <h3 class="text-center">Update</h3> 
        <form method="post"> 
            <div class="mb-3"> 
                <label for="nama" class="form-label">Nama Sekolah</label> 
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama_sekolah ?>"> 
            </div> 
            <div class="mb-3"> 
                <label for="alamat" class="form-label">Alamat Sekolah</label> 
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat_sekolah ?>"> 
            </div> 
            <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
        </form> 
    </div> 
</body> 
 
</html>