<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
<title>Error 404 | Dulcerías Denny</title>

<?= $this->endSection() ?>


<!-- Content -->
<?= $this->section('content') ?>
<main class="w-full h-screen grid place-content-center bg-gradient-to-br from-denny-blue-200 to-denny-blue-400 text-white">
    <hgroup class="text-center">
        <h1 class="text-5xl font-black mb-2">Error 404</h1>
        <p class="text-lg">Lo sentimos, no hemos encontrado la página que buscas.</p>
    </hgroup>
    <picture>
        <img src="<?= base_url('images/pages/error404/404.webp') ?>" alt="Error 404">
    </picture>
    <div class="flex justify-center mt-8">
        <a href="<?= url_to('website.pages.home') ?>" class="py-2 px-3 bg-denny-pink-400 text-white rounded-3xl min-w-[200px] inline-flex justify-center">Regresar</a>
    </div>
</main>
<?= $this->endSection() ?>
