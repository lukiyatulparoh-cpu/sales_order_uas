<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">
        Restok Produk
    </h1>

    <div class="card shadow mb-4">

        <div class="card-body">

            <form method="post"
                  action="<?= base_url('produk/simpan_stok') ?>">

                <!-- PRODUK -->

                <div class="form-group">

                    <label>Produk</label>

                    <select
                        name="id_produk"
                        id="id_produk"
                        class="form-control"
                        required>

                        <option value="">
                            -- Pilih Produk --
                        </option>

                        <?php foreach($produk as $p): ?>

                            <option
                                value="<?= $p->id_produk ?>"
                                data-stok="<?= $p->stok ?>">

                                <?= $p->kode_produk ?>
                                -
                                <?= $p->nama_produk ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <!-- STOK SAAT INI -->

                <div class="form-group">

                    <label>Stok Saat Ini</label>

                    <input
                        type="text"
                        id="stok_sekarang"
                        class="form-control"
                        readonly
                        style="
                        background:#f8f9fa;
                        border-radius:10px;
                        ">

                </div>

                <!-- TAMBAH STOK -->

                <div class="form-group">

                    <label>Jumlah Restok</label>

                    <input
                        type="number"
                        name="jumlah_stok"
                        min="1"
                        class="form-control"
                        placeholder="Masukkan jumlah stok"
                        required>

                </div>

                <button
                    type="submit"
                    class="btn btn-success">

                    <i class="fas fa-plus-circle"></i>
                    Simpan Restok

                </button>

                <a href="<?= base_url('produk') ?>"
                   class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

<script>

document
.getElementById('id_produk')
.addEventListener('change', function(){

    let stok =
        this.options[
            this.selectedIndex
        ].getAttribute('data-stok');

    document
    .getElementById('stok_sekarang')
    .value = stok;

});

</script>