
<style>

@media print {

    body * {
        visibility: hidden;
    }

    #area-cetak,
    #area-cetak * {
        visibility: visible;
    }

    #area-cetak {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
    }

    .no-print {
        display: none !important;
    }

}

</style>

<div class="container-fluid">

    <h1 class="h3 mb-4 font-weight-bold"
        style="color:#7f5539;">
        Laporan Penjualan Periode
    </h1>

    <!-- FILTER -->
    <div class="card shadow border-0 mb-4 no-print">

        <div class="card-body">

            <form method="GET">

                <div class="row">

                    <div class="col-md-3">

                        <label>
                            Tanggal Awal
                        </label>

                        <input
                            type="date"
                            name="tanggal_awal"
                            class="form-control"
                            value="<?= $this->input->get('tanggal_awal') ?>">

                    </div>

                    <div class="col-md-3">

                        <label>
                            Tanggal Akhir
                        </label>

                        <input
                            type="date"
                            name="tanggal_akhir"
                            class="form-control"
                            value="<?= $this->input->get('tanggal_akhir') ?>">

                    </div>

                    <div class="col-md-4">

                        <label>&nbsp;</label>

                        <div>

                            <button
                                type="submit"
                                class="btn btn-primary">

                                <i class="fas fa-search"></i>
                                Filter

                            </button>

                            <a
                                href="<?= base_url('laporan/periode') ?>"
                                class="btn btn-secondary">

                                <i class="fas fa-sync"></i>
                                Reset

                            </a>

                            <button
                                type="button"
                                onclick="window.print()"
                                class="btn btn-success">

                                <i class="fas fa-print"></i>
                                Cetak

                            </button>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

    <!-- AREA CETAK -->
    <div id="area-cetak">

        <div class="text-center mb-4">

            <h3
                style="
                    color:#7f5539;
                    font-weight:bold;
                ">

                LAPORAN PENJUALAN PERIODE

            </h3>

            <?php if(
                $this->input->get('tanggal_awal')
                &&
                $this->input->get('tanggal_akhir')
            ): ?>

                <p>

                    Periode :
                    <?= date(
                        'd-m-Y',
                        strtotime(
                            $this->input->get('tanggal_awal')
                        )
                    ) ?>

                    s/d

                    <?= date(
                        'd-m-Y',
                        strtotime(
                            $this->input->get('tanggal_akhir')
                        )
                    ) ?>

                </p>

            <?php endif; ?>

            <p>

                Tanggal Cetak :
                <?= date('d-m-Y') ?>

            </p>

        </div>

        <div class="card shadow border-0">

            <div class="card-body">

                <div class="table-responsive">

                    <table
                        class="table table-bordered table-hover">

                        <thead
                            style="
                                background:#f8f5f2;
                                color:#7f5539;
                            ">

                            <tr>

                                <th>Kode Order</th>
                                <th>Tanggal</th>
                                <th>Pelanggan</th>
                                <th>Produk</th>
                                <th>Sales</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Status</th>

                            </tr>

                        </thead>

                        <tbody>

                        <?php
                        $grand_total = 0;
                        ?>

                        <?php foreach($laporan as $row): ?>

                        <?php
                        $grand_total +=
                            $row->total_harga;
                        ?>

                        <tr>

                            <td>
                                <?= $row->kode_order ?>
                            </td>

                            <td>
                                <?= date(
                                    'd-m-Y',
                                    strtotime(
                                        $row->tanggal
                                    )
                                ) ?>
                            </td>

                            <td>
                                <?= $row->nama_pelanggan ?>
                            </td>

                            <td>
                                <?= $row->nama_produk ?>
                            </td>

                            <td>
                                <?= $row->nama_sales ?>
                            </td>

                            <td>
                                <?= $row->qty ?>
                            </td>

                            <td>

                                Rp
                                <?= number_format(
                                    $row->total_harga,
                                    0,
                                    ',',
                                    '.'
                                ) ?>

                            </td>

                            <td>
                                <?= $row->status ?>
                            </td>

                        </tr>

                        <?php endforeach; ?>

                        </tbody>

                        <tfoot>

                            <tr
                                style="
                                    background:#f8f5f2;
                                    font-weight:bold;
                                ">

                                <td colspan="6">

                                    Total Penjualan

                                </td>

                                <td colspan="2">

                                    Rp
                                    <?= number_format(
                                        $grand_total,
                                        0,
                                        ',',
                                        '.'
                                    ) ?>

                                </td>

                            </tr>

                        </tfoot>

                    </table>

                </div>

            </div>

        </div>

        <br><br>

        <div
            style="
                width:300px;
                float:right;
                text-align:center;
            ">

            <p>
                Tangerang,
                <?= date('d-m-Y') ?>
            </p>

            <br><br><br>

            <p>
                ___________________
            </p>

            <p>
                Manager
            </p>

        </div>

    </div>

</div>