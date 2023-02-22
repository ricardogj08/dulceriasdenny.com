<?= $this->extend('website/templates/default') ?>

<?= $this->section('head') ?>
    <!-- Plantilla para todas las páginas del sitio web que requieren Google Tag Manager -->

    <!-- Sección de etiquetas del head -->
    <?= $this->renderSection('head') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Sección del contenido de la página web -->
    <?= $this->renderSection('content') ?>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <!-- Sección de scripts de javascript -->
    <?= $this->renderSection('javascript') ?>
<?= $this->endSection() ?>
