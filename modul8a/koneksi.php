<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "modul8a";

$koneksi = mysqli_connect($host, $user, $password, $database);
if ($koneksi)
{
    $buka = mysqli_select_db($koneksi, $database);
    echo "Database dapat terhubung";
    if (!$buka)
    {
        echo "Database tidak dapat terhubung";
    }
}
else
{
    echo "MYSQL tidak terhubung";
}
?>