<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>
<section id="controlpanel" class="controlpanel kontrola-forme section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Pregled</h2>
          <p>
            Popunjavanjem ove fomre unosite dijagnozu u karton klijenta:
          </p>
          <h3> <?= $klijent->getIme() ?> <?= $klijent->getPrezime() ?></h3>
          

        </div>
        <?= $this->include('layouts/partials/flash_msg') ?>
        <div class="row">
          <div class="col-12 mt-5 mt-lg-0 d-flex align-items-stretch">
          <?= form_open('lekar/karton/dodaj',['class' => 'php-email-form  w-100'])?>
           
              <div class="row w-100 mx-auto">
                <div class="form-group col-md-12 w-50 mx-auto">
                  <label for="struka">Odaberite pregled/intervenciju</label>
                  
                  <select class="form-select" name="usluga">
                  <?php foreach ($usluge as $usluga):?>

                                    
                    <option value="<?= $usluga-> getImeusluge() ?>"><?= $usluga-> getImeusluge()." (".$usluga-> getCena()." RSD)" ?></option>
                  <?php endforeach;?>

              
                  </select>
                </div>
              
                <div class="form-group col-12">
                  <label for="name">Dijagnoza</label>
                  <textarea class="form-control" name="dijagnoza" rows="10" required=""></textarea>
                </div>
                <div class="form-group col-12">
                  <label for="name">Preporucena terapija</label>
                  <textarea class="form-control" name="terapija" rows="4" required=""></textarea>
                </div>
                <div class="form-group col-12">
                  <label for="name">Interna napomena</label>
                  <textarea class="form-control" name="napomena" rows="3" required=""></textarea>
                </div>
                <input type="hidden" name="id" value="<?= $klijent->getIdK() ?>">
               
               
              </div>
              <div class="text-center">
              <button class="cstm-form-btn" type="submit">Sacuvaj</a>
              
              </div>
              </form></div>

              
            
          </div>
        </div>
      
    </section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="<?php echo site_url("js/print.js");?>"></script>
<?= $this->endSection() ?>



