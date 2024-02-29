<?php

$jenis = $_POST['jenis'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];

$sql = mysqli_query($koneksi, "INSERT INTO menu VALUES(Null, '$jenis', '$nama', '$harga')");

if ($sql) {
    header('location: ?halaman=daftarMenu');
}
