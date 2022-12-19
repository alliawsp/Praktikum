<?php
include 'koneksi.php';
$no_plat = $_POST['no_plat'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$type_tahun = $_POST['type_tahun'];
$alamat = $_POST['alamat'];
$layanan = $_POST['layanan'];
$biaya = $_POST['biaya'];
mysqli_query($connect, "INSERT INTO modul8b VALUES('$no_plat','$tanggal','$nama','$type_tahun','$alamat','$layanan','$biaya')");
header("location:index.php?pesan=input");
?>