<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="width: 100%; height: 100vh;">
    <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="login-section">
            <?php if (session()->has('errors')) : ?>
                <?php foreach (session("errors") as $error) : ?>
                    <ul>
                        <li><?= $error; ?></li>
                    </ul>
                <?php endforeach; ?>
            <?php endif; ?>
            <h1 class="text-center fw-bold">Register Here</h1>
            <form action="/register/new" method="post">
                <div class="mb-3 row d-flex flex-column">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10 w-100">
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="mb-3 row d-flex flex-column">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10 w-100">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <p>Already have an account? <a href="/login" style="text-decoration: none;">Login Here</a></p>
                <button type="submit" class="btn btn-primary w-100">Regsiter</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>