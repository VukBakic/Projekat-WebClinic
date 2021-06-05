<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>
<section id="controlpanel" class="controlpanel kontrola-forme section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Moj Profil</h2>
        </div>
        <?= $this->include('layouts/partials/flash_msg') ?>
        <div class="row styledlist">
          <div class="col-12 mb-3">
            <div class="member d-flex justify-content-between align-items-end" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-info">
                <h4><?=$korisnik->getIme()?> <?=$korisnik->getPrezime()?></h4>
                <p>Pol: <?=$korisnik->getPol()=="m"?"Muški":"Ženski"?></p>
                <p>JMBG: <?=$korisnik->getJmbg()?></p>
                <p>Broj lične karte: <?=$korisnik->getBrlk()?></p>
                <p>Kontakt telefon: <?=$korisnik->getBrtel()?></p>
                <p>Email: <?=$korisnik->getEmail()?></p>
              </div>
            </div>
            <div class="mt-3 d-flex justify-content-end">

              <?= anchor('/profile/change', 'Izmeni profil',['class'=>'cstm-form-btn'])?> 
              <?= anchor('/profile/changepassword', 'Promeni lozinku',['class'=>'cstm-form-btn ms-2'])?>     
             
              <?php if (service("authorization")->isKorisnik()) : ?>
                  <?= anchor('/klijent/promena', 'Promeni lekara',['class'=>'cstm-form-btn ms-2'])?>   
              <?php endif; ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>



