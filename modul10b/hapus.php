<?php
include 'koneksi.php';
$no_plat = $_GET['no_plat'];
mysqli_query($connect, "DELETE FROM modul8b WHERE no_plat='$no_plat'");
header("location:index.php?pesan=hapus");
?>