<?= $this->extend('layouts/basic_layout') ?>

<?= $this->section('content') ?>

<section id="pitanja" class="pitanja kontrola-forme section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Postavite nam pitanje</h2>
            <p>
                Postavite pitanje nekom od naših lekara specijalista. Na Vaša
                pitanja se trudimo da odgovorimo u najkraćem roku.
            </p>
        </div>

        <div class="row lista pitanja">
            <div class="col-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                <?= form_open('pitanja/klijent/pitaj', ['class' => 'php-email-form w-100']) ?>
               
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Naslov</label>
                            <input type="text" class="form-control" name="subject" id="subject" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="struka">Oblast medicine</label>
                            <select class="form-select" name="struka" id="struka">
                                
                                <?php foreach ($struka as $s): ?>
                                
                                   <option value="<?=$s->getNazivstruke()?>"><?= $s->getNazivstruke() ?></option>

                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Pitanje</label>
                        <textarea class="form-control" name="message" rows="10" required=""></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit">Posalji pitanje</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="<?php echo site_url("js/register.js"); ?>"></script>
<?= $this->endSection() ?>
