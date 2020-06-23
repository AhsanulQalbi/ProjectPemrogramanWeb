<?= form_error('nama_barang', '<div class="alert alert-danger" role="alert">', '</div>') ?>
<?= form_error('harga', '<div class="alert alert-danger" role="alert">', '</div>') ?>
<?= form_error('stok', '<div class="alert alert-danger" role="alert">', '</div>') ?>
<?= form_error('kategori', '<div class="alert alert-danger" role="alert">', '</div>') ?>
<form method="post" action="">
    <div class="form-group">
        <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Kode Barang" value="<?= $product['Kode_barang']; ?>" readonly>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang" value="<?= $product['Nama_barang']; ?>">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?= $product['Harga_barang']; ?>">
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="pic" name="pic">
        <label class="custom-file-label" for="image">Choose file</label>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok" value="<?= $product['Stok']; ?>">
    </div>
    <div class="form-group">
        <!-- <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" value="<?= $product['Kategori']; ?>"> -->
        <select name="kategori" id="kategori" class="form-control">
            <?php foreach ($kategori_isi as $k) : ?>
                <option value="<?= $k; ?>" <?php if ($k == $product['Kategori']) : ?> <?= "selected"; ?> <?php endif; ?>>
                    <?= $k; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>