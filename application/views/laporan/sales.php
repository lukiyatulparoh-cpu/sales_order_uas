
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">
        Laporan Per Sales
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

                            <th>ID Sales</th>
                            <th>Nama Sales</th>
                            <th>Jumlah Order</th>
                            <th>Produk Terjual</th>
                            <th>Total Penjualan</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach($sales as $s): ?>

                        <tr>

                            <td><?= $s->id_sales; ?></td>

                            <td><?= $s->nama_sales; ?></td>

                            <td><?= $s->jumlah_order; ?></td>

                            <td><?= $s->produk_terjual; ?></td>

                            <td>
                                Rp <?= number_format($s->total_penjualan,0,',','.'); ?>
                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
