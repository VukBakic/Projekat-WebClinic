<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>
<section id="controlpanel" class="controlpanel kontrola-forme section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2><?= $klijent->getIme() ?> <?= $klijent->getPrezime() ?></h2>
          <p class="mb-5">JMBG: <?= $klijent->getJmbg() ?></p>
          <a class="cstm-form-btn mt-5" href="novi_pregled_lekar.html">Unesi novu stavku</a>
        </div>

        <?php if (!$stavke):?>
          <p class="mb-5 text-center">Karton klijenta je prazan.</p>
            
        <?php endif;?>

        <div class="row styledlist">
        

        <?php foreach ($stavke as $stavka):?>
            <div class="col-12 mb-3">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-info">
                <div class="datum-pregled"><?= $stavka->getDatumvreme()->format('Y-m-d')?></div>
                <h4><?= $stavka->getImeusluge()->getImeusluge()?></h4>
                <span>Pregled obavio/la: Dr. <?= $stavka->getPregledobavio()->getIdlekar()->getIme()?> <?= $stavka->getPregledobavio()->getIdlekar()->getPrezime()?></span>

                <h3 class="mt-2">Dijagnostika:</h3>
                <p>
                <?= $stavka->getDijagnostika()?>
                </p>
                <h3 class="mt-2">Preporucena terapija:</h3>
                <p><?= $stavka->getPreporucenaterapija()?></p>
                <h3 class="mt-2 interna-napomena">Interna napomena:</h3>
                <p>
                <p class="interna-napomena-text"><?= $stavka->getInternanapomena()?></p>
                </p>
              
                <div class="d-flex justify-content-end">
                  <a class="cstm-form-btn ms-1 print-btn" href="#">Odstampaj dijagnozu</a>
                </div>
              </div>
            </div>
          </div>
            
          <?php endforeach;?>
         
        </div>
        <?= $pager->makeLinks($currentPage, 2, $count, "pagination_link", 4) ?>
       
      </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="<?php echo site_url("js/print.js");?>"></script>
<?= $this->endSection() ?>



