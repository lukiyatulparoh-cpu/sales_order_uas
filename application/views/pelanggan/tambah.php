
<div class="container-fluid">

    <h1 class="h3 mb-4 font-weight-bold text-gray-800">
        Tambah Pelanggan
    </h1>

    <div class="card border-0 shadow-sm"
         style="
         border-radius:20px;
         background:#fffaf5;
         ">

        <div class="card-body p-4">

            <form method="post"
                  action="<?= base_url('pelanggan/simpan') ?>">

                <div class="form-group">
                    <label>Nama Pelanggan</label>

                    <input type="text"
                           name="nama_pelanggan"
                           class="form-control"
                           style="
                           border-radius:12px;
                           height:48px;
                           ">

                    <?= form_error('nama_pelanggan') ?>
                </div>

                <div class="form-group">
                    <label>Alamat</label>

                    <textarea name="alamat"
                              class="form-control"
                              rows="4"
                              style="
                              border-radius:12px;
                              "></textarea>

                    <?= form_error('alamat') ?>
                </div>

                <div class="form-group">
                    <label>Telepon</label>

                    <input type="text"
                           name="telepon"
                           class="form-control"
                           style="
                           border-radius:12px;
                           height:48px;
                           ">

                    <?= form_error('telepon') ?>
                </div>

                <button type="submit"
                        class="btn mt-3"
                        style="
                        background:#9c6b3f;
                        color:white;
                        border-radius:12px;
                        padding:10px 20px;
                        ">
                        Simpan
                </button>

                <a href="<?= base_url('pelanggan') ?>"
                   class="btn btn-light mt-3"
                   style="
                   border-radius:12px;
                   padding:10px 20px;
                   ">
                   Kembali
                </a>

            </form>

        </div>

    </div>

</div>