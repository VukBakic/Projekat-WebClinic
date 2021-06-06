<!-- author Igor 702/17-->
<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>


<section id="pitanja" class="pitanja kontrola-forme section-bg">
    <div class="container" data-aos="fade-up">
        <?php
        $authorization = service("authorization");
        if ($authorization->isKlijent() || $authorization->isGost())
            echo view('layouts/partials/gost_klijent_pitajtenas');
        else if ($authorization->isLekar())
            echo view('layouts/partials/lekar_odgovorite_klijentima')
            ?>
        <?= $this->include('layouts/partials/flash_msg') ?>
        
        <div class="row lista styledlist">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <?php foreach ($pitanja as $p): ?> 

                        <div class="col-12 mt-3">

                            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                                <div class="member-info">
                                    <div class="mb-4 d-flex justify-content-between">
                                        <p>Pitanje iz oblasti: <?= $p->getNazivstruke()->getNazivstruke() ?></p>
                                        <div class="text-center">


                                            <?php
                                            if (service("authorization")->isLekar()) {

                                                if ($p->getIdlekar() != null)
                                                    echo '<a disabled="" class="cstm-form-btn disabled" href="#">Odgovoreno</a>';
                                                else {
                                                    $lekarid = session()->get("user_id");
                                                    $lekar = $lekarrep->find($lekarid);

                                                    if (!$lekar->odgovoranZa($p))
                                                        echo '<a disabled="" class="cstm-form-btn disabled" href="#">Odgovori</a>';
                                                    else {

                                                        echo "<a class=\"cstm-form-btn\" href=\"lekar/odgovaranje?idpitanje=" . $p->getIdpitanje() . "\"   >Odgovori</a>";
                                                        
                                                    }
                                                }
                                            }
                                            ?>


                                        </div>
                                    </div>
                                    <h4><?= $p->getImeprezimep() . ($p->getGostpitao() ? '(Gost)' : '(Klijent)') ?></h4>
                                    <span><?= $p->getTekstpitanja() ?></span>

                                    <div class="d-flex mt-3">

                                        <div class="ms-3">
                                            <h4><?= $p->getImeprezimelekara() ?></h4>
                                            <p>
                                                <?= $p->getOdgovor() ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class ="row">
            <?= $pager->makeLinks($num, 2, $brpitanja, "pagination_link", 2) ?>
        </div>
    </div>


</section>






<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="<?php echo site_url("js/register.js"); ?>"></script>
<?= $this->endSection() ?>
