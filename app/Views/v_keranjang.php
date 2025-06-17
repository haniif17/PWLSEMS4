<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>

<?php echo form_open('keranjang/edit') ?>
<div class="table-responsive"> <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">Produk</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            if (!empty($items)) :
                foreach ($items as $index => $item) :
            ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <?php if ($item['options']['foto'] != '' && file_exists("img/" . $item['options']['foto'])) : ?>
                                    <img src="<?php echo base_url() . "img/" . $item['options']['foto'] ?>" class="img-thumbnail me-3" width="70px" alt="<?= esc($item['name']) ?>">
                                <?php endif; ?>
                                <div><?= esc($item['name']) ?></div>
                            </div>
                        </td>
                        <td><?= number_to_currency($item['price'], 'IDR') ?></td>
                        <td>
                            <input type="number" min="1" name="qty<?php echo $i++ ?>" class="form-control" value="<?php echo $item['qty'] ?>" style="width: 80px;"> </td>
                        <td><?= number_to_currency($item['subtotal'], 'IDR') ?></td>
                        <td>
                            <a href="<?php echo base_url('keranjang/delete/' . $item['rowid']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus produk ini dari keranjang?')">
                                <i class="bi bi-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
            <?php
                endforeach;
            else :
            ?>
                <tr>
                    <td colspan="5" class="text-center">Keranjang belanja Anda kosong.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary"><i class="bi bi-arrow-clockwise"></i> Perbarui Keranjang</button>
            <a class="btn btn-warning" href="<?php echo base_url('keranjang/clear') ?>"><i class="bi bi-cart-x"></i> Kosongkan Keranjang</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mt-3 mt-md-0"> <div class="card-body">
                <h5 class="card-title">Ringkasan Belanja</h5>
                <p class="card-text d-flex justify-content-between">
                    <span>Total Belanja:</span>
                    <strong class="text-primary"><?= number_to_currency($total, 'IDR') ?></strong>
                </p>
                <?php if (!empty($items)) : ?>
                    <div class="d-grid gap-2">
                        <a class="btn btn-success btn-lg" href="<?php echo base_url('checkout') ?>"><i class="bi bi-bag-check"></i> Selesai Belanja</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php echo form_close() ?>
<?= $this->endSection() ?>