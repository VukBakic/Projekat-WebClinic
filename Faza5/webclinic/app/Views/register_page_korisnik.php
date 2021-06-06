<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>
<section id="controlpanel" class="controlpanel kontrola-forme section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Kreiranje novog naloga</h2>
          <p>Popunjavanjem ove forme otvarate nalog klijentu u klinici.</p>
        </div>


      
        <div class="row">
        
          <div class="col-12 mt-5 mt-lg-0 d-flex align-items-stretch">
         
          <?= form_open('sluzbenik/register',['class' => 'php-email-form','id'=>'register'])?>
          
           
              <div class="row w-50 mx-auto">
                <div class="form-group col-12">
                  <label for="name">Ime</label>
                  <input type="text" name="ime" class="form-control"  required="">
                </div>
                <div class="form-group col-12">
                  <label for="name">Prezime</label>
                  <input type="text" name="prezime" class="form-control" required="">
                </div>
                <div class="form-group col-12">
                  <label for="name">JMBG</label>
                  <input type="text" name="jmbg" class="form-control"  required="">
                </div>
                <div class="form-group col-12">
                  <label for="name">Broj lične karte</label>
                  <input type="text" class="form-control" name="lk"  required="">
                </div>
                <div class="form-group col-12">
                  <label for="pol">Pol</label>
                  <select class="form-select" name="pol" id="pol">
                    <option selected="" value="0">Odaberite pol klijenta</option>
                    <option value="m">Muški</option>
                    <option value="z">Ženski</option>
                  </select>
                </div>
                <div class="form-group col-12">
                  <label for="lekar">Odaberite lekara</label>
                  <select class="form-select" name="lekar" id="lekar">
                  <?php foreach ($lekari as $lekar):?>

                  
                  <option value="<?= $lekar->id ?>"><?= $lekar->ime ?></option>
                  <?php endforeach;?>
                  
                  </select>
                </div>
                <div class="form-group col-12">
                  <label for="tel">Kontakt telefon</label>
                  <input type="tel" class="form-control" name="tel" required="">
                </div>
                <div class="form-group col-12">
                  <label for="email">Email adresa</label>
                  <input type="email" class="form-control" name="email" required="">
                </div>
                <div class="form-group col-9">
                  <label for="sifra">Šifra</label>
                  <input type="password" class="form-control" name="sifra" required="">
                </div>
                <div class="text-center col-3 my-auto">
                  <button id="generatePass" class="cstm-form-btn">Generiši</button>
                </div>
              </div>

              <div class="text-center">
                <button id="register-btn" type="submit">Kreiraj nalog</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="<?php echo site_url("js/register.js");?>"></script>
<?= $this->endSection() ?>
