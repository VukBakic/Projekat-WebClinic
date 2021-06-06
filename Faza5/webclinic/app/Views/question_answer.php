<!-- author Igor 702/17-->
<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>

<section id="pitanja" class="pitanja kontrola-forme section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Pitanja klijenata</h2>
            <p>Odgovorite na pitanja nasih klijenata.</p>
        </div>
        <?= $this->include('layouts/partials/flash_msg') ?>
        <div class="row lista styledlist">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member-info">
                                <div class="mb-4 d-flex justify-content-between">

                                    <p><?= $oblast ?></p>
                                </div>
                                <h4><?= $imeprezime ?></h4>
                                <span><?= $tekstpitanja ?></span>

                                <div class="d-flex mt-3">
                                    <div class="emloyee-avatar">
                                        <img src="img/team/team-2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!--   <form action="" method="post"> -->
                                    <div class="ms-3 w-80 px-3">
                                        <h4><?= $imelekara ?></h4>

                                        <div class="form-group" >
                                            <form action="odgovaranje" method="post">
                                              
                                           
                                                <label for="name">Odgovor</label>
                                                <div>
                                                    <textarea class="form-control" name="message" rows="10" required=""></textarea>
                                                </div>
                                                <div class="text-center align-self-end" id="odgdugme">
                                                    <button class="cstm-form-btn" type="submit" >Odgovori</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                    <!--   </form>-->
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

