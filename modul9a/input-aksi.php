<?php
include 'koneksi.php';
$no_id = $_POST['no_id'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempattgl_lahir = $_POST['tempattgl_lahir'];
$asal_kota = $_POST['asal_kota'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi, "INSERT INTO modul8a VALUES('$no_id','$nama_lengkap','$jenis_kelamin','$tempattgl_lahir','$asal_kota','$pendidikan_terakhir','$no_telp','$alamat')");
header("location:index.php?pesan=input");
?>