
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 text-gray-800 font-weight-bold">
            Detail Order
        </h1>

    </div>

    <div class="card border-0 shadow-sm"
         style="
         border-radius:20px;
         background:#fffaf5;
         ">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr style="color:#9c6b3f;">

                            <th>Kode Order</th>
                            <th>Nama Pelanggan</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Invoice</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach($detail_order as $d) : ?>

                        <tr>

                            <td>
                                <?= $d->kode_order ?>
                            </td>

                            <td>
                                <?= $d->nama_pelanggan ?>
                            </td>

                            <td>
                                Rp <?= number_format($d->total_harga,0,',','.') ?>
                            </td>

                            <td>

                                <?php if($d->status == 'Draft') : ?>

                                    <span class="badge badge-secondary p-2">
                                        Draft
                                    </span>

                                <?php elseif($d->status == 'Dikirim') : ?>

                                    <span class="badge badge-primary p-2">
                                        Dikirim
                                    </span>

                                <?php elseif($d->status == 'Selesai') : ?>

                                    <span class="badge badge-success p-2">
                                        Selesai
                                    </span>

                                <?php else : ?>

                                    <span class="badge badge-danger p-2">
                                        Dibatalkan
                                    </span>

                                <?php endif; ?>

                            </td>

                            <td>

                                <a href="<?= base_url('detail_order/invoice/'.$d->id_order) ?>"
                                   class="btn btn-sm"
                                   style="
                                   background:#9c6b3f;
                                   color:white;
                                   border-radius:10px;
                                   ">

                                   Lihat Invoice

                                </a>

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
