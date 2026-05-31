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

    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 font-weight-bold"
            style="color:#7f5539;">
            Laporan Sales
        </h1>

    </div>

    <!-- FILTER -->
    <div class="card shadow border-0 mb-4 no-print">

        <div class="card-body">

            <form method="GET">

                <div class="row">

                    <div class="col-md-5">

                        <label>
                            Filter Sales
                        </label>

                        <select
                            name="id_sales"
                            class="form-control">

                            <option value="">
                                Semua Sales
                            </option>

                            <?php foreach($list_sales as $s): ?>

                            <option
                                value="<?= $s->id_sales ?>"
                                <?= ($this->input->get('id_sales') == $s->id_sales) ? 'selected' : '' ?>>

                                <?= $s->id_sales ?>
                                -
                                <?= $s->nama_sales ?>

                            </option>

                            <?php endforeach; ?>

                        </select>

                    </div>

                    <div class="col-md-5">

                        <label>&nbsp;</label>

                        <div>

                            <button
                                type="submit"
                                class="btn btn-primary">

                                <i class="fas fa-search"></i>
                                Filter

                            </button>

                            <a
                                href="<?= base_url('laporan/sales') ?>"
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

                LAPORAN SALES

            </h3>

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

                                <th>ID Sales</th>

                                <th>Nama Sales</th>

                                <th>Jumlah Order</th>

                                <th>Total Qty</th>

                                <th>Total Penjualan</th>

                            </tr>

                        </thead>

                        <tbody>

                        <?php
                        $grand_total = 0;
                        ?>

                        <?php foreach($sales as $s): ?>

                        <?php
                        $grand_total += $s->total_penjualan;
                        ?>

                        <tr>

                            <td>
                                <?= $s->id_sales ?>
                            </td>

                            <td>
                                <?= $s->nama_sales ?>
                            </td>

                            <td>
                                <?= $s->jumlah_order ?>
                            </td>

                            <td>
                                <?= $s->total_qty ?>
                            </td>

                            <td>

                                Rp
                                <?= number_format(
                                    $s->total_penjualan,
                                    0,
                                    ',',
                                    '.'
                                ) ?>

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

                                <td colspan="4">

                                    Total Keseluruhan

                                </td>

                                <td>

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