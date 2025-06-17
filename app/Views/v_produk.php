<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<?php
if (session()->getFlashData('failed')) {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('failed') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>

<div class="mb-3"> <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addModal"> <i class="bi bi-plus-circle"></i> Tambah Data
    </button>
    <a type="button" class="btn btn-success" href="<?= base_url() ?>produk/download">
        <i class="bi bi-download"></i> Download Data
    </a>
</div>

<table class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th> </tr>
    </thead>
    <tbody>
        <?php foreach ($product as $index => $produk) : ?>
            <tr>
                <th scope="row"><?php echo $index + 1 ?></th>
                <td><?php echo $produk['nama'] ?></td>
                <td><?php echo "Rp " . number_format($produk['harga'], 0, ',', '.') ?></td> <td><?php echo $produk['jumlah'] ?></td>
                <td>
                    <?php if ($produk['foto'] != '' && file_exists("img/" . $produk['foto'])) : ?>
                        <img src="<?php echo base_url() . "img/" . $produk['foto'] ?>" width="100px" class="img-thumbnail"> <?php else : ?>
                        Tidak ada Foto
                    <?php endif; ?>
                </td>
                <td>
                    <button type="button" class="btn btn-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editModal-<?= $produk['id'] ?>"> <i class="bi bi-pencil"></i> Ubah
                    </button>
                    <a href="<?= base_url('produk/delete/' . $produk['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini ?')">
                        <i class="bi bi-trash"></i> Hapus
                    </a>
                </td>
            </tr>
            <div class="modal fade" id="editModal-<?= $produk['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel-<?= $produk['id'] ?>" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel-<?= $produk['id'] ?>">Edit Produk: <?= esc($produk['nama']) ?></h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('produk/edit/' . $produk['id']) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="mb-3"> <label for="nama_edit_<?= $produk['id'] ?>" class="form-label">Nama</label> <input type="text" name="nama" class="form-control" id="nama_edit_<?= $produk['id'] ?>" value="<?= $produk['nama'] ?>" placeholder="Nama Barang" required>
                </div>
                <div class="mb-3">
                    <label for="harga_edit_<?= $produk['id'] ?>" class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga_edit_<?= $produk['id'] ?>" value="<?= $produk['harga'] ?>" placeholder="Harga Barang" required>
                </div>
                <div class="mb-3">
                    <label for="jumlah_edit_<?= $produk['id'] ?>" class="form-label">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" id="jumlah_edit_<?= $produk['id'] ?>" value="<?= $produk['jumlah'] ?>" placeholder="Jumlah Barang" required>
                </div>
                <?php if ($produk['foto'] != '' && file_exists("img/" . $produk['foto'])) : ?>
                    <img src="<?php echo base_url() . "img/" . $produk['foto'] ?>" width="100px" class="img-thumbnail mb-2">
                <?php else : ?>
                    <p>Tidak ada Foto</p>
                <?php endif; ?>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="check_<?= $produk['id'] ?>" name="check" value="1">
                        <label class="form-check-label" for="check_<?= $produk['id'] ?>">
                            Ceklis jika ingin mengganti foto
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="foto_edit_<?= $produk['id'] ?>" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto_edit_<?= $produk['id'] ?>" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach ?>
    </tbody>
</table>
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah Data Produk Baru</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('produk') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_add" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama_add" placeholder="Nama Barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_add" class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga_add" placeholder="Harga Barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_add" class="form-label">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" id="jumlah_add" placeholder="Jumlah Barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto_add" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto_add" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>