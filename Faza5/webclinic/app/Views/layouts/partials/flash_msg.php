


<?php
$session = \Config\Services::session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashdata('success');
?>

<?php if ($errors) : ?>
    <div class="alert alert-danger" role="alert">
    <ul>
    
    <?php foreach ($errors as $error) : ?>
        <li><?= $error ?></li>
    <?php endforeach ?>
    </ul>
</div>

<?php endif; ?>



<?php if ($success) : ?>
    <div class="alert alert-success" role="alert">
        <?= esc($success) ?>
    </div>
<?php endif; ?>