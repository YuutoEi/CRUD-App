<?php
include 'connection.php';

//Menangkap data yang dikirim
$kegiatan = $_POST['kegiatan'];
$cek = $_POST['cek'];

//input ke data base
mysqli_query($koneksi, "insert into list VALUES ('', '$kegiatan','$cek');");

//kembali ke index.php
header("location:index.php");


?>