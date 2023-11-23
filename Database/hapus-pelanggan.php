<?php
include 'koneksi_hostel.php';

$id= $_GET['id'];
mysqli_query($koneksi,"delete from pelanggan where id_pelanggan='$id'");

header("location: pelanggan.php")

?>