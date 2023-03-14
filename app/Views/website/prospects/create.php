<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
    <title>
        Gracias | Dulcerías Denny
    </title>
<?= $this->endSection() ?>


<!-- Content -->
<?= $this->section('content') ?>
<main class="w-full h-screen grid place-items-center bg-gradient-to-br from-denny-blue-200 to-denny-blue-400 text-white relative">
    <div class="text-center self-end">
        <h1 class="text-5xl font-black mb-2">¡GRACIAS!</h1>
        <p class="text-lg">Tu mensaje se envió correctamente, en breve nos pondremos en contacto contigo.</p>
        <div class="flex justify-center mt-4">
            <a href="<?= url_to('website.pages.home') ?>" class="py-2 px-3 bg-denny-pink-400 text-white rounded-3xl min-w-[200px] inline-flex justify-center">Regresar</a>
        </div>
    </div>
    <picture class="inline-block min-w-[280px] max-w-[550px] lg:w-[50%] self-end">
        <img src="<?= base_url('images/prospects/gracias.webp') ?>" alt="Dulcerías Denny - Dulces" class="w-full object-cover">
    </picture>
</main>
<?= $this->endSection() ?>
