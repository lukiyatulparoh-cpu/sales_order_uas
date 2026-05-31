
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
        Laporan Produk
    </h1>

    <!-- FILTER -->
    <div class="card shadow border-0 mb-4 no-print">

        <div class="card-body">

            <form method="GET">

                <div class="row">

                    <div class="col-md-5">

                        <label>
                            Filter Produk
                        </label>

                        <select
                            name="id_produk"
                            class="form-control">

                            <option value="">
                                Semua Produk
                            </option>

                            <?php foreach($list_produk as $pr): ?>

                            <option
                                value="<?= $pr->id_produk ?>"
                                <?= ($this->input->get('id_produk') == $pr->id_produk) ? 'selected' : '' ?>>

                                <?= $pr->kode_produk ?>
                                -
                                <?= $pr->nama_produk ?>

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
                                href="<?= base_url('laporan/produk') ?>"
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

                LAPORAN PRODUK

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
                        class="table table-hover table-bordered">

                        <thead
                            style="
                                background:#f8f5f2;
                                color:#7f5539;
                            ">

                            <tr>

                                <th>Kode Produk</th>

                                <th>Nama Produk</th>

                                <th>Harga</th>

                                <th>Stok</th>

                                <th>Qty Terjual</th>

                                <th>Total Penjualan</th>

                            </tr>

                        </thead>

                        <tbody>

                        <?php
                        $grand_total = 0;
                        ?>

                        <?php foreach($produk as $p): ?>

                        <?php
                        $grand_total += $p->total_penjualan;
                        ?>

                        <tr>

                            <td>
                                <?= $p->kode_produk ?>
                            </td>

                            <td>
                                <?= $p->nama_produk ?>
                            </td>

                            <td>

                                Rp
                                <?= number_format(
                                    $p->harga,
                                    0,
                                    ',',
                                    '.'
                                ) ?>

                            </td>

                            <td>
                                <?= $p->stok ?>
                            </td>

                            <td>
                                <?= $p->qty_terjual ?>
                            </td>

                            <td>

                                Rp
                                <?= number_format(
                                    $p->total_penjualan,
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

                                <td colspan="5">

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
