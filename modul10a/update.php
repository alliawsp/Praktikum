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
mysqli_query($koneksi, "UPDATE modul8a SET no_id='$no_id', nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin', tempattgl_lahir='$tempattgl_lahir', asal_kota='$asal_kota', pendidikan_terakhir='$pendidikan_terakhir', no_telp='$no_telp', alamat='$alamat' WHERE no_id='$no_id'");
header("location:index.php?pesan=update");
?>