<div class="container">
    <h2>Tambah Pesanan</h2>
    <form action="?halaman=simpanPesanan" method="post">
        <div class="row">
            <div class="col-3">
                Menu :
                <input type="text" name="menu" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Jumlah :
                <input type="text" name="jumlah" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Harga :
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp.</span>
                    <input type="text" class="form-control" name="harga">
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