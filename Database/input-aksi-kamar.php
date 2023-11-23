<?php
include 'koneksi_hostel.php';
$Id_kamar = $_POST['Id_kamar'];
$nomor_kamar = $_POST['nomor_kamar'];

mysqli_query($koneksi,"insert into kamar values('$Id_kamar', '$nomor_kamar')");
header("location:kamar.php");
?>