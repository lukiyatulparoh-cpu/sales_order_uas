<div class="container-fluid">
    <h3>Laporan Anggota</h3>
    <a href="<?= site_url('laporan/cetak_anggota'); ?>"
    target="_blank"
    class="btn btn-success btn-sm">
        Cetak PDF
    </a>

    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Tanggal Daftar</th>
        </tr>

        <?php $no=1; foreach($data as $d): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->nama; ?></td>
            <td><?= $d->alamat; ?></td>
            <td><?= $d->telp; ?></td>
            <td><?= $d->email; ?></td>
            <td><?= $d->tgl_daftar; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>