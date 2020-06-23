<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newProductModal">Add New Product</a>
        </div>
    </div>
    <?= form_error('kode_barang', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('nama_barang', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('harga', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('stok', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('kategori', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <table class="table table-hover table-bordered">
        <thead class="thead-light text-center">
            <tr>
                <th>Kode Barang</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Pic</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $p) : ?>
                <tr>
                    <td><?= $p['Kode_barang']; ?></td>
                    <td><?= $p['Nama_barang']; ?></td>
                    <td><?= number_format($p['Harga_barang']); ?></td>
                    <td class=" img-fluid"><img src=" <?= base_url('assets/img/') . $p['Pic']; ?>" class="img-thumbnail rounded float mx-auto d-block" style="width:50px; "></td>
                    <td class="text-center"><?= $p['Stok']; ?></td>
                    <td class="text-center"><?= $p['Kategori']; ?></td>
                    <td>
                        <a href="<?= base_url('admin/edit/'); ?><?= $p['Kode_barang']; ?>" class="badge badge-pill badge-success">Edit</a>
                        <a href="<?= base_url('admin/hapus/'); ?><?= $p['Kode_barang']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('yakin?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div> <!-- End of Main Content -->

<!-- Add product Modal -->
<div class="modal fade" id="newProductModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newProductModalLabel">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('admin'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <!-- <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Kode Barang"> -->
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pic" name="pic">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok">
                    <!-- <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori"> -->
                    <select class="form-control" id="kategori" name="kategori">
                        <?php foreach ($kategori_isi as $k) : ?>

                            <option value="<?= $k ?>"><?= $k; ?></option>

                        <?php endforeach; ?>

                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>