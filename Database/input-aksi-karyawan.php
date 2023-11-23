<?php
include 'koneksi_hostel.php';
$Id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$Gender = $_POST['Gender'];
$Jabatan = $_POST['Jabatan'];

mysqli_query($koneksi,"insert into karyawan values('$Id_karyawan', '$nama_karyawan', '$Gender', '$Jabatan')");
header("location:karyawan.php");
?>