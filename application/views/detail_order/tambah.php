
<div class="container-fluid">

    <h1 class="h3 mb-4 font-weight-bold text-gray-800">
        Tambah Detail Order
    </h1>

    <div class="card border-0 shadow-sm"
         style="
         border-radius:20px;
         background:#fffaf5;
         ">

        <div class="card-body p-4">

            <form method="post"
                  action="<?= base_url('detail_order/simpan') ?>">

                <!-- SALES ORDER -->

                <div class="form-group">

                    <label>Sales Order</label>

                    <select name="id_order"
                            class="form-control"
                            style="
                            border-radius:12px;
                            height:48px;
                            ">

                        <option value="">
                            -- Pilih Order --
                        </option>

                        <?php foreach($sales_order as $s) : ?>

                        <option value="<?= $s->id_order ?>">

                            <?= $s->kode_order ?>

                        </option>

                        <?php endforeach; ?>

                    </select>

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

                <a href="<?= base_url('detail_order') ?>"
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