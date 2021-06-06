<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>

<section id="hero" class="d-flex align-items-center">

      <div class="container">
      <div class="flash_holder">
<?= $this->include('layouts/partials/flash_msg') ?>

</div>
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>Dobrodošli na portal WebKlinike</h1>
            <h2>
              Zakažite pregled već danas ili postavite pitanje nekom od naših
              stručnjaka
            </h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="#about" class="btn-get-started scrollto">Zakažite pregled</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="<?=base_url("img/hero-img.png")?>" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>

<?= $this->endSection() ?>
