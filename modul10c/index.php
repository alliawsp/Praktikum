<!DOCTYPE html>
<html>
<head>
<title>KLINIK SEHAT</title>
<link rel="stylesheet" type="text/css" href="modul8c.css">
</head>
<body>
<div class="judul">
    <h1>LAYANAN KLINIK SEHAT ADITAPA</h1>
    <h3>jl. genggong no.87 Kota Madiun, No Telpon 081234567891</h3>
</div>
<br/>
<?php
if(isset($_GET['pesan']))
{
    $pesan = $_GET['pesan'];
    if($pesan == "input")
    {
        echo "Data berhasil di input.";
    }
    else if($pesan == "update")
    {
        echo "Data berhasil di update.";
    }
    else if($pesan == "hapus")
    {
        echo "Data berhasil di hapus.";
    }
}
?>
<br/>
    <a class="tombol" href="input.php">+ Tambah Data Baru</a>
    <h3>Data Pelanggan</h3>
    <table border="1" class="table">
    <tr>
    <th>No Antrian</th>
    <th>Tanggal</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Usia</th>
    <th>Alamat</th>
    <th>Gejala</th>
    <th>Opsi</th>
    </tr>
<?php
include "koneksi.php";
$ambildata = mysqli_query($koneksii, "SELECT * FROM modul8c");
while($tampil = mysqli_fetch_array($ambildata))
{
    ?>
    <tr>
        <td><?php echo $tampil['no_antrian']; ?></td>
        <td><?php echo $tampil['tanggal']; ?></td>
        <td><?php echo $tampil['nama']; ?></td>
        <td><?php echo $tampil['jenis_kelamin']; ?></td>
        <td><?php echo $tampil['usia']; ?></td>
        <td><?php echo $tampil['alamat']; ?></td>
        <td><?php echo $tampil['gejala']; ?></td>
        <td>
        <a class="edit" href="edit.php?no_antrian=<?php echo $tampil['no_antrian']; ?>">Edit</a> |
        <a class="hapus" href="hapus.php?no_antrian=<?php echo $tampil['no_antrian']; ?>">Hapus</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>