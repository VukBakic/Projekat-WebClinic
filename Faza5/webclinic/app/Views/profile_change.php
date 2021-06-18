<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>
<section id="controlpanel" class="controlpanel kontrola-forme section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Izmena profilnih informacija</h2>
          <p>
            Neke informacije kao što su ime, prezime , jmbg ne možete promeniti.
            Ukoliko je došlo do neke greške ili promene imena molimo Vas
            obratite nam se emailom.
          </p>
        </div>
        <?= $this->include('layouts/partials/flash_msg') ?>
        <div class="row">
          <div class="col-12 mt-5 mt-lg-0 d-flex align-items-stretch">
          <?= form_open('profile/change',['class' => 'php-email-form  w-100' ,'id'=>'register'])?>
            
              <div class="row w-50 mx-auto">
                
              
                <div class="form-group col-12">
                  <label for="name">Ime</label>
                  <input type="text" name="ime" class="form-control" disabled="" placeholder="<?=$korisnik->getIme()?>">
                </div>
                <div class="form-group col-12">
                  <label for="name">Prezime</label>
                  <input type="text" name="prezime" class="form-control" disabled="" placeholder="<?=$korisnik->getPrezime()?>">
                </div>
                <div class="form-group col-12">
                  <label for="name">JMBG</label>
                  <input type="text" name="jmbg" class="form-control" disabled="" placeholder="<?=$korisnik->getJmbg()?>">
                </div>
                <div class="form-group col-12">
                  <label for="name">Broj lične karte</label>
                  <input type="email" class="form-control" name="brlk"  disabled="" placeholder="<?=$korisnik->getBrlk()?>">
                </div>
                <div class="form-group col-12">
                  <label for="pol">Pol</label>
                  <select class="form-select" name="pol" disabled="">
                    <option selected="" value="<?=$korisnik->getPol()?>"><?=$korisnik->getPol()=="m"?"Muški":"Ženski"?></option>
                  </select>
                </div>
                <div class="form-group col-12">
                  <label for="name">Kontakt telefon</label>
                  <input type="tel" class="form-control" name="tel" placeholder="<?=$korisnik->getBrtel()?>">
                </div>
                <div class="form-group col-12">
                  <label for="name">Email adresa</label>
                  <input type="tel" class="form-control" name="email" placeholder="<?=$korisnik->getEmail()?>">
                </div>
              </div>

              <div class="text-center">
                <button type="submit">Sačuvaj izmene</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>



