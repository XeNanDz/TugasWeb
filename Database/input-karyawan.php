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



.link {
    font-size: 18px;
    text-align: justify;
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
<form method="post" action="input-aksi-karyawan.php">
<h3> TAMBAH DATA KARYAWAN</h3>
<a href = "karyawan.php">Kembali</a>
<h3></h3>

    <form method="post" action="input-aksi-karyawan.php">
        <table>
            <tr>
                <td>Id Karyawan</td>
                <td><input type="number" name="id_karyawan"></td>
            </tr>
            <tr>
                <td>Nama Karyawan</td>
                <td><input type="text" name="nama_karyawan"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="Gender"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><input type="text" name="Jabatan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="TAMBAHKAN"></td>
            </tr>
        </table>
</form>