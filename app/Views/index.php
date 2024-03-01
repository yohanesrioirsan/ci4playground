<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php session() ?>
<div class="container" style="height: 100vh;">
    <div class="d-flex justify-content-center align-items-center gap-2 h-100">
        <div class="content d-flex flex-column gap-2">
            <h1 class="text-center">Welcome</h1>
            <a href="/login" class="btn btn-primary">Login</a>
            <a href="/register" class="btn btn-secondary">Register</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>