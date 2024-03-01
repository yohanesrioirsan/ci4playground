<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<div class="container" style="width: 100%; height: 100vh;">
    <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
        <h1>Dashboard</h1>
        <div class="d-flex mt-3 gap-2">
            <a href="comics" class="btn btn-primary">Comics Collection</a>
            <a href="logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>