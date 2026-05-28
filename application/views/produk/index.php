
<div class="container-fluid">

    <!-- TITLE -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 text-gray-800 font-weight-bold">
            Data Produk
        </h1>

        <a href="<?= base_url('produk/tambah') ?>" 
           class="btn shadow-sm"
           style="
           background:#9c6b3f;
           color:white;
           border-radius:12px;
           padding:10px 18px;
           ">
           + Tambah Produk
        </a>
    </div>

    <!-- CARD -->
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
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php 
                        $no = 1;
                        foreach($produk as $p) :
                        ?>

                        <tr style="vertical-align:middle;">

                            <td><?= $no++ ?></td>

                            <td>
                                <span class="badge badge-light p-2"
                                      style="
                                      background:#f4e7da;
                                      color:#9c6b3f;
                                      border-radius:8px;
                                      ">
                                      <?= $p->kode_produk ?>
                                </span>
                            </td>

                            <td class="font-weight-bold">
                                <?= $p->nama_produk ?>
                            </td>

                            <td>
                                Rp <?= number_format($p->harga,0,',','.') ?>
                            </td>

                            <td>
                                <span class="badge badge-success p-2">
                                    <?= $p->stok ?>
                                </span>
                            </td>

                            <td class="text-center">

                                <a href="<?= base_url('produk/edit/'.$p->id_produk) ?>" 
                                   class="btn btn-sm"
                                   style="
                                   background:#f0c674;
                                   color:white;
                                   border-radius:10px;
                                   ">
                                   Edit
                                </a>

                                <a href="<?= base_url('produk/hapus/'.$p->id_produk) ?>" 
                                   class="btn btn-sm"
                                   style="
                                   background:#d96c6c;
                                   color:white;
                                   border-radius:10px;
                                   "
                                   onclick="return confirm('Yakin hapus data?')">
                                   Hapus
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
