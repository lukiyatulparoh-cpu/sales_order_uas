<div class="container-fluid">

    <h2 class="h3 mb-4 text-gray-800">
        Tambah Peminjaman
    </h2>

    <div class="card shadow">

        <div class="card-body">

            <form method="post" action="<?= site_url('peminjaman/simpan'); ?>">

                <!-- Anggota -->
                <div class="form-group mb-3">

                    <label>Anggota</label>

                    <select name="anggota_id"
                            class="form-control"
                            required>

                        <option value="">
                            -- Pilih Anggota --
                        </option>

                        <?php foreach($anggota as $a): ?>

                            <option value="<?= $a->id; ?>">
                                <?= $a->nama; ?>
                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <!-- Buku -->
                <div class="form-group mb-3">

                    <label>Buku</label>

                    <select name="buku_id"
                            class="form-control"
                            required>

                        <option value="">
                            -- Pilih Buku --
                        </option>

                        <?php foreach($buku as $b): ?>

                            <option value="<?= $b->id_buku; ?>">
                                <?= $b->judul; ?>
                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <!-- Tanggal Jatuh Tempo -->
                <div class="form-group mb-3">

                    <label>Tanggal Jatuh Tempo</label>

                    <input type="date"
                           name="tanggal_jatuh_tempo"
                           class="form-control"
                           required>

                </div>

                <!-- Button -->
                <button type="submit"
                        class="btn btn-primary">

                    Simpan

                </button>

                <a href="<?= site_url('peminjaman'); ?>"
                   class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>