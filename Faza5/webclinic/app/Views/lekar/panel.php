<?= $this->extend('layouts/basic_layout') ?>
<?= $this->section('navbar') ?>
<?= $this->include('layouts/partials/lekar_navbar') ?>
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
                        <?= anchor("lekar/kartoni/1","Pogledaj karton") ?>
                        
                    </h4>
                    <p>Pogledaj karton klijenta</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4>
                        <a href="#">Zakaži pregled </a>
                    </h4>
                    <p>Zakazivanje pregleda klijentu</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4>
                        <a href="#">Izdavanje recepta </a>
                    </h4>
                    <p>Stampanje recepta</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>
