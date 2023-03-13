<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
<title>★ Venta de Dulces Día de Muertos y Halloween | Dulcerías Denny</title>
<meta name="description" content="Encuentra la más amplia variedad de chocolates, caramelos  y botanas que tenemos para celebrar Halloween y Día de muertos. ¡Endulza tu vida!'">
<?= $this->endSection() ?>

<!-- JS -->
<?= $this->section('javascript') ?>
<script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>
<?= $this->include('website/components/Header') ?>
<main class="">
    <!-- HEADER Seasons products -->
    <header class="min-h-[180px] grid place-items-center bg-denny-light-200">
        <div class="container flex flex-col sm:flex-row">
            <div class="flex-1 mb-4 sm:mb-0">
                <?= $this
                    ->setVar('options', $seasons)
                    ->include('website/components/Dropdown') ?>
            </div>
            <div class="w-full sm:w-2/3 sm:ml-8">
                <?= $this->include('website/components/Searcher') ?>
            </div>
        </div>
    </header>

    <div class="container py-8">
        <!-- COPY -->
        <section class="flex flex-col sm:flex-row justify-between gap-4 text-center my-8 items-center">
            <picture class="w-1/2 min-w-[225px] sm:w-1/5  inline-block">
                <img src="/images/seasons/dia-muertos.webp" alt="Dia de muertos - Dulcerias Denny" class="w-full object-cover">
            </picture>
            <div class="w-3/4">
                <h1 class="text-denny-dark-500 text-2xl font-black">Venta de Dulces para Día de Muertos y Halloween</h1>
                <h2 class="mt-4 text-denny-blue-300 text-xl font-black">Sorpréndete con nuestro amplio surtido de dulces para celebrar la noche del Día de Muertos o Halloween</h2>
                <p class="text-denny-dark-400">Endulza una noche tan terrorífica con nuestra gran variedad de chocolates, dulces y botanas que tenemos para ti.</p>
                <h3 class="mt-10 text-denny-dark-500 text-xl font-black">Los mejores dulces para regalar o poner en tu ofrenda</h3>
            </div>
        </section>

        <!-- List of products results -->
        <section class="my-6 grid grid-cols-1 sm:grid-cols-[1fr_3fr]">
            <!-- Controls filter -->
            <aside class="my-4 sm:my-0 flex flex-col gap-y-3">
                <?= $this
                    ->setVar('listName', 'Categorias')
                    ->setVar('checkList', $categories)
                    ->include('website/components/CheckList') ?>
                <?= $this
                    ->setVar('listName', 'Marcas')
                    ->setVar('checkList', $brands)
                    ->include('website/components/CheckList') ?>
            </aside>

            <!-- List of products -->
            <div>
                <!-- Banner promotions -->
                <a href="/promociones" class="flex justify-between p-4 text-white bg-gradient-to-r from-denny-red-100 via-red-500 to-denny-red-200 rounded-md">
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
    </div>
</main>
<?= $this->include('website/components/Footer') ?>
<?= $this->endSection() ?>
