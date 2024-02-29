<?php

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM pesanan WHERE id_pesanan='$id'");

if ($sql) {
    header('location: ?halaman=daftarPesanan');
}
