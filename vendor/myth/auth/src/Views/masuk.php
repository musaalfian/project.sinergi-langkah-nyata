<?= $this->extend('templates/template-admin-login'); ?>

<?= $this->section('content'); ?>
<!-- Main page -->
<div class="masuk d-flex align-items-center">
  <div class="masuk__content w-100 px40 d-flex align-items-center justify-content-center">
    <div class="w-50 mb20">
      <h1 class="fw-bold mb10">Welcome back!</h1>
      <h3 class="lightlattegray">Please enter your details!</h3>
      <div class="mx">
        <form action="<?= route_to('login') ?>" method="POST">
          <?= csrf_field() ?>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="login" autofocus class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="email" aria-describedby="emailHelp" placeholder="Enter your email" />
            <div class="invalid-feedback">
              <?= session('errors.login') ?>
            </div>
          </div>
          <div class="mb40">
            <label for="sandi" class="form-label">Kata Sandi</label>
            <div class="position-relative">
              <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="sandi" aria-describedby="emailHelp" placeholder="Enter your password" />
              <div class="invalid-feedback">
                <?= session('errors.password') ?>
              </div>
              <span class="eye"><i class="bi bi-eye-fill" area-hidden="true" onclick="toogle()" id="eye"></i></span>
            </div>
          </div>
          <div class="text-center mb40">
            <button type="submit" class="btn btn-primary bd__radius__none w-100 bgdarkgreen border-0 text-white" style="padding: 0.375rem 0.75rem">
              Masuk
            </button>
          </div>
        </form>
      </div>
      <div class="d-flex justify-content-between">
        <div class="daftar">
          <?php if ($config->allowRegistration) : ?>
            <h4 class="lightlattegray">
              Don't have an account?
              <a href="<?= route_to('register') ?>" class="text-decoration-none darkgreen fw-bold">Sign Up</a>
            </h4>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="masuk__gambar w-100 bgdarkgreen">
    <img src="<?= base_url('assets/img/gambar-masuk.svg'); ?>" alt="">
  </div>
</div>
<!-- End main page -->
<?= $this->endSection(); ?>