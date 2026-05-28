
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 text-gray-800 font-weight-bold">
            Sales Order
        </h1>

        <?php if($this->session->userdata('role') == 'sales') : ?>

        <a href="<?= base_url('sales_order/tambah') ?>" 
           class="btn shadow-sm"
           style="
           background:#9c6b3f;
           color:white;
           border-radius:12px;
           padding:10px 18px;
           ">
           + Tambah Order
        </a>

        <?php endif; ?>

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

                            <th>Kode</th>
                            <th>Tanggal</th>
                            <th>Sales</th>
                            <th>Pelanggan</th>
                            <th>Produk</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach($sales_order as $s) : ?>

                        <tr>

                            <td>
                                <?= $s->kode_order ?>
                            </td>

                            <td>
                                <?= $s->tanggal ?>
                            </td>

                            <td>
                                <?= $s->nama_sales ?>
                            </td>

                            <td>
                                <?= $s->nama_pelanggan ?>
                            </td>

                            <td>
                                <?= $s->nama_produk ?>
                            </td>

                            <td>
                                <?= $s->qty ?>
                            </td>

                            <td>
                                Rp <?= number_format($s->total_harga,0,',','.') ?>
                            </td>

                            <!-- STATUS -->

                            <td>

                            <?php if($this->session->userdata('role') == 'admin') : ?>

                                <form method="post"
                                      action="<?= base_url('sales_order/update_status') ?>">

                                    <input type="hidden"
                                           name="id_order"
                                           value="<?= $s->id_order ?>">

                                    <select name="status"
                                            class="form-control form-control-sm"
                                            onchange="this.form.submit()"
                                            style="
                                            border-radius:10px;
                                            border:1px solid #d6b08c;
                                            ">

                                        <option value="Draft"
                                            <?= $s->status == 'Draft' ? 'selected' : '' ?>>
                                            Draft
                                        </option>

                                        <option value="Dikirim"
                                            <?= $s->status == 'Dikirim' ? 'selected' : '' ?>>
                                            Dikirim
                                        </option>

                                        <option value="Selesai"
                                            <?= $s->status == 'Selesai' ? 'selected' : '' ?>>
                                            Selesai
                                        </option>

                                        <option value="Dibatalkan"
                                            <?= $s->status == 'Dibatalkan' ? 'selected' : '' ?>>
                                            Dibatalkan
                                        </option>

                                    </select>

                                </form>

                            <?php else : ?>

                                <span class="badge badge-info p-2">
                                    <?= $s->status ?>
                                </span>

                            <?php endif; ?>

                            </td>

                            <!-- AKSI -->
                            <td>

                                <?php if($this->session->userdata('role') == 'admin') : ?>

                                <a href="<?= base_url('sales_order/hapus/'.$s->id_order) ?>" 
                                class="btn btn-sm mb-2"
                                style="
                                background:#d96c6c;
                                color:white;
                                border-radius:10px;
                                display:block;
                                " 
                                onclick="return confirm('Yakin hapus data?')">

                                Hapus

                                </a>

                                <a href="<?= base_url('sales_order/edit/'.$s->id_order) ?>"
                                class="btn btn-warning btn-sm"
                                style="
                                border-radius:10px;
                                display:block;
                                ">

                                Edit

                                </a>

                                <?php endif; ?>

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
