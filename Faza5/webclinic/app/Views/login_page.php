<?= $this->extend('layouts/basic_layout') ?>
<?= $this->section('navbar') ?>
    <?= $this->include('layouts/partials/guest_navbar') ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section id="hero" class="kontrola-forme">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/login.php" method="post" role="form" class="php-email-form">
              <div class="mx-auto w-40">
                <div class="form-group">
                  <label for="name">Email</label>
                  <input type="email" name="email" class="form-control" id="email" required="">
                </div>
                <div class="form-group">
                  <label for="name">Šifra</label>
                  <input type="password" class="form-control" name="password" id="password" required="">
                  <a class="float-end" href="povratak_lozinke.html">Zaboravili ste lozinku?</a>
                </div>
              </div>

              <div class="text-center">
                <button type="submit">Ulogujte se</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>