<?php
use FTP\Connection;
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "sekolah";

    $connection = mysqli_connect($server, $user, $password, $database);

    if (!$connection) {
        echo "Koneksi gagal: ". mysqli_connect_error();
    }
?>