<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
<title>▷ Marcas de Dulces para tu Tienda | Venta por Mayoreo</title>
<meta name="description" content="Si necesitas un Distribuidor de Dulces, nosotros contamos con más de 125 marcas diferentes para surtir tu Dulcería o Negocio ¡Contáctanos!">

<?= $this->endSection() ?>

<!-- JS -->
<?= $this->section('javascript') ?>
<script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>
<?= $this->include('website/components/Header') ?>
<main class="my-16">
    <div class="container">
        <header class="text-center">
            <h1 class="text-denny-dark-500 font-black text-2xl">Marcas de Dulces para Venta por Mayoreo</h1>
            <h2 class="mt-2 mb-4 text-denny-blue-300 font-medium">Descubre nuestro amplio catálogo y selecciona tus favoritas</h2>
            <p class="text-denny-dark-400">En Dulcerías Denny trabajamos con más de 130 marcas diferentes y contamos con más de 2,000 productos disponibles para su venta en cualquiera de nuestras sucursales.</p>
        </header>
        <section class="my-16">
            <?= $this->setVar('brands', $brands)->setVar('isNameVisible', true)->include('website/components/BrandsList') ?>
        </section>
    </div>
</main>
<?= $this->include('website/components/Footer') ?>
<?= $this->endSection() ?>
