
<div class="container-fluid">

    <h1 class="h3 mb-4 font-weight-bold text-gray-800">
        Tambah Sales Order
    </h1>

    <div class="card border-0 shadow-sm"
         style="
         border-radius:20px;
         background:#fffaf5;
         ">

        <div class="card-body p-4">

            <form method="post"
                  action="<?= base_url('sales_order/simpan') ?>">

                <!-- KODE ORDER -->

                <div class="form-group">

                    <label>Kode Order</label>

                    <input type="text"
                           name="kode_order"
                           value="<?= $kode_order ?>"
                           readonly
                           class="form-control"
                           style="
                           border-radius:12px;
                           height:48px;
                           background:#f8f9fa;
                           ">

                </div>

                <!-- PELANGGAN -->

                <div class="form-group">

                    <label>Pelanggan</label>

                    <select name="id_pelanggan"
                            class="form-control"
                            style="
                            border-radius:12px;
                            height:48px;
                            ">

                        <option value="">
                            -- Pilih Pelanggan --
                        </option>

                        <?php foreach($pelanggan as $p) : ?>

                        <option value="<?= $p->id_pelanggan ?>">

                            <?= $p->nama_pelanggan ?>

                        </option>

                        <?php endforeach; ?>

                    </select>

                    <?= form_error(
                        'id_pelanggan',
                        '<small class="text-danger">',
                        '</small>'
                    ); ?>

                </div>

                <!-- PRODUK -->

                <div class="form-group">

                    <label>Produk</label>

                    <select name="id_produk"
                            class="form-control"
                            style="
                            border-radius:12px;
                            height:48px;
                            ">

                        <option value="">
                            -- Pilih Produk --
                        </option>

                        <?php foreach($produk as $p) : ?>

                        <option value="<?= $p->id_produk ?>">

                            <?= $p->nama_produk ?>

                        </option>

                        <?php endforeach; ?>

                    </select>

                    <?= form_error(
                        'id_produk',
                        '<small class="text-danger">',
                        '</small>'
                    ); ?>

                </div>

                <!-- QTY -->

                <div class="form-group">

                    <label>Qty</label>

                    <input type="number"
                           name="qty"
                           class="form-control"
                           placeholder="Masukkan Qty"
                           style="
                           border-radius:12px;
                           height:48px;
                           ">

                    <?= form_error(
                        'qty',
                        '<small class="text-danger">',
                        '</small>'
                    ); ?>

                </div>

                <!-- STATUS OTOMATIS -->

                <div class="form-group">

                    <label>Status</label>

                    <input type="text"
                           class="form-control"
                           value="Draft"
                           readonly
                           style="
                           border-radius:12px;
                           height:48px;
                           background:#f8f9fa;
                           font-weight:bold;
                           ">

                </div>

                <!-- BUTTON -->

                <button type="submit"
                        class="btn mt-3"
                        style="
                        background:#9c6b3f;
                        color:white;
                        border-radius:12px;
                        padding:10px 20px;
                        ">

                        Simpan

                </button>

                <a href="<?= base_url('sales_order') ?>"
                   class="btn btn-light mt-3"
                   style="
                   border-radius:12px;
                   padding:10px 20px;
                   ">

                   Kembali

                </a>

            </form>

        </div>

    </div>

</div>
