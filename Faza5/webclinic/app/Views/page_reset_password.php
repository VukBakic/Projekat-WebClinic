<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>
<section id="hero" class="kontrola-forme">
      <div class="container" data-aos="fade-up">
     
        <div class="row">
        <?= $this->include('layouts/partials/flash_msg') ?>
          <div class="col-12 mt-5 mt-lg-0 d-flex align-items-stretch">

          <?= form_open('resetpassword',['class' => 'php-email-form'])?>
              <div class="mx-auto w-40">
                <div class="form-group">
                  <label for="name">Email</label>
                  <input type="email" name="email" class="form-control" id="email" required="">
                </div>
              </div>

              <div class="text-center">
                <button type="submit">Posalji zahtev</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>



