<?php

    if(isset($_GET["n"])){
        include_once("dbkoneksi.php");

        
        $kodes = $_GET["n"];
        $sql = "SELECT * FROM suplayer WHERE KODE_SUPLAYER='".$kodes."'";
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

    <form action="updatesuplayer.php" method="POST">
        KODE SUPLAYER
        <div>
        <input type="text" name="txKODES" value="<?=$h["KODE_SUPLAYER"];?>" class="form-control" >
        </div>
        NAMA SUPLAYER
        <div>
        <input type="text" name="txNAMAS" value="<?=$h["NAMA_SUPLAYER"];?>" class="form-control" >
        </div>
        ALAMAT
        <div>
        <input type="text" name="txALMT" value="<?=$h["ALAMAT"];?>" class="form-control" >
        </div>
        <div class="input-group">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>
</body>
</html>
