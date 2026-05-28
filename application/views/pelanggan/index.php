
<div class="container-fluid">

    <!-- TITLE -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        
        <h1 class="h3 text-gray-800 font-weight-bold">
            Data Pelanggan
        </h1>

        <a href="<?= base_url('pelanggan/tambah') ?>" 
           class="btn shadow-sm"
           style="
           background:#9c6b3f;
           color:white;
           border-radius:12px;
           padding:10px 18px;
           ">
           + Tambah Pelanggan
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
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php 
                        $no = 1;
                        foreach($pelanggan as $p) :
                        ?>

                        <tr>

                            <td><?= $no++ ?></td>

                            <td class="font-weight-bold">
                                <?= $p->nama_pelanggan ?>
                            </td>

                            <td>
                                <?= $p->alamat ?>
                            </td>

                            <td>
                                <?= $p->telepon ?>
                            </td>

                            <td class="text-center">

                                <a href="<?= base_url('pelanggan/edit/'.$p->id_pelanggan) ?>" 
                                   class="btn btn-sm"
                                   style="
                                   background:#f0c674;
                                   color:white;
                                   border-radius:10px;
                                   ">
                                   Edit
                                </a>

                                <a href="<?= base_url('pelanggan/hapus/'.$p->id_pelanggan) ?>" 
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
