<html>
<link rel="stylesheet" href="dashboard.css">
    
    <style>
        form{
    width: 335px;
    height: 250px;
    margin: 120px auto;
    padding: 30px;
    background-color: #FFFFFF;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 1);
}
.main {
	width: 100%;
	height: 100vh;
	background-image: linear-gradient(rgba(0, 0, 0, 0.55),#120e0e8c), url("expediav2-448841-9e0fd3-605126.jpg");
	background-size: cover;
	background-position: center;
}

table {

    width: 100%;
    height: 70%;
    text-align: justify;
    font-SIZE:20px;
    
}

.judul{
    font-size: 20px;
    color: black;
}
    </style>
</head>
<body>
<div class="main">
	<div class="navbar">
		<label class="logo">HOSTEL</label>
		<ul>
        <li><a href="dashboard1.html">Home</a></li>
                <li><a href="karyawan.php">Karyawan</a></li>
                <li><a href="kamar.php">Kamar</a></li>
                <li><a href="pelanggan.php">Pelanggan</a></li>
                <li><a href="makanan.php">Makanan</a></li>
		</ul>
	</div>

<h3></h3>

<?php
include 'koneksi_hostel.php';
$Id_kamar = $_GET['idd'];
$kueri="SELECT * FROM kamar WHERE Id_kamar='$Id_kamar'";
$data = mysqli_query($koneksi,$kueri);
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-kamar.php">
<a href = "kamar.php">Kembali</a>
<table>
    <tr>
        <td>Id Kamar: </td>
        <td><input type="text" name="Id_kamar" value="<?php echo $Id_kamar; ?>"></td>
    </tr>
    <tr>
        <td>Nomor kamar: </td>
        <td><input type="number" name="nomor_kamar" value="<?php echo $tampil['nomor_kamar']; ?>"></td>
    </tr>
    <tr>
        <th><input type="submit" value="SIMPAN"></th>          
    </tr>

<?php
}
?>
</table>
</form>
