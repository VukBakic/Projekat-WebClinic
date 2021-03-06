<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>
<section id="controlpanel" class="controlpanel kontrola-forme section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Kartoni</h2>
          <p>Izmena i pregled kartona klijenata</p>
        </div>

        <div class="row styledlist">
          <div class="col-12 my-5 mt-lg-0 d-flex align-items-stretch">

          <?= form_open('lekar/kartoni/1',['class' => 'php-email-form  w-100' ,'method'=>"get"])?>
              <div class="row w-50 mx-auto">
                <div class="form-group col-12">
                  <label for="name">Ime</label>
                  <input type="text" name="ime" class="form-control">
                </div>
                <div class="form-group col-12">
                  <label for="name">Prezime</label>
                  <input type="text" name="prezime" class="form-control">
                </div>
                <div class="form-group col-12">
                  <label for="name">JMBG</label>
                  <input type="text" name="jmbg" class="form-control">
                </div>
                <div class="form-check p-0 ms-5">
                  <input class="form-check-input h1em" type="checkbox" value="" id="flexCheckDefault" name="danas">
                  <label class="form-check-label" for="flexCheckDefault">
                    Zakazani danas
                  </label>
                </div>
              </div>

              <div class="text-center">
                <button class="cstm-form-btn" type="submit">Filtriraj</a>
              </div>
            </form>
          </div>
          <?php foreach ($klijenti as $klijent):?>
            <div class="col-12 mb-3">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-info">
                <h4><?= $klijent->getIdklijent()->getIme() ?>  <?= $klijent->getIdklijent()->getPrezime() ?></h4>
                <span>JMBG: <?= $klijent->getIdklijent()->getJmbg() ?></span>
              </div>
              <div class="d-flex justify-content-end">
                <?= anchor("lekar/karton/".$klijent->getIdklijent()->getIdk()."/1","Pogledaj",["class"=>"cstm-form-btn ms-1"]) ?>
              
              </div>
            </div>
          </div>
        

          <?php endforeach;?>
          
        </div>
        <?= $pager->makeLinks($currentPage, 2, $count, "pagination_link", 3) ?>

        
      </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>



