<!DOCTYPE html>
<html>
<head>
<title>DAFTAR ANGGOTA PERPUS KOTA MADIUN</title>
<link rel="stylesheet" type="text/css" href="modul8a.css">
</head>
<body>
    <div class="judul">
    <h1>DAFTAR ANGGOTA PERPUS KOTA MADIUN</h1>
    <h3>www.perpuskotamadiun.ac.id</h3>
    </div>
<br/>
<br/>
    <h3>Data Anggota</h3>
    <table border="1" class="table">
    <tr>
    <th>No ID</th>
    <th>Nama Lengkap</th>
    <th>Jenis Kelamin</th>
    <th>TTL</th>
    <th>Asal Kota</th>
    <th>Pendidikan Terakhir</th>
    <th>No Telepon</th>
    <th>Alamat</th>
    </tr>
<?php
include "koneksi.php";
$ambildata = mysqli_query($koneksi, "SELECT * FROM modul8a");
while($tampil = mysqli_fetch_array($ambildata))
{
    ?>
    <tr>
        <td><?php echo $tampil['no_id']; ?></td>
        <td><?php echo $tampil['nama_lengkap']; ?></td>
        <td><?php echo $tampil['jenis_kelamin']; ?></td>
        <td><?php echo $tampil['tempattgl_lahir']; ?></td>
        <td><?php echo $tampil['asal_kota']; ?></td>
        <td><?php echo $tampil['pendidikan_terakhir']; ?></td>
        <td><?php echo $tampil['no_telp']; ?></td>
        <td><?php echo $tampil['alamat']; ?></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>