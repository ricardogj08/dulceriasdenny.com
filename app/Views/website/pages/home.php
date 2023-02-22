<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
    <title></title>

    <meta name="description" content="">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?= $this->include('website/components/navbar') ?>

    <?= $this->include('website/components/footer') ?>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>

<?= $this->endSection() ?>
