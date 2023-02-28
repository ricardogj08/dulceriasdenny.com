<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
<title>Distribuidor de dulces, botanas y caramelos por mayoreo</title>
<meta name="description" content="Contamos con el más amplio surtido de dulces, botanas y caramelos, brindándote siempre un gran servicio y sobre todo el mejor precio. ¡Endulza tu vida!">
<?= $this->endSection() ?>

<!-- JS -->
<?= $this->section('javascript') ?>
<script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>
<?= $this->include('website/components/Header') ?>
<main>
    <!-- Hero contact page -->
    <section class="bg-denny-pink-300 md:bg-gradient-to-b from-denny-pink-100 to-denny-pink-200">
        <div class="py-8 md:py-0 container md:w-full flex flex-col md:flex-row lg:min-h-[750px]">
            <picture class="order-2 md:order-1 md:w-1/2 inline-block max-w-md mx-auto md:mx-0 lg:max-w-3xl bg-denny-pink-300">
                <img src="<?= base_url('/images/pages/about/about.webp') ?>" alt="Paleta - Dulcerias Denny" class="w-full object-cover max-w-xl">
            </picture>
            <div class="w-full md:w-1/2 md:order-2 md:-m-20 text-denny-dark-400 self-center">
                <h1 class="text-denny-dark-500 font-black text-2xl">Distribuidores de dulces, botanas y caramelos</h1>
                <h2 class="mt-2 mb-4 text-denny-blue-300 font-black text-lg">Endulza tu vida con la más amplia variedad de dulces, botanas y caramelos</h2>
                <p class="mt-6 mb-4">En Dulcería Denny nuestra misión principal es endulzar la vida de nuestros clientes, a través de una variedad de productos de calidad, con un servicio diferenciado y precios competitivos.</p>
                <p>A lo largo de nuestros mas de 30 años en el mercado, nos hemos consagrado como una empresa líder en comercialización de dulces y confitería en el Bajío, trabajando con 130 marcas diferentes y contando con más de 2,000 productos disponibles para la venta en cualquiera de nuestras 24 sucursales.</p>
            </div>
        </div>
    </section>

    <!-- Rest in container -->
    <div class="container">
        <!-- Sucursales cards -->
        <section class="my-10 py-8 lg:p-0 lg:-mt-28">
            <header class="text-center">
                <h2 class="text-denny-dark-500 font-black text-2xl">Visitanos</h2>
                <h3 class="text-denny-blue-100 font-black text-lg">Encuentra tu sucursal más cercana</h3>
            </header>
            <div class="flex gap-x-4 gap-y-10 justify-center flex-wrap mt-4">
                <article class="shadow-md p-4 rounded-xl max-w-xs bg-white">
                    <hgroup class="mb-6">
                        <h2 class="text-denny-dark-500 font-bold text-lg">Abasolo</h2>
                        <p>Lerdo de Tejada 109, Zona Centro. Abasolo Guanajuato 36970. México.</p>
                    </hgroup>
                    <a href="<?= url_to('website.pages.offices') ?>" class="py-2 px-3 bg-denny-blue-100 text-white rounded-full">Ver mapa</a>
                </article>
                <article class="shadow-md p-4 rounded-xl max-w-xs bg-white">
                    <hgroup class="mb-6">
                        <h2 class="text-denny-dark-500 font-bold text-lg">Abasolo</h2>
                        <p>Lerdo de Tejada 109, Zona Centro. Abasolo Guanajuato 36970. México.</p>
                    </hgroup>
                    <a href="<?= url_to('website.pages.offices') ?>" class="py-2 px-3 bg-denny-blue-100 text-white rounded-full">Ver mapa</a>
                </article>
                <article class="shadow-md p-4 rounded-xl max-w-xs bg-white">
                    <hgroup class="mb-6">
                        <h2 class="text-denny-dark-500 font-bold text-lg">Abasolo</h2>
                        <p>Lerdo de Tejada 109, Zona Centro. Abasolo Guanajuato 36970. México.</p>
                    </hgroup>
                    <a href="<?= url_to('website.pages.offices') ?>" class="py-2 px-3 bg-denny-blue-100 text-white rounded-full font-bold">Ver mapa</a>
                </article>
            </div>
        </section>

        <!-- Categories list -->
        <section class="mt-14 lg:mt-28 py-5">
            <div class="container">
                <h2 class="font-bold text-denny-blue-300 text-center text-2xl">Los mejores dulces, al mejor precio.</h2>
                <?= $this
                    ->setVar('initialCategories', array_slice($categories, 0, 4))
                    ->setVar('restCategories', array_slice($categories, 4))
                    ->include('website/components/SeeMore') ?>
            </div>
        </section>

        <!-- SHARE COMPONENT -->
        <section class="min-h-[25vh] grid place-items-center my-8">
            <?= $this->include('website/components/Share') ?>
        </section>
    </div>
</main>
<?= $this->include('website/components/Footer') ?>
<?= $this->endSection() ?>
