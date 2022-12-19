<?php
include 'koneksi.php';
$no_plat = $_POST['no_plat'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$type_tahun = $_POST['type_tahun'];
$alamat = $_POST['alamat'];
$layanan = $_POST['layanan'];
$biaya = $_POST['biaya'];
mysqli_query($connect, "UPDATE modul8b SET tanggal='$tanggal', nama='$nama', type_tahun='$type_tahun', alamat='$alamat', layanan='$layanan', biaya='$biaya' WHERE no_plat='$no_plat'");
header("location:index.php?pesan=update");
?>