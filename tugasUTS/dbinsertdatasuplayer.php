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

if(isset($_POST["txKODES"])){
     include_once("dbkoneksi.php");

     $kodes = $_POST["txKODES"];
     $namas = $_POST["txNAMAS"];
     $almt = $_POST["txALMT"];

     $sqlINSERT = "INSERT INTO suplayer(KODE_SUPLAYER, NAMA_SUPLAYER, ALAMAT) VALUES
     ('".$kodes."','".$namas."','".$almt."')";

    // echo "SQL: ". $sqlINSERT . "<br>";

     $hsl = mysqli_query($cnn,$sqlINSERT);

     if($hsl){
        //  echo "Insert Data sukses<br>";
        include_once("tampilansuplayer.php");
     }else{
         echo "Insert Data gagal<br>";
     }

     mysqli_close($cnn);
}