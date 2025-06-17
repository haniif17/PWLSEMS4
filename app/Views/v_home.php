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

<div class="row">
    <?php if (!empty($product)) : ?>
        <?php foreach ($product as $key => $item) : ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 d-flex align-items-stretch">
                <?= form_open('keranjang', ['class' => 'w-100']) ?>
                <?php
                echo form_hidden('id', esc($item['id']));
                echo form_hidden('nama', esc($item['nama']));
                echo form_hidden('harga', esc($item['harga']));
                echo form_hidden('foto', esc($item['foto']));
                ?>
                <div class="card h-100 product-card">
                    <?php if ($item['foto'] != '' && file_exists("img/" . $item['foto'])) : ?>
                        <img src="<?= base_url('img/' . esc($item['foto'])) ?>" class="card-img-top product-img" alt="<?= esc($item['nama']) ?>">
                    <?php else : ?>
                        <img src="<?= base_url('img/default.png') ?>" class="card-img-top product-img" alt="No Image">
                    <?php endif; ?>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center flex-grow-1"><?= esc($item['nama']) ?></h5>
                        <p class="card-text text-center fw-bold fs-5 text-primary"><?= number_to_currency(esc($item['harga']), 'IDR') ?></p>
                        <div class="text-center mt-auto">
                            <button type="submit" class="btn btn-info rounded-pill px-4"><i class="bi bi-cart-plus"></i> Beli Sekarang</button>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        <?php endforeach ?>
    <?php else : ?>
        <div class="col-12">
            <div class="alert alert-warning text-center" role="alert">
                Tidak ada produk tersedia saat ini.
            </div>
        </div>
    <?php endif; ?>
</div>

<style>
    .product-card {
        transition: transform 0.2s ease-in-out;
    }
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }
    .product-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-bottom: 1px solid rgba(0, 0, 0, .125);
    }
    .card-body.d-flex.flex-column {
        padding-top: 15px;
        padding-bottom: 15px;
    }
</style>

<?= $this->endSection() ?>