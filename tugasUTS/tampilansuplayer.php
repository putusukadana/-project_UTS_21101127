<?php
    include_once("dbkoneksi.php");

    $sql = "SELECT KODE_SUPLAYER, NAMA_SUPLAYER, ALAMAT FROM suplayer;";

    $hsl = mysqli_query($cnn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="tabelbarang.css"> -->
    <title>List Data Suplayer</title>
</head>
<body>
<div class="container">
    <h3>Daftar Suplayer</h3>
    <br/><a href="index.php"><button>HOME</button></a> <br/>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">KODE_SUPLAYER</th>
      <th scope="col">NAMA_SUPLAYER</th>
      <th scope="col">ALAMAT</th>
      <th scope="col"><a href='formdatabsuplayer.php'><button>TambahData</button></a></th>
    </tr>
  </thead>
  <tbody>
<?php 
    $no =1;
    while($h = mysqli_fetch_Array($hsl) ){
        echo "
        <tr>
            <th>".$no."</th>
            <td>".$h["KODE_SUPLAYER"]."</td>
            <td>".$h["NAMA_SUPLAYER"]."</td>
            <td>".$h["ALAMAT"]."</td>
            <td><a href='editsuplayer.php?n=".$h["KODE_SUPLAYER"]."'><button>Edit</button></a> | <a href='hapussuplayer.php?n=".$h["KODE_SUPLAYER"]."'><button>Delete</button></a></td>
        </tr>";
        $no++;
    }
?>
</table>
</div>
</body>
</html>