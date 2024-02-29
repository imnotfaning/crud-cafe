<?php

$id = $_POST['id'];
$jenis = $_POST['jenis'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];

$sql = mysqli_query($koneksi, "UPDATE menu SET id='$id', jenis='$jenis', nama='$nama', harga='$harga' WHERE id='$id'");

if ($sql) {
    header('location: ?halaman=daftarMenu');
}
