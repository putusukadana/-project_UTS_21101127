<?php
    /**
     * Membuat tabel:
     * 1. koneksi server database dan membuka database
     * 2. script sql create tabel
     * tabel: mhs
     * field: NIM varchar(8), NAMA varchar(30), Jurusan varchar(20), JK enum, TGLLAHIR date, PASSCODE varchar(10)
     * 3. execute script point 2
     * 4. cek status
     * 5. close connection
     */
    include_once("dbkoneksi.php");
    $sql = "CREATE TABLE suplayer(
        KODE_SUPLAYER varchar(8) PRIMARY KEY,
        NAMA_SUPLAYER varchar(30),
        ALAMAT date
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Pembuatan tabel <strong>Suplayer</strong> sukses<br>";
    }else{
        echo "Pembuatan tabel <strong>Suplayer</strong> Gagal<br>";
    }
    mysqli_close($cnn);