<html>
<a href = "makanan.php">Kembali</a>
<h3></h3>

<?php
include 'koneksi_hostel.php';
$id_makanan= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM makanan WHERE id_makanan='$id_makanan'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-makanan.php">
<table>
    <tr>
        <td>Nama Makanan: </td>
        <td><input type="text" name="nama_makanan" value="<?php echo $tampil['nama_makanan']; ?>"></td>
    </tr>
    <tr>
        <td>ID Makananan: </td>
        <td><input type="number" name="id_makanan" value="<?php echo $tampil['id_makanan']; ?>"></td>
    </tr>
    <tr>
        <td>Harga: </td>
        <td><input type="number" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
    </tr>
    <tr>
        <td>Stok: </td>
        <td><input type="number" name="stok" value="<?php echo $tampil['stok']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>
</html>