<div class="container">
    <h2>Daftar Pesanan</h2>
    <a href="?halaman=tambahPesanan" class="btn btn-success">Tambah</a>
    <table class="table">
        <thead>
            <th>Id pesanan</th>
            <th>Menu</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th colspan="2">Aksi</th>
        </thead>
        <tbody>
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM pesanan");
            foreach ($sql as $pesan) {
            ?>
                <tr>
                    <td><?= $pesan['id_pesanan'] ?></td>
                    <td><?= $pesan['menu'] ?></td>
                    <td><?= $pesan['jumlah'] ?></td>
                    <td>Rp. <?= $pesan['harga'] ?></td>
                    <td><a href="?halaman=ubahPesanan&id=<?= $pesan['id_pesanan'] ?> " class="badge text-bg-primary">Ubah</a></td>
                    <td> <a href="?halaman=hapusPesanan&id=<?= $pesan['id_pesanan'] ?> " onclick="return confirm('Anda yakin akan menghapus data?')" class=" badge text-bg-danger">Hapus</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>