<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Frequently Asked Questions (FAQ)</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">FAQ</li>
        </ol>
    </nav>
</div><section class="section faq">
    <div class="row">
        <div class="col-lg-12">
            <div class="card basic">
                <div class="card-header">
                    <h5 class="card-title">Pertanyaan Umum Mengenai Toko Aja</h5>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="faqAccordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                                    Bagaimana cara memesan produk di Toko Aja?
                                </button>
                            </h2>
                            <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Untuk memesan produk, Anda cukup menjelajahi halaman "Home", pilih produk yang ingin dibeli dengan mengklik tombol "Beli". Produk akan otomatis ditambahkan ke keranjang belanja Anda. Setelah selesai memilih, Anda bisa melanjutkan ke halaman "Keranjang" untuk memeriksa pesanan atau langsung ke "Checkout" untuk menyelesaikan pembayaran.
                                </div>
                            </div>
                        </div><div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    Bagaimana cara melihat isi keranjang belanja saya?
                                </button>
                            </h2>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Anda bisa melihat isi keranjang belanja Anda dengan mengklik menu "Keranjang" di sidebar navigasi. Di halaman tersebut, Anda dapat melihat daftar produk, mengubah jumlah, atau menghapus produk dari keranjang.
                                </div>
                            </div>
                        </div><div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Apakah saya harus login untuk berbelanja?
                                </button>
                            </h2>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, untuk menjaga keamanan transaksi dan melacak pesanan Anda, kami mewajibkan pengguna untuk login sebelum dapat berbelanja atau mengakses fitur keranjang dan checkout. Jika Anda belum memiliki akun, Anda bisa mendaftar terlebih dahulu.
                                </div>
                            </div>
                        </div><div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    Bagaimana cara menghitung ongkos kirim?
                                </button>
                            </h2>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ongkos kirim akan dihitung secara otomatis di halaman "Checkout" setelah Anda memilih alamat pengiriman (kelurahan) dan layanan pengiriman yang tersedia. Sistem kami terintegrasi dengan layanan ekspedisi untuk memberikan estimasi biaya pengiriman yang akurat.
                                </div>
                            </div>
                        </div><div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                    Bagaimana cara mengubah profil pengguna?
                                </button>
                            </h2>
                            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Anda dapat melihat detail profil Anda dengan mengklik menu "Profil" di sidebar navigasi. Saat ini, halaman profil hanya menampilkan informasi dasar pengguna. Untuk perubahan data sensitif, silakan hubungi administrator.
                                </div>
                            </div>
                        </div></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>