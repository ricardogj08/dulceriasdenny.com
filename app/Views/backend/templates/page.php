<?php
use CodeIgniter\Files\File;

$favicon         = 'uploads/settings/' . setting()->get('App.general', 'favicon');
$faviconMimeType = (new File(FCPATH . $favicon, true))->getMimeType();
?>

<?= $this->extend('backend/templates/default') ?>

<?= $this->section('head') ?>
    <!-- Plantilla para todas las páginas del backend que no requieren sidebar -->

    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="<?= base_url('css/backend.css') ?>">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">

    <!-- Favicon -->
    <link rel="icon" type="<?= $faviconMimeType ?>" href="<?= base_url($favicon) ?>">

    <!-- Sección de etiquetas agregadas al head -->
    <?= $this->renderSection('head') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Sección del contenido agregado a la página web -->
    <?= $this->renderSection('content') ?>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/flowbite.js') ?>"></script>

    <!-- Sección de scripts de javascript agregados a la página web -->
    <?= $this->renderSection('javascript') ?>
<?= $this->endSection() ?>
