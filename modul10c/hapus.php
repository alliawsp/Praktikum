<?php
include 'koneksi.php';
$no_antrian = $_GET['no_antrian'];
mysqli_query($koneksii, "DELETE FROM modul8c WHERE no_antrian='$no_antrian'");
header("location:index.php?pesan=hapus");
?>