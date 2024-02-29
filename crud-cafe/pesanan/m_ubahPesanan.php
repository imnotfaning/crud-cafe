<?php

$id = $_POST['id'];
$menu = $_POST['menu'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$sql = mysqli_query($koneksi, "UPDATE pesanan SET id_pesanan='$id', menu='$menu', jumlah='$jumlah', harga='$harga' WHERE id_pesanan='$id'");

if ($sql) {
    header('location: ?halaman=daftarPesanan');
}
