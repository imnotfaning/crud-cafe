<div class="container">
    <h2>Daftar Menu</h2>
    <a href="?halaman=tambahMenu" class="btn btn-success">Tambah</a>
    <table class="table">
        <thead>
            <th>Id</th>
            <th>Jenis</th>
            <th>Nama</th>
            <th>Harga</th>
            <th colspan="2">Aksi</th>
        </thead>
        <tbody>
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM menu");
            foreach ($sql as $data) {
            ?>
                <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['jenis'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td>Rp. <?= $data['harga'] ?></td>
                    <td><a href="?halaman=ubahMenu&id=<?= $data['id'] ?>" class="badge text-bg-primary">Ubah</a></td>
                    <td><a href="?halaman=hapusMenu&id=<?= $data['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')" class="badge text-bg-danger">Hapus</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>