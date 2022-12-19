<!DOCTYPE html>
<html>
<head>
<title>Update Data di Database dengan PHP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>LAYANAN SERVICE MOTOR</h1>
    <h3>jl. majapahit no.56 Kota Madiun</h3>
</div>
<br/>
<a href="index.php">Lihat Semua Data</a>
<br/>
<h3>Edit data</h3>
<?php
include "koneksi.php";
$no_plat = $_GET['no_plat'];
$ambildata = mysqli_query($connect, "SELECT * FROM modul8b WHERE no_plat='$no_plat'");
while($tampil = mysqli_fetch_array($ambildata))
{
    ?>
    <form action="update.php" method="post">
    <table>
    <tr>
    <td>No Plat</td>
    <td><input type="text" name="no_plat" value="<?php echo $tampil['no_plat'] ?>"></td>
    </tr>

    <tr>
    <td>Tanggal</td>
    <td>
    <input type="text" name="tanggal" value="<?php echo $tampil['tanggal'] ?>"></td>
    </tr>

    <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" value="<?php echo $tampil['nama'] ?>"></td>
    </tr>

    <tr>
    <td>Type / Tahun</td>
    <td><input type="text" name="type_tahun" value="<?php echo $tampil['type_tahun'] ?>"></td>
    </tr>

    <tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat" value="<?php echo $tampil['alamat'] ?>"></td>
    </tr>

    <tr>
    <td>Layanan</td>
    <td><input type="text" name="layanan" value="<?php echo $tampil['layanan'] ?>"></td>
    </tr>
    
    <tr>
    <td>Biaya</td>
    <td><input type="text" name="biaya" value="<?php echo $tampil['biaya'] ?>"></td>
    </tr>

    <tr>
    <td></td>
    <td><input type="submit" value="Simpan"></td>
    </tr>
    </table>
    </form>
    <?php 
    }
    ?>
</body>
</html>