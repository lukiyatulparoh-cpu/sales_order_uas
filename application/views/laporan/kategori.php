<div class="container-fluid">
    <h3>Laporan Kategori</h3>
    <a href="<?= site_url('laporan/cetak_kategori'); ?>"
    target="_blank"
    class="btn btn-success btn-sm">
        Cetak PDF
    </a>

    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
        </tr>

        <?php $no=1; foreach($data as $d): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->nama_kategori; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>