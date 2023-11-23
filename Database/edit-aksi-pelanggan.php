<?php
include 'koneksi_hostel.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$Gender = $_POST['Gender'];

mysqli_query($koneksi, "UPDATE pelanggan SET id_pelanggan='$id_pelanggan', nama_pelanggan='$nama_pelanggan', Gender='$Gender' where id_pelanggan='$id_pelanggan'");
header("location:pelanggan.php");
?>