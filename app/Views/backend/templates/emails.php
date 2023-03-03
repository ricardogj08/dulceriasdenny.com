<?php

use CodeIgniter\I18n\Time;

$year = Time::now()->getYear();
?>

<?= $this->extend('backend/templates/default') ?>

<?= $this->section('head') ?>
    <!-- Plantilla para todos los emails -->

    <!-- Sección de etiquetas agregadas al head -->
    <?= $this->renderSection('head') ?>

    <!-- Hojas de estilo -->
    <style>
        <?= file_get_contents(FCPATH . 'css/backend.css') ?>
    </style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="bg-base-200 flex flex-col justify-center items-center min-h-screen">
        <div class="container max-w-2xl">
            <!-- Sección del contenido agregado al email -->
            <div class="bg-base-100 p-8 rounded shadow-xl">
                <!-- Logo de la empresa -->
                <div class="pb-8">
                    <a href="<?= url_to('website.pages.home') ?>" target="_blank">
                        <img
                            src="https://picsum.photos/1920/1080"
                            alt="Logo"
                            class="h-12 w-auto object-cover"
                        >
                    </a>
                </div>
                <!-- Fin del logo de la empresa -->

                <?= $this->renderSection('content') ?>
            </div>
            <!-- Fin de la sección del contenido agregado al email -->

            <!-- Pie de página del email -->
            <div class="footer footer-center p-8 text-base-content">
                <div>
                    <p>
                        Copyright &copy <?= esc($year === '2023' ? '2023' : "2023-{$year}") ?>
                        - Todos los derechos reservados por<br>
                        <a href="<?= url_to('website.pages.home') ?>" target="_blank" class="hover:font-medium">
                            <?= esc(setting()->get('App.general', 'company')) ?>
                        </a>
                    </p>
                </div>
            </div>
            <!-- Fin del pie de página del email -->
        </div>
    </div>
<?= $this->endSection() ?>
