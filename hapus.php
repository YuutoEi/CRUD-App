<?php
include 'connection.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM `list` WHERE id='$id'");

header("location:index.php")



?>