<?php

$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM menu WHERE id=$id");
$menu = mysqli_fetch_assoc($sql);
?>
<div class="container">
    <h2>Tambah Menu</h2>
    <form action="?halaman=simpanUbah" method="post">
        <input type="hidden" name="id" value="<?= $menu['id'] ?>">
        <div class="row">
            <div class="col-3">
                Jenis :
                <select name="jenis" id="" class="form-select">
                    <?php
                    if ($menu['jenis'] == "makanan") {
                        echo "<option value='makanan' selected>Makanan</option>";
                    } else {
                        echo "<option value='makanan'>Makanan</option>";
                    }
                    if ($menu['jenis'] == "minuman") {
                        echo "<option value='minuman' selected>Minuman</option>";
                    } else {
                        echo "<option value='minuman'>Minuman</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Nama :
                <input type="text" name="nama" id="" class="form-control" value="<?= $menu['nama'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Harga :
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp.</span>
                    <input type="text" class="form-control" name="harga" value="<?= $menu['harga'] ?>">
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