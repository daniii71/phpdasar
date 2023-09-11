<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <br>
  Umur: <input type="text" name="fUmur">
  <br>
  Gender:
  <input type="radio" name="gender" value="Laki-Laki">Laki-Laki
  <input type="radio" name="gender" value="perempuan">perempuan
  <br>
  Makanan :
  <input type="checkbox" name="makanan[]" value="rendang">Rendang
  <input type="checkbox" name="makanan[]" value="sayur sop">Sayur Sop
  <input type="checkbox" name="makanan[]" value="ayam">Ayam
  <br>
  <input type="submit">
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    // collect value of input field
    $name = $_POST['fname'];
    $Umur = $_POST['fUmur'];
    $gender = $_POST['gender'];
    $Makanan = $_POST['makanan'];
    if (empty($name)) {
        echo "Name dan umur kosong";
    } else {
        echo "nama saya $name," .  "umur saya $Umur," .  "gender saya  $gender," .  "Makanan kesukaan";
        foreach($Makanan as $kesukaan){
            echo " $kesukaan <br>";
        }
    }

?>
</body>
</html>