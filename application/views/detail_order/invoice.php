
<style>

@media print {

    /* SEMBUNYIKAN SIDEBAR & NAVBAR */
    .sidebar,
    .navbar-nav,
    .topbar,
    .d-print-none,
    .no-print,
    .navbar,
    .nav-item {

        display: none !important;
    }

    /* FULL HALAMAN */
    #content-wrapper,
    .content-wrapper,
    .container-fluid,
    #content {

        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    body {

        background: white !important;
    }

    /* HILANGKAN SHADOW CARD */
    .card {

        border: none !important;
        box-shadow: none !important;
    }

}


@media screen {

    .pelanggan-kanan {

        text-align: right;
    }

}

</style>


</style>

<div class="container-fluid">

    <h1 class="h3 mb-4 font-weight-bold text-gray-800">
        Invoice Sales Order
    </h1>

    <div class="card border-0 shadow-sm"
         style="
         border-radius:20px;
         background:#fffaf5;
         ">

        <div class="card-body p-4">

            <!-- HEADER -->
            <div class="row mb-4">

                <div class="col-md-6">

                    <h3 class="font-weight-bold"
                        style="color:#9c6b3f;">

                        PT MAJU JAYA

                    </h3>

                    <p class="mb-0">
                        Sistem Sales Order
                    </p>

                </div>

                <div class="col-md-6 text-right">

                    <h4 class="font-weight-bold">
                        INVOICE
                    </h4>

                    <h5 style="color:#9c6b3f;">
                        <?= $invoice->kode_order ?>
                    </h5>

                </div>

            </div>

            <hr>

            <!-- INFORMASI ORDER -->
            <div class="row">

                <div class="col-md-6">

                    <h5 class="font-weight-bold mb-3">
                        Informasi Order
                    </h5>

                    <table class="table table-borderless">

                        <tr>
                            <th width="150">Kode Order</th>
                            <td>
                                : <?= $invoice->kode_order ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Tanggal</th>
                            <td>
                                : <?= $invoice->tanggal ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Sales</th>
                            <td>
                                : <?= $invoice->nama_sales ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>

                                :

                                <?php if($invoice->status == 'Draft') : ?>

                                    <span class="badge badge-secondary p-2">
                                        Draft
                                    </span>

                                <?php elseif($invoice->status == 'Dikirim') : ?>

                                    <span class="badge badge-primary p-2">
                                        Dikirim
                                    </span>

                                <?php elseif($invoice->status == 'Selesai') : ?>

                                    <span class="badge badge-success p-2">
                                        Selesai
                                    </span>

                                <?php else : ?>

                                    <span class="badge badge-danger p-2">
                                        Dibatalkan
                                    </span>

                                <?php endif; ?>

                            </td>
                        </tr>

                    </table>

                </div>

                <!-- DATA PELANGGAN -->
                <div class="col-md-6">

                    <h5 class="font-weight-bold mb-3">
                        Data Pelanggan
                    </h5>

                    <table class="table table-borderless">

                        <tr>
                            <th width="150">Nama</th>
                            <td>
                                : <?= $invoice->nama_pelanggan ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Telepon</th>
                            <td>
                                : <?= $invoice->telepon ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Alamat</th>
                            <td>
                                : <?= $invoice->alamat ?>
                            </td>
                        </tr>

                    </table>

                </div>

            </div>

            <hr>

            <!-- DETAIL PRODUK -->
            <h5 class="font-weight-bold mb-3">
                Detail Produk
            </h5>

            <div class="table-responsive">

                <table class="table table-bordered">

                    <thead>

                        <tr style="background:#f3e5d8;">

                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Total</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                <?= $invoice->nama_produk ?>
                            </td>

                            <td>
                                Rp <?= number_format($invoice->harga,0,',','.') ?>
                            </td>

                            <td>
                                <?= $invoice->qty ?>
                            </td>

                            <td>
                                Rp <?= number_format($invoice->total_harga,0,',','.') ?>
                            </td>

                        </tr>

                    </tbody>

                    <tfoot>

                        <tr>

                            <th colspan="3" class="text-right">
                                Grand Total
                            </th>

                            <th>
                                Rp <?= number_format($invoice->total_harga,0,',','.') ?>
                            </th>

                        </tr>

                    </tfoot>

                </table>

            </div>

            <!-- FOOTER -->
            <div class="row mt-5">

                <div class="col-md-6">

                    <p>
                        Terima kasih telah melakukan pemesanan.
                    </p>

                </div>

                <div class="col-md-6"
                    style="text-align:right;">


                    <p>
                        Tangerang,
                        <?= date('d-m-Y') ?>
                    </p>

                    <br><br><br>

                    <p class="font-weight-bold">
                        <?= $invoice->nama_sales ?>
                    </p>

                </div>

            </div>

            <!-- BUTTON -->
            <div class="d-print-none mt-4">

                <a href="<?= base_url('detail_order') ?>"
                   class="btn"
                   style="
                   background:#9c6b3f;
                   color:white;
                   border-radius:12px;
                   padding:10px 20px;
                   ">

                   Kembali

                </a>

                <button onclick="window.print()"
                        class="btn btn-success"
                        style="
                        border-radius:12px;
                        padding:10px 20px;
                        ">

                    Cetak Invoice

                </button>

            </div>

        </div>

    </div>

</div>