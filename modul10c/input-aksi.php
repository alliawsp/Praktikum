<?php
include 'koneksi.php';
$no_antrian = $_POST['no_antrian'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$usia = $_POST['usia'];
$alamat = $_POST['alamat'];
$gejala = $_POST['gejala'];
mysqli_query($koneksii, "INSERT INTO modul8c VALUES('$no_antrian','$tanggal','$nama','$jenis_kelamin','$usia','$alamat','$gejala')");
header("location:index.php?pesan=input");
?>