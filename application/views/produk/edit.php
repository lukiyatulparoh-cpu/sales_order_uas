
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">
        Edit Produk
    </h1>

    <form method="post" 
          action="<?= base_url('produk/update/'.$produk->id_produk) ?>">

        <div class="form-group">
            <label>Kode Produk</label>

            <input type="text" 
                   name="kode_produk"
                   value="<?= $produk->kode_produk ?>"
                   class="form-control">

            <?= form_error('kode_produk') ?>
        </div>

        <div class="form-group">
            <label>Nama Produk</label>

            <input type="text" 
                   name="nama_produk"
                   value="<?= $produk->nama_produk ?>"
                   class="form-control">

            <?= form_error('nama_produk') ?>
        </div>

        <div class="form-group">
            <label>Harga</label>

            <input type="number" 
                   name="harga"
                   value="<?= $produk->harga ?>"
                   class="form-control">

            <?= form_error('harga') ?>
        </div>

        <div class="form-group">
            <label>Stok</label>

            <input type="number" 
                   name="stok"
                   value="<?= $produk->stok ?>"
                   class="form-control">

            <?= form_error('stok') ?>
        </div>

        <button type="submit" 
                class="btn btn-primary">
                Update
        </button>

        <a href="<?= base_url('produk') ?>" 
           class="btn btn-secondary">
           Kembali
        </a>

    </form>

</div>
