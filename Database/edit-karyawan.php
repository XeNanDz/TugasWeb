<html>
<a href = "karyawan.php">Kembali</a>
<h3></h3>

<?php
include 'koneksi_hostel.php';
$Id_karyawan= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE id_karyawan='$Id_karyawan'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-karyawan.php">
<table>
    <tr>
        <td>Id Karyawan: </td>
        <td><input type="number" name="id_karyawan" value="<?php echo $tampil['id_karyawan']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Karyawan: </td>
        <td><input type="text" name="nama_karyawan" value="<?php echo $tampil['nama_karyawan']; ?>"></td>
    </tr>
    <tr>
        <td>Gender: </td>
        <td><input type="text" name="Gender" value="<?php echo $tampil['Gender']; ?>"></td>
    </tr>
    <tr>
        <td>Jabatan: </td>
        <td><input type="text" name="Jabatan" value="<?php echo $tampil['Jabatan']; ?>"></td>
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