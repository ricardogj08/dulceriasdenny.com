<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
<title>★ Venta de Chocolates por Mayoreo en Dulcerías Denny</title>
<meta name="description" content="Sorpréndete con nuestra amplia variedad de chocolates de la mejor calidad para tu negocio. ¡También tenemos chocolates para regalar en toda ocasión!">
<?= $this->endSection() ?>

<!-- JS -->
<?= $this->section('javascript') ?>
<script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>
<?= $this->include('website/components/Header') ?>
<main class="">
    <!-- HEADER -->
    <header class="min-h-[180px] grid place-items-center bg-denny-light-200">
        <div class="container flex flex-col sm:flex-row">
            <div class="flex-1 mb-4 sm:mb-0">
                <?= $this
                    ->setVar('options', $categories)
                    ->include('website/components/Dropdown') ?>
            </div>
            <div class="w-full sm:w-2/3 sm:ml-8">
                <?= $this->include('website/components/Searcher') ?>
            </div>
        </div>
    </header>

    <div class="container py-8">
        <!-- COPY -->
        <section class="text-center my-8">
            <h1 class="text-denny-dark-500 text-2xl font-black">Venta de Chocolates por Mayoreo</h1>
            <h2 class="mt-4 text-denny-blue-300 text-xl font-black">La mejor calidad y variedad en chocolates para toda ocasión</h2>
            <p class="text-denny-dark-400">Ofrecemos una amplia variedad de marcas de chocolates para tu negocio o para regalar a esa persona especial.</p>
            <h3 class="mt-10 text-denny-dark-500 text-xl font-black">Deléitate con el exquisito sabor de nuestra variedad en chocolates</h3>
        </section>

        <!-- List of products results -->
        <section class="my-8 grid grid-cols-1 sm:grid-cols-[1fr_3fr]">
            <!-- Controls filter -->
            <aside class="my-4 sm:my-0">
                <?= $this
                    ->setVar('listName', 'Marcas')
                    ->setVar('checkList', $brands)
                    ->include('website/components/CheckList') ?>
            </aside>
            <!-- List of products -->
            <div>
                <a href="<?= url_to('website.pages.promotions') ?>" class="flex justify-between p-4 text-white bg-gradient-to-r from-denny-red-100 via-red-500 to-denny-red-200 rounded-md">
                    <span class="text-white font-black">Conoce nuestras promociones del mes</span>
                    <span class="p-1 inline-flex bg-denny-light-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0D6FFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="9 6 15 12 9 18" />
                        </svg>
                    </span>
                </a>
                <div class="favorites__wrapper mt-8 grid grid-cols-[repeat(auto-fit,minmax(180px,1fr))] md:grid-cols-3 gap-x-4 gap-y-20 justify-center justify-items-center">
                    <?php foreach ($products as $itr => $product) : ?>
                        <?= $this->setVar('product', $product)->setVar('type', 'secundary')->include('website/components/ProductItem') ?>
                    <?php endforeach ?>
                </div>
            </div>
        </section>

        <!-- Pagination -->
        <section class="my-10">
            <?= $this->include('website/components/Pagination') ?>
        </section>

        <!-- More categories -->
        <section class="my-28">
            <h2 class="font-bold text-denny-blue-300 text-center text-xl">Todas las Categorias</h2>
            <?= $this
                ->setVar('initialCategories', array_slice($categories, 0, 4))
                ->setVar('restCategories', array_slice($categories, 4))
                ->include('website/components/SeeMore') ?>
        </section>
    </div>
</main>
<?= $this->include('website/components/Footer') ?>
<?= $this->endSection() ?>
