<div class="container-fluid">

<h1 class="h3 mb-4 font-weight-bold text-gray-800">
    Edit Sales Order
</h1>

<div class="card border-0 shadow-sm"
     style="
     border-radius:20px;
     background:#fffaf5;
     ">

    <div class="card-body p-4">

        <form method="post"
              action="<?= base_url('sales_order/update') ?>">

            <input type="hidden"
                   name="id_order"
                   value="<?= $order->id_order ?>">

            <div class="form-group">

                <label>Kode Order</label>

                <input type="text"
                       value="<?= $order->kode_order ?>"
                       readonly
                       class="form-control"
                       style="
                       border-radius:12px;
                       height:48px;
                       background:#f8f9fa;
                       ">

            </div>

            <div class="form-group">

                <label>Pelanggan</label>

                <select name="id_pelanggan"
                        class="form-control"
                        style="
                        border-radius:12px;
                        height:48px;
                        ">

                    <?php foreach($pelanggan as $p): ?>

                    <option
                        value="<?= $p->id_pelanggan ?>"
                        <?= $p->id_pelanggan == $order->id_pelanggan ? 'selected' : '' ?>>

                        <?= $p->nama_pelanggan ?>

                    </option>

                    <?php endforeach; ?>

                </select>

            </div>

            <div class="form-group">

                <label>Produk</label>

                <select name="id_produk"
                        class="form-control"
                        style="
                        border-radius:12px;
                        height:48px;
                        ">

                    <?php foreach($produk as $p): ?>

                    <option
                        value="<?= $p->id_produk ?>"
                        <?= $p->id_produk == $order->id_produk ? 'selected' : '' ?>>

                        <?= $p->nama_produk ?>

                    </option>

                    <?php endforeach; ?>

                </select>

            </div>

            <div class="form-group">

                <label>Qty</label>

                <input type="number"
                       name="qty"
                       value="<?= $order->qty ?>"
                       class="form-control"
                       style="
                       border-radius:12px;
                       height:48px;
                       ">

            </div>

            <div class="form-group">

                <label>Status</label>

                <select name="status"
                        class="form-control"
                        style="
                        border-radius:12px;
                        height:48px;
                        ">

                    <option value="Draft"
                        <?= $order->status == 'Draft' ? 'selected' : '' ?>>
                        Draft
                    </option>

                    <option value="Dikirim"
                        <?= $order->status == 'Dikirim' ? 'selected' : '' ?>>
                        Dikirim
                    </option>

                    <option value="Selesai"
                        <?= $order->status == 'Selesai' ? 'selected' : '' ?>>
                        Selesai
                    </option>

                    <option value="Dibatalkan"
                        <?= $order->status == 'Dibatalkan' ? 'selected' : '' ?>>
                        Dibatalkan
                    </option>

                </select>

            </div>

            <button type="submit"
                    class="btn mt-3"
                    style="
                    background:#9c6b3f;
                    color:white;
                    border-radius:12px;
                    padding:10px 20px;
                    ">
                Update
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
