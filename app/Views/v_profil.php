<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h3> Profil Pengguna </h3>
<ul>
    <li><strong>Username        : </strong><?= esc($username) ?></li>
    <li><strong>Role            : </strong><?= esc($role) ?></li>
    <li><strong>Email           : </strong><?= esc($email) ?></li>
    <li><strong>Waktu Login     : </strong><?= esc($waktu_login) ?></li>
    <li><strong>Status Login    : </strong><?= esc($status) ?></li>
</ul>
<?= $this->endSection() ?>