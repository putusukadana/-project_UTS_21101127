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
    
    if(isset($_POST["txKODES"])){
        $kodes = $_POST["txKODES"];
        $namas = $_POST["txNAMAS"];
        $almt = $_POST["txALMT"];

        $sql = "UPDATE suplayer SET 
            KODE_SUPLAYER ='$kodes', 
            NAMA_SUPLAYER ='$namas',
            ALAMAT = '$almt'
            WHERE KODE_SUPLAYER ='$kodes'";
        
            echo "DEBUG: ".$sql;

        $hsl = mysqli_query($cnn, $sql);
        mysqli_close($cnn);
    }
    header("location: tampilansuplayer.php");