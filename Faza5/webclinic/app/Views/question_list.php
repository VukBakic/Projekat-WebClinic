<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>

<section id="pitanja" class="pitanja kontrola-forme section-bg">
    <div class="container" data-aos="fade-up">
        <?php
        $authorization = service("authorization");
        if ($authorization->isKlijent() || $authorization->isGost())
            echo view('layouts/partials/gost_klijent_pitajtenas');
        ?>

        <div class="row lista styledlist">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <?php foreach ($pitanja as $pitanje): ?>

                        <div class="col-12">
                            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                                <div class="member-info">
                                    <h4><?= $pitanje->getImeprezimep() ?></h4>
                                    <span><?= $pitanje->getTekstpitanja() ?></span>

                                    <div class="d-flex mt-3">

                                        <div class="ms-3">
                                            <h4><?= $pitanje->getImeprezimelekara() ?></h4>
                                            <p>
                                                <?= $pitanje->getOdgovor() ?>
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
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="<?php echo site_url("js/register.js"); ?>"></script>
<?= $this->endSection() ?>
