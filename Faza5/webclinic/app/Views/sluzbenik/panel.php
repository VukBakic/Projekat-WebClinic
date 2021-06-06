<?= $this->extend('layouts/basic_layout') ?>
<?= $this->section('navbar') ?>
    <?= $this->include('layouts/partials/guest_navbar') ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
      <?= $this->include('layouts/partials/flash_msg') ?>
        <div class="section-title">
          <h2>Kontrolni panel</h2>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4>
                <a href="novi_nalog_sluzbenik.html">Kreiraj novi nalog</a>
              </h4>
              <p>Kreiranje novog naloga za klijenta klinike</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4>
                <a href="zakazi_pregled_sluzbenik.html">Zakaži pregled </a>
              </h4>
              <p>Zakazivanje pregleda klijentu kod lekara</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="racuni_sluzbenik.html">Račun</a></h4>
              <p>Štampanje računa klijentu</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="korisnici_sluzbenik.html">Korisnici</a></h4>
              <p>Rad sa nalozima u klinici</p>
            </div>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>
