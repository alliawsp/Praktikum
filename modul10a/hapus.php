<?php
include 'koneksi.php';
$no_id = $_GET['no_id'];
mysqli_query($koneksi, "DELETE FROM modul8a WHERE no_id='$no_id'");
header("location:index.php?pesan=hapus");
?>