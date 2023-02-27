<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
<title>▷ Dónde Comprar Dulces al Mayoreo para Dulcerías o Negocios</title>
<meta name="description" content="Ubica la Dulcería más cercana y encuentra los dulces que estás buscando. Sucursales en Celaya, León, Querétaro, Irapuato, Salamanca y más.">
<?= $this->endSection() ?>

<!-- JS -->
<?= $this->section('javascript') ?>
<script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<script src="<?= base_url('js/components/offices.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>
<?= $this->include('website/components/Header') ?>
<main>
    <!-- Principal copy -->
    <section class="py-8 min-h-[350px] grid place-items-center bg-denny-light-200 text-denny-dark-400 ">
        <div class="container text-center">
            <h1 class="text-denny-dark-500 font-black text-2xl">Dónde comprar Dulces al Mayoreo</h1>
            <h2 class="text-denny-blue-300 font-black text-lg mt-2">Conoce nuestras sucursales</h2>
            <div class="mt-6 grid gap-y-4 max-w-5xl mx-auto">
                <p>En Dulcerias Denny contamos con todo lo necesario para adornar y endulzar tu tiendita, dulcería cooperativa, fiesta, evento, o reunión… lo que busques, ¡nosotros lo tenemos!</p>
                <p>Visítanos en alguna de nuestras sucursales distribuidas a lo largo del bajío y encuentra al mejor precio una amplia variedad de más de 2,000 productos como: chocolates, caramelos, botanas, gomitas y mucho, pero mucho más.
                </p>
            </div>
        </div>
    </section>

    <!-- MAP -->
    <div class="my-16 container md:flex md:justify-between">
        <!-- Map iframe from google maps -->
        <section class="relative min-h-[450px] max-h-[450px] md:w-3/5 bg-slate-200 transition-all delay-100">
            <iframe id="iframe-map" src="https://www.google.com/maps/embed?pb=<?= esc($initialMapUrl) ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="absolute w-full h-full left-0 top-0"></iframe>
        </section>
        <!-- Maps sucursales -->
        <section class="map mt-8 py-4 md:w-1/3 md:mb-auto md:mt-0">
            <!-- Controls maps -->
            <div class="map__controls">
                <div class="flex gap-x-2 flex-wrap">
                    <?php foreach ($cities as $itr => $city) : ?>
                        <button data-btnOfficesId="<?= esc($itr + 1) ?>" class="btn__offices bg-denny-pink-400 text-white py-2 px-3 rounded-full text-sm sm:text-md hover:bg-denny-light-200 hover:text-denny-blue-300 transition-colors delay-100">
                            <?= esc($city) ?>
                        </button>
                    <?php endforeach ?>
                </div>
                <div class="mt-5">
                    <?php foreach ($offices as $itr => $officesPerCity) : ?>
                        <?= $this
                            ->setVar('officesList', $officesPerCity['offices'])
                            ->setVar('idOffice', $officesPerCity['id'])
                            ->include('website/components/OfficesList') ?>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </div>
</main>
<?= $this->include('website/components/Footer') ?>
<?= $this->endSection() ?>
