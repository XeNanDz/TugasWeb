<?php
include 'koneksi_hostel.php';

$id= $_GET['id'];
mysqli_query($koneksi,"delete from makanan where id_makanan='$id'");

header("location: makanan.php")

?>