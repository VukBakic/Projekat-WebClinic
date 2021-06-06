<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>
<section id="controlpanel" class="controlpanel kontrola-forme section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Promena lozinke</h2>
          <p>
            Zapamtite lozinku i nemojte je davati drugim kako ne bi došlo do
            neovlašćenog korišćenja vašeg naloga.
          </p>
        </div>
        <?= $this->include('layouts/partials/flash_msg') ?>
        <div class="row">
          <div class="col-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form w-100">
              <div class="row w-50 mx-auto">
                <div class="form-group col-12">
                  <label for="name">Trenutna lozinka</label>
                  <input type="password" name="password" class="form-control" required="">
                </div>
                <div class="form-group col-12">
                  <label for="name">Nova lozinka</label>
                  <input type="password" name="password_new" class="form-control" required="">
                </div>
                <div class="form-group col-12">
                  <label for="name">Unesite ponovo novu lozinku</label>
                  <input type="password" name="password_confirm" class="form-control" required="">
                </div>
              </div>

              <div class="text-center">
                <button type="submit">Sačuvaj izmene</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>



