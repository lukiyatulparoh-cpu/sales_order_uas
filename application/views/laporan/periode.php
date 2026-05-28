
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">
        Laporan Periode
    </h1>

    <div class="card shadow border-0 mb-4">

        <div class="card-body">

            <form method="get">

                <div class="row">

                    <div class="col-md-4">

                        <label>Tanggal Awal</label>

                        <input type="date"
                            name="tanggal_awal"
                            class="form-control">

                    </div>

                    <div class="col-md-4">

                        <label>Tanggal Akhir</label>

                        <input type="date"
                            name="tanggal_akhir"
                            class="form-control">

                    </div>

                    <div class="col-md-4 d-flex align-items-end">

                        <button class="btn btn-primary btn-block">

                            Filter Data

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>



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

                            <th>Kode Order</th>
                            <th>Tanggal</th>
                            <th>ID Sales</th>
                            <th>Sales</th>
                            <th>Pelanggan</th>
                            <th>Produk</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Status</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach($sales as $s): ?>

                        <tr>

                            <td><?= $s->kode_order; ?></td>

                            <td><?= $s->tanggal; ?></td>

                            <td><?= $s->id_sales; ?></td>

                            <td><?= $s->nama_sales; ?></td>

                            <td><?= $s->pelanggan; ?></td>

                            <td><?= $s->produk; ?></td>

                            <td><?= $s->qty; ?></td>

                            <td>
                                Rp <?= number_format($s->total,0,',','.'); ?>
                            </td>

                            <td>

                                <span class="badge badge-success">

                                    <?= $s->status; ?>

                                </span>

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
