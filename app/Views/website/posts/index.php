<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
<title>★ Blog de Dulcerías Denny | Todo sobre Dulces</title>
<meta name="description" content="¡Deslúmbrate con nuestros tips y recetas con Dulces! Nuestros 30 años de experiencia nos respaldan para aconsejarte sobre caramelos, chocolates, y más.">
<?= $this->endSection() ?>

<!-- JS -->
<?= $this->section('javascript') ?>
<script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<script src="<?= base_url('js/components/parallax.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>
<?= $this->include('website/components/Header') ?>
<main class="">
    <!-- HEADER BLOG -->
    <header class="relative bg-blog-background bg-cover bg-no-repeat bg-center min-h-[380px] bg-slate-200">
        <div class="container p-4 grid place-items-center absolute bottom-0 left-1/2 -translate-x-1/2 min-h-[30vh] bg-white text-center">
            <h1 class="text-denny-dark-500 font-black text-2xl sm:text-3xl">Blog de Dulcerías Denny</h1>
            <h2 class="text-denny-blue-300 font-medium text-lg mt-2 mb-4">Todo lo que necesitas saber sobre Dulces</h2>
            <p class="text-denny-dark-400 w-4/5 mx-auto">En este blog encontrarás la información más actual, así como tips y recomendaciones sobre todo lo relacionado con el mundo de los dulces.</p>
        </div>
    </header>
    <div class="container">

        <!-- Blog's POSTS -->
        <section class="my-16 grid gap-12">
            <?= $this->include('website/components/BlogPost') ?>
            <?= $this->include('website/components/BlogPost') ?>
            <?= $this->include('website/components/BlogPost') ?>
        </section>
    </div>
</main>
<?= $this->include('website/components/Footer') ?>
<?= $this->endSection() ?>
