<?php
include 'koneksi_hostel.php';
$nama_makanan = $_POST['nama_makanan'];
$id_makanan = $_POST['id_makanan'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($koneksi,"insert into makanan values('$nama_makanan', '$id_makanan', '$harga', '$stok')");
header("location:makanan.php");
?>