<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>
<section id="controlpanel" class="controlpanel kontrola-forme section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2><?= $klijent->getIme() ?> <?= $klijent->getPrezime() ?></h2>
          <p class="mb-5">JMBG: <?= $klijent->getJmbg() ?></p>
          <a class="cstm-form-btn mt-5" href="novi_pregled_lekar.html">Unesi novu stavku</a>
        </div>

        <div class="row styledlist">
        <?php foreach ($stavke as $stavka):?>
            <div class="col-12 mb-3">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-info">
                <div class="datum-pregled">01.02.2021</div>
                <h4><?= $stavka->getImeusluge()->getImeusluge()?></h4>
                <span>Pregled obavio/la: Dr. <?= $stavka->getPregledobavio()->getIdlekar()->getIme()?> <?= $stavka->getPregledobavio()->getIdlekar()->getPrezime()?></span>

                <h3 class="mt-2">Dijagnostika:</h3>
                <p>
                <?= $stavka->getDijagnostika()?>
                </p>
                <h3 class="mt-2">Preporucena terapija:</h3>
                <p><?= $stavka->getPreporucenaterapija()?></p>
                <h3 class="mt-2">Interna napomena:</h3>
                <p>
                <p><?= $stavka->getInternanapomena()?></p>
                </p>
                <h3 class="mt-2">Prilozeni fajlovi:</h3>
                <a href="#">Dioptrijski_izvestaj.pdf</a>
                <div class="d-flex justify-content-end">
                  <a class="cstm-form-btn ms-1" href="karton_lekar.html">Odstampaj dijagnozu</a>
                </div>
              </div>
            </div>
          </div>
            
          <?php endforeach;?>
         
        </div>
        <div class="d-flex justify-content-end">
          <a class="cstm-form-btn ms-1" href="#">1</a>
          <a class="cstm-form-btn ms-1" href="#">2</a>
          <a class="cstm-form-btn ms-1" href="#">3</a>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>



