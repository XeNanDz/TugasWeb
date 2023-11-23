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
<html>
    <center>
        <form>
    <div class="judul"> Tabel kamar</div><br>
    <table border="1">
        <tr>
            
            <th>Id Kamar</th>
            <th>Nomor Kamar</th>
            <th>Aksi</th>
        </tr>
        
    <?php
        include "koneksi_hostel.php";
        $data=mysqli_query($koneksi,"select * from kamar");
        while ($tampil=mysqli_fetch_array($data)){
            ?>

            <tr>
                <td> <?php echo $tampil ['Id_kamar'] ?> </td>
                <td> <?php echo $tampil ['nomor_kamar'] ?> </td>
                <td><a href="hapus-kamar.php?id=<?php echo $tampil ['Id_kamar']; ?>">Hapus</a>
                <td><a href="edit-kamar.php?idd=<?php echo $tampil['Id_kamar']; ?>">Edit</a>
                </td>
            </tr>

        </form>
            <?php
        }
    ?>    
    

    </table>   
    <br><div class="link"><a href="input-kamar.php"> Tambahkan Data Baru </a><div></br>
</html>