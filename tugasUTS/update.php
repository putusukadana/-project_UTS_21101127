<?php
    /**
     * Update Data
     * 1. Buka koneksi dan buka database mhs
     * 2. buat query update data
     * 3. execute
     * 4. tutup koneksi
     * 5. kembali ke list data mhs
     */
    include_once("dbkoneksi.php");
    
    if(isset($_POST["txKODEB"])){
        $kodeb = $_POST["txKODEB"];
        $namab = $_POST["txNAMAB"];
        $talag = $_POST["txTALAG"];
        $kodes = $_POST["txKODES"];
        $namas = $_POST["txNAMAS"];
        // $kodelama = $_POST["txKODELAMA"];

        $sql = "UPDATE barang SET 
            KODE_BARANG ='$kodeb', 
            NAMA_BARANG ='$namab',
            TANGGAL_PENGIRIMAN = '$talag',
            KODE_SUPLAYER = '$kodes',
            NAMA_SUPLAYER = '$namas'
            WHERE KODE_BARANG ='$kodeb'";
        
            echo "DEBUG: ".$sql;

        $hsl = mysqli_query($cnn, $sql);
        mysqli_close($cnn);
    }
    header("location: tampilan.php");