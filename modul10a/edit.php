<!DOCTYPE html>
<html>
<head>
<title>Update Data di Database dengan PHP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>DAFTAR ANGGOTA PERPUS KOTA MADIUN</h1>
    <h3>www.perpuskotamadiun.ac.id</h3>
</div>
<br/>
<a href="index.php">Lihat Semua Data</a>
<br/>
<h3>Edit data</h3>
<?php
include "koneksi.php";
$no_id = $_GET['no_id'];
$ambildata = mysqli_query($koneksi, "SELECT * FROM modul8a WHERE no_id='$no_id'");
while($tampil = mysqli_fetch_array($ambildata))
{
    ?>
    <form action="update.php" method="post">
    <table>
    <tr>
    <td>No ID</td>
    <td><input type="text" name="no_id" value="<?php echo $tampil['no_id'] ?>"></td>
    </tr>

    <tr>
    <td>Nama Lengkap</td>
    <td>
    <input type="text" name="nama_lengkap" value="<?php echo $tampil['nama_lengkap'] ?>"></td>
    </tr>

    <tr>
    <td>Jenis Kelamin</td>
    <td><input type="text" name="jenis_kelamin" value="<?php echo $tampil['jenis_kelamin'] ?>"></td>
    </tr>

    <tr>
    <td>TTL</td>
    <td><input type="text" name="tempattgl_lahir" value="<?php echo $tampil['tempattgl_lahir'] ?>"></td>
    </tr>

    <tr>
    <td>Asal Kota</td>
    <td><input type="text" name="asal_kota" value="<?php echo $tampil['asal_kota'] ?>"></td>
    </tr>
    <tr>
    <td>Pendidikan Terakhir</td>
    <td><input type="text" name="pendidikan_terakhir" value="<?php echo $tampil['pendidikan_terakhir'] ?>"></td>
    </tr>
    <tr>
    <td>No Telepon</td>
    <td><input type="text" name="no_telp" value="<?php echo $tampil['no_telp'] ?>"></td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat" value="<?php echo $tampil['alamat'] ?>"></td>
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