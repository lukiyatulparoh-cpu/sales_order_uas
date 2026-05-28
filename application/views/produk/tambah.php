
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">
        Tambah Produk
    </h1>

    <form method="post" 
          action="<?= base_url('produk/simpan') ?>">

    
        <div class="form-group">
            <label>Kode Produk</label>

            <input type="text"
                name="kode_produk"
                value="<?= $kode_produk ?>"
                readonly
                class="form-control"
                style="
                border-radius:12px;
                height:48px;
                background:#f8f9fa;
                ">
        </div>

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" 
                   name="nama_produk"
                   class="form-control">
            <?= form_error('nama_produk') ?>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" 
                   name="harga"
                   class="form-control">
            <?= form_error('harga') ?>
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" 
                   name="stok"
                   class="form-control">
            <?= form_error('stok') ?>
        </div>

        <button type="submit" 
                class="btn btn-primary">
                Simpan
        </button>

        <a href="<?= base_url('produk') ?>" 
           class="btn btn-secondary">
           Kembali
        </a>

    </form>

</div>
