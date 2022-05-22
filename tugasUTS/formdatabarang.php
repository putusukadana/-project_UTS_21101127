<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h3>Tambah Data Barang</h3>
    <form action="dbinsertdatabarang.php" method="POST">
        KODE BARANG
        <div>
        <input type="text" name="txKODEB" class="form-control" >
        </div>
        NAMA BARANG
        <div>
        <input type="text" name="txNAMAB" class="form-control" >
        </div>
        TGL PENGIRIMAN 
        <div>
            <input type="date" name="txTALAG" class="form-control" >
        </div>
        KODE KODE_SUPLAYER
        <div>
        <input type="text" name="txKODES" class="form-control" >
        </div>
        NAMA SUPLAYER
        <div>
        <input type="text" name="txNAMAS" class="form-control" >
        </div>
        <div class="input-group">
            <a href='tampilan.php'><button type="submit" class="btn btn-primary">Simpan Data</button></a>
        </div>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>