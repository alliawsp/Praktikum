<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "modul8b";

$connect = mysqli_connect($host, $user, $password, $database);
if ($connect)
{
    $buka = mysqli_select_db($connect, $database);
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