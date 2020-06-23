<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <?= $this->session->flashdata('message'); ?>

    <?php $counter = 0; ?>
    <?php if ($barang_transaksi) : ?>
        <table class="table table-hover table-bordered">
            <thead class="text-center">
                <tr class="thead-light">
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Terjual</th>
                    <th>Sub Total(Rp)</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($barang_transaksi as $bt) : ?>
                    <tr class="text-center">
                        <td><?= $bt['kode_barang'] ?></td>
                        <td><?= $bt['nama_barang']; ?></td>
                        <td><?= $bt['jumlah']; ?></td>
                        <td class="text-right"><?= number_format($bt['pemasukan']); ?></td>
                        <?php $counter += $bt['pemasukan'] ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot class="text-center thead-light">
                <tr>
                    <th></th>
                    <th></th>
                    <th>Grand Total (Rp)</th>
                    <th class="text-right"><?= number_format($counter); ?></th>
                </tr>
            </tfoot>
        </table>

    <?php else : ?>
        <h2>Tidak ada data!</h2>
    <?php endif; ?>


</div> <!-- End of Main Content -->