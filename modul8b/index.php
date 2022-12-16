<!DOCTYPE html>
<html>
<head>
<title>LAYANAN SERVICE MOTOR</title>
<link rel="stylesheet" href="modul8b.css">
</head>
<body>
    <div class="judul">
    <h1>LAYANAN SERVICE MOTOR</h1>
    <h3>jl. majapahit no.56 Kota Madiun</h3>
    </div>
<br/>
<br/>
    <h3>Data Pelanggan</h3>
    <table border="2" class="table">
    <tr>
    <th>No Plat</th>
    <th>Tanggal</th>
    <th>Nama</th>
    <th>Type / Tahun</th>
    <th>Alamat</th>
    <th>Layanan</th>
    <th>Biaya</th>
    </tr>
<?php
include "koneksi.php";
$ambildata = mysqli_query($connect, "SELECT * FROM modul8b");
while($tampil = mysqli_fetch_array($ambildata))
{
    ?>
    <tr>
        <td><?php echo $tampil['no_plat']; ?></td>
        <td><?php echo $tampil['tanggal']; ?></td>
        <td><?php echo $tampil['nama']; ?></td>
        <td><?php echo $tampil['type_tahun']; ?></td>
        <td><?php echo $tampil['alamat']; ?></td>
        <td><?php echo $tampil['layanan']; ?></td>
        <td><?php echo $tampil['biaya']; ?></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>