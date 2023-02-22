<?php
$lang = service('request')->getLocale();
?>

<!doctype html>
<html lang="<?= esc($lang) ?>">
<head>
    <!-- Plantilla base para todas las páginas del sitio web -->

    <!-- Meta etiquetas generales -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Declaración de la URL preferida de la página web -->
    <link rel="canonical" href="<?= current_url() ?>" hreflang="<?= esc($lang) ?>">

    <!-- Hojas de estilos -->
    <link rel="stylesheet" href="<?= base_url('css/website.css') ?>">

    <!-- Sección de etiquetas del head -->
    <?= $this->renderSection('head') ?>
</head>

<body>
    <!-- Sección del contenido de la página web -->
    <?= $this->renderSection('content') ?>

    <!-- Sección de scripts de javascript -->
    <?= $this->renderSection('javascript') ?>
</body>
</html>
