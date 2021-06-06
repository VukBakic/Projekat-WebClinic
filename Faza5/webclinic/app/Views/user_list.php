<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>


<section id="controlpanel" class="controlpanel kontrola-forme section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Korisnici</h2>
          <p>Izmena podataka i brisanje korisnika</p>
        </div>
           <?= $this->include('layouts/partials/flash_msg') ?>
        <div class="row styledlist">
          <div class="col-12 my-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form w-100">
              <div class="row w-50 mx-auto">
                <div class="form-group col-12">
                  <label for="vrsta">Vrsta korisnika</label>
                  <select class="form-select" name="vrsta" id="vrsta">
                    <option selected="" value="1">Klijent</option>
                    <option value="2">Sluzbenik</option>
                    <option value="3">Lekar</option>
                    
                  </select>
                </div>
                <div class="form-group col-12">
                  <label for="name">Ime</label>
                  <input type="text" name="name" class="form-control" id="name" required="">
                </div>
                <div class="form-group col-12">
                  <label for="name">Prezime</label>
                  <input type="text" name="name" class="form-control" id="name" required="">
                </div>
                <div class="form-group col-12">
                  <label for="name">JMBG</label>
                  <input type="text" name="name" class="form-control" id="name" required="">
                </div>
              </div>
              <div class="text-center">
                <a class="cstm-form-btn" href="zakazi_pregled_lekar_2.html">Filtriraj</a>
              </div
            </form>
          </div>
            
            
             <?php foreach ($korisnici as $k): ?> 
           
          <div class="col-12 mb-3">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-info">
                <h4><?= $k->getIme()." ".$k->getPrezime() ?></h4>
                <span><?="JMBG: ".$k->getJmbg()?></span>
                <p><?="Korisnik: ".$k->getIduloge()->getNazivuloge()?></p>
              </div>
              <div class="d-flex justify-content-end">
          <?php  echo  "<a class=\"cstm-form-btn ms-1\" href=izmeni?idk=". $k->getIdk()."\"   >Izmeni</a>";?>
          <?php  echo  "<a class=\"cstm-form-btn ms-1\" href=brisi?idk=". $k->getIdk()."\"   >Obriši</a>";?>
              </div>
            </div>
          </div>    
            
          <?php endforeach; ?>
        <?= $pager->makeLinks($num, 4, $brkorisnika, "pagination_link", 2) ?>
        </div>
      </div>
    </section>





<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="<?php echo site_url("js/register.js"); ?>"></script>
<?= $this->endSection() ?>
