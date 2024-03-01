<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<div class="container" style="width: 100%; height: 100vh;">
    <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="login-section">
            <?php if (session()->getFlashdata('msg')) : ?>
                <!-- <div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body"> -->
                <p><?= session()->getFlashdata('msg'); ?></p>
                <!-- </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div> -->
            <?php endif; ?>
            <h1 class="text-center fw-bold  ">Login</h1>
            <form action="/login/auth" method="post">
                <div class="mb-3 row d-flex flex-column">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10 w-100">
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="mb-3 row d-flex flex-column">
                    <label for="inputPassword" class="  col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10 w-100">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <p>Don't have an account? <a href="/register" style="text-decoration: none;">Register Here</a></p>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>