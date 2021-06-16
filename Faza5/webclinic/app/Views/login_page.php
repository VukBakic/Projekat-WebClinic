<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>
<section id="hero" class="kontrola-forme">
      <div class="container" data-aos="fade-up">
      
     
      <?= $this->include('layouts/partials/flash_msg') ?>
        <div class="row">
          <div class="col-12 mt-5 mt-lg-0 d-flex align-items-stretch">
          <?= form_open('login',['class' => 'php-email-form'])?>
            
              <div class="mx-auto w-40">
                <div class="form-group">
                  <label for="name">Email</label>
                  <input type="email" name="email" class="form-control" id="email" required=""
                  <?php if (\Config\Services::session()->getFlashdata('email')) : ?>
                     value="<?= \Config\Services::session()->getFlashdata('email')?>"
                  <?php endif; ?>
                  >
                </div>
                <div class="form-group">
                  <label for="name">Šifra</label>
                  <input type="password" class="form-control" name="password" id="password" required="">
                  <a class="float-end" href="/resetpassword">Zaboravili ste lozinku?</a>
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