<?php

$menu = $_POST['menu'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$sql = mysqli_query($koneksi, "INSERT INTO pesanan VALUES(Null, '$menu', '$jumlah', '$harga')");

if ($sql) {
    header('location: ?halaman=daftarPesanan');
}
