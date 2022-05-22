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
    <h3>Tambah Data Suplayer</h3>
    <form action="dbinsertdatasuplayer.php" method="POST">
        KODE SUPLAYER
        <div>
        <input type="text" name="txKODES" class="form-control" >
        </div>
        NAMA SUPLAYER
        <div>
        <input type="text" name="txNAMAS" class="form-control" >
        </div>
        ALAMAT
        <div>
        <input type="text" name="txALMT" class="form-control" >
        </div>
        <div class="input-group">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>