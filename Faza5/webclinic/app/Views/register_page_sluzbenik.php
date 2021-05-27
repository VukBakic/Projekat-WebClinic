<?= $this->extend('layouts/basic_layout') ?>
<?= $this->section('navbar') ?>
    <?= $this->include('layouts/partials/guest_navbar') ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section id="controlpanel" class="controlpanel kontrola-forme section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Kreiranje novog naloga</h2>
          <p>Popunjavanjem ove forme otvarate nalog klijentu u klinici.</p>
        </div>

        <div class="row">
          <div class="col-12 mt-5 mt-lg-0 d-flex align-items-stretch">
          <?= form_open('sluzbenik/register',['class' => 'php-email-form'])?>
          
           
              <div class="row w-50 mx-auto">
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
                <div class="form-group col-12">
                  <label for="name">Broj lične karte</label>
                  <input type="email" class="form-control" name="email" id="email" required="">
                </div>
                <div class="form-group col-12">
                  <label for="pol">Pol</label>
                  <select class="form-select" name="pol" id="pol">
                    <option selected="" value="1">Odaberite pol klijenta</option>
                    <option value="2">Muški</option>
                    <option value="3">Ženski</option>
                  </select>
                </div>
                <div class="form-group col-12">
                  <label for="lekar">Odaberite lekara</label>
                  <select class="form-select" name="lekar" id="lekar">
                    <option selected="" value="1">Dr. Marko Markovic</option>
                    <option value="2">Dr. Petar Petrovic</option>
                    <option value="3">Dr. Marija Maric</option>
                  </select>
                </div>
                <div class="form-group col-12">
                  <label for="name">Kontakt telefon</label>
                  <input type="tel" class="form-control" name="email" id="email" required="">
                </div>
                <div class="form-group col-12">
                  <label for="name">Email adresa</label>
                  <input type="tel" class="form-control" name="email" id="email" required="">
                </div>
                <div class="form-group col-9">
                  <label for="name">Šifra</label>
                  <input type="password" class="form-control" name="email" id="email" required="">
                </div>
                <div class="text-center col-3 my-auto">
                  <button class="cstm-form-btn">Generiši</button>
                </div>
              </div>

              <div class="text-center">
                <button type="submit">Kreiraj nalog</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>