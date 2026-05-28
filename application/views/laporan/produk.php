
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">
        Laporan Produk
    </h1>

    <div class="card shadow border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover table-bordered">

                    <thead
                        style="
                            background:#f8f5f2;
                            color:#7f5539;
                        ">

                        <tr>

                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Qty Terjual</th>
                            <th>Total Penjualan</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach($produk as $p): ?>

                        <tr>

                            <td><?= $p->kode_produk; ?></td>

                            <td><?= $p->nama_produk; ?></td>

                            <td>
                                Rp <?= number_format($p->harga,0,',','.'); ?>
                            </td>

                            <td><?= $p->qty_terjual; ?></td>

                            <td>
                                Rp <?= number_format($p->total_penjualan,0,',','.'); ?>
                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
