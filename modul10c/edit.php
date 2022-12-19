<!DOCTYPE html>
<html>
<head>
<title>Update Data di Database dengan PHP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>LAYANAN KLINIK SEHAT ADITAPA</h1>
    <h3>jl. genggong no.87 Kota Madiun, No Telpon 081234567891</h3>
</div>
<br/>
<a href="index.php">Lihat Semua Data</a>
<br/>
<h3>Edit data</h3>
<?php
include "koneksi.php";
$no_antrian = $_GET['no_antrian'];
$ambildata = mysqli_query($koneksii, "SELECT * FROM modul8c WHERE no_antrian='$no_antrian'");
while($tampil = mysqli_fetch_array($ambildata))
{
    ?>
    <form action="update.php" method="post">
    <table>
    <tr>
    <td>No Antrian</td>
    <td><input type="text" name="no_antrian" value="<?php echo $tampil['no_antrian'] ?>"></td>
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
    <td>Jenis Kelamin</td>
    <td><input type="text" name="type_tahun" value="<?php echo $tampil['jenis_kelamin'] ?>"></td>
    </tr>

    <tr>
    <td>Usia</td>
    <td><input type="text" name="usia" value="<?php echo $tampil['usia'] ?>"></td>
    </tr>

    <tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat" value="<?php echo $tampil['alamat'] ?>"></td>
    </tr>
    
    <tr>
    <td>Gejala</td>
    <td><input type="text" name="gejala" value="<?php echo $tampil['gejala'] ?>"></td>
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