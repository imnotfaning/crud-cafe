<?php

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM menu WHERE id='$id'");

if ($sql) {
    header('location: ?halaman=daftarMenu');
}
