<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>

<section id="pitanja" class="pitanja kontrola-forme section-bg">
      <div class="container" data-aos="fade-up">
       <?php 
    $authorization = service("authorization");
    if( $authorization->isKlijent() || $authorization->isGost())
      echo view('layouts/partials/gost_klijent_pitajtenas'); 
    
    ?>

        <div class="row lista styledlist">
          <div class="container" data-aos="fade-up">
            <div class="row">
              <div class="col-12">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                  <div class="member-info">
                    <h4>Aleksa Aleksić</h4>
                    <span>Poštovani, koja je cena odredjene hirurške
                      intervencije?</span>

                    <div class="d-flex mt-3">
                      <div class="emloyee-avatar">
                        <img src="img/team/team-1.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="ms-3">
                        <h4>Dr. Petar Petrović</h4>
                        <p>
                          Poštovani Aleksa, najbolje bi bilo da nazovete kliniku
                          direktno kako bi saznali cenu.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-3">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                  <div class="member-info">
                    <h4>Mihajlo Mihajlović</h4>
                    <span>Pozdrav, imam čudne promene na koži da li bi neko od
                      dermatologa mogao da mi kaže šta je u pitanju?</span>

                    <div class="d-flex mt-3">
                      <div class="emloyee-avatar">
                        <img src="img/team/team-2.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="ms-3">
                        <h4>Dr. Marija Marić</h4>
                        <p>
                          Poštovani, bez detaljnijeg pregleda ne mogu da Vam dam
                          dijagnozu. Najbolje bi bilo da zakažete pregled u
                          našoj klinici.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="<?php echo site_url("js/register.js"); ?>"></script>
<?= $this->endSection() ?>
