<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "modul8c";

$koneksii = mysqli_connect($host, $user, $password, $database);
if ($koneksii)
{
    $bukaa = mysqli_select_db($koneksii, $database);
    echo "Database dapat terhubung";
    if (!$bukaa)
    {
        echo "Database tidak dapat terhubung";
    }
}
else
{
    echo "MYSQL tidak terhubung";
}
?>