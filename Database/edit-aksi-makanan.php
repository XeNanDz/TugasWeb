<?php
include "koneksi_hostel.php";

$nama_makanan = $_POST['nama_makanan'];
$id_makanan = $_POST['id_makanan'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query ($koneksi, "UPDATE makanan SET  id_makanan='$id_makanan' , nama_makanan='$nama_makanan' , harga='$harga' , stok='$stok' WHERE id_makanan='$id_makanan'");
header("location: makanan.php");
?>