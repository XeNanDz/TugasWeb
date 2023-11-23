<html>
<a href = "pelanggan.php">Kembali</a>
<h3></h3>

<?php
include 'koneksi_hostel.php';
$id_pelanggan= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-pelanggan.php">
<table>
    <tr>
        <td>Id Pelanggan: </td>
        <td><input type="number" name="id_pelanggan" value="<?php echo $tampil['id_pelanggan']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Pelanggan: </td>
        <td><input type="text" name="nama_pelanggan" value="<?php echo $tampil['nama_pelanggan']; ?>"></td>
    </tr>
    <tr>
        <td>Gender: </td>
        <td><input type="text" name="Gender" value="<?php echo $tampil['Gender']; ?>"></td>
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