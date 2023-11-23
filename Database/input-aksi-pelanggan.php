<?php
include 'koneksi_hostel.php';
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$Gender = $_POST['Gender'];

mysqli_query($koneksi,"insert into pelanggan values('$id_pelanggan', '$nama_pelanggan', '$Gender' )");
header("location:pelanggan.php");
?>