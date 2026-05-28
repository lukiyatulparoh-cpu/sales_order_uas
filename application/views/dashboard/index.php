
<div class="container-fluid">

    <!-- Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">
            Dashboard
        </h1>

        <span class="text-muted">
            Welcome,
            <?= $this->session->userdata('username'); ?>
        </span>

    </div>

    <!-- CARD -->
    <div class="row">

        <!-- Produk -->
        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card shadow border-0 py-3"
                style="border-radius:20px;">

                <div class="card-body">

                    <div class="row align-items-center">

                        <div class="col">

                            <div class="text-xs font-weight-bold text-uppercase mb-2 text-primary">

                                Total Produk

                            </div>

                            <div class="h3 font-weight-bold text-dark">

                                <?= $total_produk; ?>

                            </div>

                        </div>

                        <div class="col-auto">

                            <i class="fas fa-box fa-2x text-primary"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Pelanggan -->
        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card shadow border-0 py-3"
                style="border-radius:20px;">

                <div class="card-body">

                    <div class="row align-items-center">

                        <div class="col">

                            <div class="text-xs font-weight-bold text-uppercase mb-2 text-success">

                                Total Pelanggan

                            </div>

                            <div class="h3 font-weight-bold text-dark">

                                <?= $total_pelanggan; ?>

                            </div>

                        </div>

                        <div class="col-auto">

                            <i class="fas fa-users fa-2x text-success"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Order -->
        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card shadow border-0 py-3"
                style="border-radius:20px;">

                <div class="card-body">

                    <div class="row align-items-center">

                        <div class="col">

                            <div class="text-xs font-weight-bold text-uppercase mb-2 text-info">

                                Total Order

                            </div>

                            <div class="h3 font-weight-bold text-dark">

                                <?= $total_order; ?>

                            </div>

                        </div>

                        <div class="col-auto">

                            <i class="fas fa-shopping-cart fa-2x text-info"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Pendapatan -->
        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card shadow border-0 py-3"
                style="border-radius:20px;">

                <div class="card-body">

                    <div class="row align-items-center">

                        <div class="col">

                            <div class="text-xs font-weight-bold text-uppercase mb-2 text-danger">

                                Pendapatan

                            </div>

                            <div class="h5 font-weight-bold text-dark">

                                Rp <?= number_format($total_pendapatan,0,',','.'); ?>

                            </div>

                        </div>

                        <div class="col-auto">

                            <i class="fas fa-money-bill-wave fa-2x text-danger"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- CHART -->
    <div class="card shadow border-0 mb-4"
        style="border-radius:20px;">

        <div class="card-header bg-white border-0">

            <h6 class="m-0 font-weight-bold text-dark">

                Grafik Penjualan

            </h6>

        </div>

        <div class="card-body">

            <canvas id="chartDashboard"></canvas>

        </div>

    </div>

</div>
