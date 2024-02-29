<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_cafe";

$koneksi = mysqli_connect("$hostname", "$username", "", "$database");

if (!$koneksi) {
    echo "Koneksi Gagal";
}
