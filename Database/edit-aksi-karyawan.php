<?php
include "koneksi_hostel.php";

$Id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$Gender = $_POST['Gender'];
$Jabatan = $_POST['Jabatan'];

mysqli_query ($koneksi, "UPDATE karyawan SET  id_karyawan='$Id_karyawan' , nama_karyawan='$nama_karyawan' , Gender='$Gender' , Jabatan='$Jabatan' WHERE id_karyawan='$Id_karyawan'");
header("location: karyawan.php");
?>