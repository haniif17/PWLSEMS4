<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="pagetitle">
    <h1>Profil Pengguna</h1>
</div><section class="section profile">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="<?= base_url() ?>NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    <h2><?= esc($username) ?></h2>
                    <h3><?= esc($role) ?></h3>
                    <div class="social-links mt-2">
                        </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Detail Profil</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Username</div>
                                <div class="col-lg-9 col-md-8"><?= esc($username) ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Role</div>
                                <div class="col-lg-9 col-md-8"><?= esc($role) ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8"><?= esc($email) ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Waktu Login</div>
                                <div class="col-lg-9 col-md-8"><?= esc($waktu_login) ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status Login</div>
                                <div class="col-lg-9 col-md-8"><?= esc($status) ?></div>
                            </div>

                        </div>
                        <div class="tab-pane fade profile-settings pt-3" id="profile-settings">
                            <h5 class="card-title">Pengaturan Akun</h5>
                            <form>
                                <div class="row mb-3">
                                    <label for="usernameInput" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="username" type="text" class="form-control" id="usernameInput" value="<?= esc($username) ?>" readonly>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Sandi Sekarang</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="currentPassword" type="password" class="form-control" id="currentPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Sandi Baru</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="newPassword" type="password" class="form-control" id="newPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="reEnterNewPassword" class="col-md-4 col-lg-3 col-form-label">Ulangi Sandi Baru</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="reEnterNewPassword" type="password" class="form-control" id="reEnterNewPassword">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Simpan Sandi</button>
                                </div>
                            </form>
                        </div>
                        </div></div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection() ?>