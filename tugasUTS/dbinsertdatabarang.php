<?php
    /**
     * Menambahkan data ke tabel mhs
     * 1. buat koneksi
     * 2. buat script sql untuk insert data ke tabel mhs
     *    NIM, NAMA, Jurusan, tgl lahir, jk, passcode 
     * 3. execute point 2
     * 4. cek status
     * 5. close connection
     */

if(isset($_POST["txKODEB"])){
     include_once("dbkoneksi.php");

     $kodeb = $_POST["txKODEB"];
     $namab = $_POST["txNAMAB"];
     $talag = $_POST["txTALAG"];
     $kodes = $_POST["txKODES"];
     $namas = $_POST["txNAMAS"];

     $sqlINSERT = "INSERT INTO barang(KODE_BARANG, NAMA_BARANG, TANGGAL_PENGIRIMAN, KODE_SUPLAYER, NAMA_SUPLAYER) VALUES
     ('".$kodeb."','".$namab."','".$talag."','".$kodes."','".$namas."');";

    // echo "SQL: ". $sqlINSERT . "<br>";

     $hsl = mysqli_query($cnn,$sqlINSERT);

     if($hsl){
        //  echo "Insert Data sukses<br>";
        include_once("tampilan.php");
     }else{
         echo "Insert Data gagal<br>";
     }

     mysqli_close($cnn);
}