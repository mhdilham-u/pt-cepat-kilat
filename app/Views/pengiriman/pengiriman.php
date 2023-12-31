<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1 class="h3 mb-4 text-gray-800"><i class="fa fa-box mr-2"></i> Pengiriman Barang</h1>
<div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
<div class="card shadow mb-4">
<?php if (session()->get('level') == 'admin') : ?>
    <div class="card-header py-3">
        <a href="" class="btn btn-default"><i class="fa fa-plus mr-1"></i>Tambah</a>
    </div>
    <?php endif; ?>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID Pengiriman</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Kurir</th>
                        <th scope="col">Penerima</th>
                        <th scope="col">Status</th>
                        <?php if (session()->get('level') == 'admin') : ?>
                        <th scope="col" class="text-center">Opsi</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pengiriman as $s) : ?>
                        <tr>
                            <td><?= $s['id_pengirim']; ?></td>
                            <td><?= $s['tgl_kirim']; ?></td>
                            <td><?= $s['pelanggan']; ?></td>
                            <td><?= $s['kurir']; ?></td>
                            <td><?= $s['penerima']; ?></td>
                            <td class="badge-status <?= $s['status'] ?>"><?= $s['status']; ?></td>
                            <?php if (session()->get('level') == 'admin') : ?>
                            <td class="text-center td">
                                <a href="" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit"></i></a> |
                                <a href="" class="btn btn-danger btn-hapus btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="far fa-trash-alt"></i></a>
                            </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>