<?php
include 'koneksi_hostel.php';

$id= $_GET['id'];
mysqli_query($koneksi,"delete from kamar where Id_kamar='$id'");

header("location: kamar.php")

?>