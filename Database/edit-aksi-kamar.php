
<?php
include "koneksi_hostel.php";

$Id_kamar = $_POST['Id_kamar'];
$nomor_kamar = $_POST['nomor_kamar'];
//echo "id='$Id_kamar' kamar='$nomor_kamar'";
mysqli_query ($koneksi, "UPDATE kamar set Id_kamar='$Id_kamar',nomor_kamar='$nomor_kamar' WHERE Id_kamar='$Id_kamar'");
header("location: kamar.php");
?>