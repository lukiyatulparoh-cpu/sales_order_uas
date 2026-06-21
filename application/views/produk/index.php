
<div class="container-fluid">

    <!-- TITLE -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

    <h1 class="h3 text-gray-800 font-weight-bold">
        Data Produk
    </h1>

    <div>

        <a href="<?= base_url('produk/tambah') ?>"
           class="btn shadow-sm mr-2"
           style="
           background:#9c6b3f;
           color:white;
           border-radius:12px;
           padding:10px 18px;
           ">
           <i class="fas fa-plus"></i>
           Tambah Produk
        </a>

        <a href="<?= base_url('produk/tambah_stok') ?>"
           class="btn shadow-sm"
           style="
           background:#28a745;
           color:white;
           border-radius:12px;
           padding:10px 18px;
           ">
           <i class="fas fa-boxes"></i>
           Tambah Stok
        </a>

    </div>

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
                                class="btn btn-circle btn-sm"
                                style="background:#f6c23e;color:white;"
                                title="Edit">

                                <i class="fas fa-edit"></i>

                                </a>

                                <a href="<?= base_url('produk/hapus/'.$p->id_produk) ?>"
                                class="btn btn-circle btn-sm"
                                style="background:#e74a3b;color:white;"
                                title="Hapus"
                                onclick="return confirm('Yakin hapus data ini?')">

                                <i class="fas fa-trash"></i>

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
