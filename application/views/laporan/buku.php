<div class="container-fluid">
    <h3>Laporan Buku</h3>

    <form method="get">

    <select name="penulis" class="form-control mb-2">

        <option value="">-- Pilih Penulis --</option>

        <?php foreach($list_penulis as $p): ?>

        <option value="<?= $p->penulis; ?>"
        <?= ($penulis == $p->penulis) ? 'selected' : ''; ?>>

            <?= $p->penulis; ?>

        </option>

        <?php endforeach; ?>

    </select>

    <button type="submit" class="btn btn-primary btn-sm">
        Filter
    </button>

    <a href="<?= site_url('laporan/buku'); ?>"
    class="btn btn-secondary btn-sm">
        Reset
    </a>

</form>

    <br>

    <a href="<?= site_url('laporan/cetak_buku?penulis='. $penulis); ?>"
    target="_blank"
    class="btn btn-success btn-sm">
        Cetak PDF
    </a>

    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Stok</th>
            <th>Lokasi Rak</th>
        </tr>

        <?php $no=1; foreach($data as $d): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->kode_buku; ?></td>
            <td><?= $d->judul; ?></td>
            <td><?= $d->penulis; ?></td>
            <td><?= $d->penerbit; ?></td>
            <td><?= $d->tahun; ?></td>
            <td><?= $d->stok; ?></td>
            <td><?= $d->lokasi_rak; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>