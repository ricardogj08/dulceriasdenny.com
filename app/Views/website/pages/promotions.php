<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
    <title>
        ▷ Promoción de Dulces - Dulcerías Denny
    </title>

    <meta
        name="description"
        content="Consigue en promoción la mejor selección de dulces, caramelos y botanas para disfrutar en todo momento con tus seres queridos. ¡Endulza tu vida!"
    >
<?= $this->endSection() ?>

<!-- JS -->
<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>
    <?= $this->include('website/components/Header') ?>

    <main class="mt-8">
        <div class="container">
            <h1 class="text-[28px] font-black text-center mb-4">
                Promociones de Dulces Denny
            </h1>

            <?= $this->include('website/components/AutomaticCarousel') ?>

            <section class="mt-8">
                <hgroup class="text-center mb-8">
                    <h2 class="text-denny-blue-300 font-black text-2xl">
                        Dulces, chocolates, botanas y caramelos a buen precio
                    </h2>
                    <p class="max-w-4xl mx-auto">
                        Disfruta de nuestra gran variedad de dulces, chocolates, caramelos, gomitas y botanas que tenemos en promoción para ti. No dejes pasar más tiempo y recuerda que con Dulcerías Denny, ¡Endulza tu vida!
                    </p>
                </hgroup>
                <div class="favorites__wrapper mt-8 grid grid-cols-[repeat(auto-fit,minmax(180px,1fr))] md:grid-cols-3 gap-x-4 gap-y-20 justify-center justify-items-center">
                    <?php foreach ($products as $itr => $product) : ?>
                        <?= $this->setVar('product', $product)->setVar('type', 'secundary')->include('website/components/ProductItem') ?>
                    <?php endforeach ?>
                </div>
            </section>
        </div>
    </main>

    <?= $this->include('website/components/Footer') ?>
<?= $this->endSection() ?>
