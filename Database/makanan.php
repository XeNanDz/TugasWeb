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
    height: 60%;
    text-align: center;
    
}

th{
    background-color:#0080ff;
}

.link {
    font-size: 18px;
    text-align: center
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
    <center>
        <form>
<html>
<br><div class="judul"> Tabel Makanan</div></br>
   <table border="1">
        <tr>
            <th>Nama Makanan</th>
            <th>Id Makanan</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        
    <?php
        include "koneksi_hostel.php";
        $data=mysqli_query($koneksi,"select * from makanan");
        while ($tampil=mysqli_fetch_array($data)){
            ?>

            <tr>
                <td> <?php echo $tampil ['nama_makanan'] ?> </td>
                <td> <?php echo $tampil ['id_makanan'] ?> </td>
                <td> <?php echo $tampil ['harga'] ?> </td>
                <td> <?php echo $tampil ['stok'] ?> </td>
                <td><a href="hapus-makanan.php?id=<?php echo $tampil ['id_makanan']; ?>">Hapus</a>
                <a href="edit-makanan.php?id=<?php echo $tampil ['id_makanan']; ?>">Edit</a>
                </td>
            </tr>
        </form>

            <?php
        }
    ?>    
    

    </table>   
    <br><div class="link"><a href="input-makanan.php"> Tambahkan Data Baru </a></div></br>
</html>