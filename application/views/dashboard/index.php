<div class="container-fluid">

    <h1 class="h3 mb-4 font-weight-bold text-gray-800">
        Dashboard
    </h1>

    <!-- ========================= -->
    <!-- CARD STATISTIK -->
    <!-- ========================= -->

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card border-left-primary shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Produk
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $total_produk ?>
                            </div>

                        </div>

                        <div class="col-auto">
                            <i class="fas fa-box fa-2x text-gray-300"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card border-left-success shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Pelanggan
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $total_pelanggan ?>
                            </div>

                        </div>

                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card border-left-info shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Sales Order
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $total_order ?>
                            </div>

                        </div>

                        <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card border-left-warning shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Pendapatan
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                Rp <?= number_format($total_pendapatan,0,',','.') ?>

                            </div>

                        </div>

                        <div class="col-auto">
                            <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- ========================= -->
    <!-- STATUS ORDER -->
    <!-- ========================= -->

    <div class="row">

        <div class="col-md-3 mb-3">

            <div class="card shadow border-left-secondary">

                <div class="card-body text-center">

                    <h6>Draft</h6>

                    <h3><?= $draft ?></h3>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-3">

            <div class="card shadow border-left-primary">

                <div class="card-body text-center">

                    <h6>Dikirim</h6>

                    <h3><?= $dikirim ?></h3>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-3">

            <div class="card shadow border-left-success">

                <div class="card-body text-center">

                    <h6>Selesai</h6>

                    <h3><?= $selesai ?></h3>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-3">

            <div class="card shadow border-left-danger">

                <div class="card-body text-center">

                    <h6>Dibatalkan</h6>

                    <h3><?= $dibatalkan ?></h3>

                </div>

            </div>

        </div>

    </div>

    <!-- ========================= -->
    <!-- PRODUK TERLARIS -->
    <!-- ========================= -->

    <div class="card shadow mb-4">

        <div class="card-header">

            <h6 class="m-0 font-weight-bold text-primary">
                Produk Terlaris
            </h6>

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>Produk</th>
                        <th>Total Terjual</th>

                    </tr>

                </thead>

                <tbody>

                    <?php foreach($produk_terlaris as $p): ?>

                    <tr>

                        <td><?= $p->nama_produk ?></td>

                        <td><?= $p->total_terjual ?></td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

    <div class="row">

        <!-- PRODUK TERBARU -->

        <div class="col-lg-6">

            <div class="card shadow mb-4">

                <div class="card-header">

                    <h6 class="m-0 font-weight-bold text-primary">
                        Produk Terbaru
                    </h6>

                </div>

                <div class="card-body">

                    <table class="table table-sm">

                        <?php foreach($produk_terbaru as $p): ?>

                        <tr>

                            <td><?= $p->kode_produk ?></td>

                            <td><?= $p->nama_produk ?></td>

                        </tr>

                        <?php endforeach; ?>

                    </table>

                </div>

            </div>

        </div>

        <!-- PELANGGAN TERBARU -->

        <div class="col-lg-6">

            <div class="card shadow mb-4">

                <div class="card-header">

                    <h6 class="m-0 font-weight-bold text-success">
                        Pelanggan Terbaru
                    </h6>

                </div>

                <div class="card-body">

                    <table class="table table-sm">

                        <?php foreach($pelanggan_terbaru as $p): ?>

                        <tr>

                            <td><?= $p->id_pelanggan ?></td>

                            <td><?= $p->nama_pelanggan ?></td>

                        </tr>

                        <?php endforeach; ?>

                    </table>

                </div>

            </div>

        </div>

    </div>

    <!-- ========================= -->
    <!-- ORDER TERBARU -->
    <!-- ========================= -->

    <div class="card shadow">

        <div class="card-header">

            <h6 class="m-0 font-weight-bold text-info">
                Sales Order Terbaru
            </h6>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead>

                        <tr>

                            <th>Kode Order</th>
                            <th>Pelanggan</th>
                            <th>Produk</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Status</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach($order_terbaru as $o): ?>

                        <tr>

                            <td><?= $o->kode_order ?></td>

                            <td><?= $o->nama_pelanggan ?></td>

                            <td><?= $o->nama_produk ?></td>

                            <td><?= $o->qty ?></td>

                            <td>
                                Rp <?= number_format($o->total_harga,0,',','.') ?>
                            </td>

                            <td><?= $o->status ?></td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>