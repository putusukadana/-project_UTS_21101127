<?php

    if(isset($_GET["n"])){
        include_once("dbkoneksi.php");

        
        $kodeb = $_GET["n"];
        $sql = "SELECT * FROM barang WHERE KODE_BARANG='".$kodeb."';";
        $hsl = mysqli_query($cnn, $sql);
        $h = mysqli_fetch_array($hsl);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h3>Edit Data Barang</h3>

    <form action="update.php" method="POST">
        KODE_BARANG
        <div>
            <input type="text" name="txKODEB" value="<?=$h["KODE_BARANG"];?>" class="form-control">
        </div>
        NAMA_BARANG
        <div>
            <input type="text" name="txNAMAB"  value="<?=$h["NAMA_BARANG"];?>" class="form-control">
        </div>
        TANGGAL_PENGIRIMAN
        <div>
            <input type="date" name="txTALAG"  value="<?=$h["TANGGAL_PENGIRIMAN"];?>" class="form-control">
        </div>
        KODE_SUPLAYER
        <div>
            <input type="text" name="txKODES"  value="<?=$h["KODE_SUPLAYER"];?>" class="form-control">
        </div>
        NAMA_SUPLAYER
        <div>
            <input type="text" name="txNAMAS"  value="<?=$h["NAMA_SUPLAYER"];?>" class="form-control">
        </div>
        <div>
          <button type="submit" class="btn btn-primary" name="simpan">Simpan Data</button>
        </div>
    </form>
</div>
</body>
</html>

