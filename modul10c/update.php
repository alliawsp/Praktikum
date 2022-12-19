<?php
include 'koneksi.php';
$no_antrian = $_POST['no_antrian'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$usia = $_POST['usia'];
$alamat = $_POST['alamat'];
$gejala = $_POST['gejala'];
mysqli_query($koneksii, "UPDATE modul8c SET tanggal='$tanggal', nama='$nama', jenis_kelamin='$jenis_kelamin', usia='$usia', alamat='$alamat', gejala='$gejala' WHERE no_antrian='$no_antrian'");
header("location:index.php?pesan=update");
?>