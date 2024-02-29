<?php

$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id_pesanan='$id'");
$pesan = mysqli_fetch_assoc($sql);
?>
<div class="container">
    <h2>Ubah Pesanan</h2>
    <form action="?halaman=ubahSimpanPesan" method="post">
        <input type="hidden" name="id" value="<?= $pesan['id_pesanan'] ?>">
        <div class="row">
            <div class="col-3">
                Menu :
                <input type="text" name="menu" id="" class="form-control" value="<?= $pesan['menu'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Jumlah :
                <input type="text" name="jumlah" id="" class="form-control" value="<?= $pesan['jumlah'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Harga :
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp.</span>
                    <input type="text" class="form-control" name="harga" value="<?= $pesan['harga'] ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>