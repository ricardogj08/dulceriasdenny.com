<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
    <title>

    </title>

    <meta
        name="description"
        content=""
    >
<?= $this->endSection() ?>

<!-- JS -->
<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>
    <?= $this->include('website/components/Header') ?>
    <main class="my-8">
        <div class="container">
            <!-- Product section -->
            <section>
                <!-- This could be a product component different as the Product maybe this would be ProductDetails component -->
                <article>
                    <div class="grid lg:grid-cols-2 lg:grid-rows-[100px_auto] items-center">
                        <picture class="w-1/2 mx-auto max-w-sm min-w-[200px] lg:w-1/2 lg:row-start-1 lg:row-end-3 lg:col-span-1">
                            <img src="/images/products/product.webp" alt="Panditas - Dulcerias Denny" class="w-full object-cover">
                        </picture>
                        <div class="text-denny-dark-400 lg:mt-2 lg:w-1/2 row-start-1 row-end-2">
                            <hgroup>
                                <h1 class="text-denny-dark-500 font-black text-3xl">Panditas clásicos</h1>
                                <p class="text-base"><small>Marca Ricolino</small></p>
                            </hgroup>
                        </div>
                        <div class="lg:row-start-2 lg:row-end-3">
                            <p class="flex flex-col mb-2">
                                <small class="text-denny-pink-400 line-through font-medium">$160.00</small>
                                <span class="text-denny-blue-300 font-black text-xl">$120.00</span>
                            </p>
                            <p><strong>120pzas</strong></p>
                            <h2>Gomitas sabores frutales: naranja, cereza, limón, piña. Paquete con 20 piezas de 15 gramos cada uno. Peso del paquete: 330 gramos.</h2>
                            <p class="my-2"><strong>SKU:</strong>00000</p>
                            <div class="my-4 p-3 sm:bg-denny-light-200 rounded-full flex flex-col justify-center sm:flex-row sm:justify-between">
                                <div class="text-denny-blue-300 rounded-full overflow-hidden border border-slate-300 w-1/5 grid grid-cols-3 min-w-[120px] mx-auto sm:mx-0">
                                    <button class="p-2 border-r border-slate-300">-</button>
                                    <span class="p-2 font-bold bg-white inline-block text-center">1</span>
                                    <button class="p-2 border-l border-slate-200">+</button>
                                </div>
                                <span class="text-denny-dark-400 font-bold inline-flex items-center mx-auto my-4 sm:mr-auto sm:ml-4 sm:my-0">$120.00</span>
                                <button id="btn-banner-contact" class="bg-denny-pink-400 text-white py-2 px-2 rounded-full w-1/3 mx-auto sm:w-auto sm:mx-0 transition-opacity hover:opacity-80">
                                    Me interesa
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 lg:mt-8">
                        <h3 class="text-denny-dark-500 font-black">Información adicional</h3>
                        <table class="block mt-2">
                            <tbody class="inline-block w-full">
                                <tr class="text-left flex justify-between py-2 border-b-slate-200 border-b">
                                    <th>Peso</th>
                                    <td class="">0.275 kg</td>
                                </tr>
                                <tr class="text-left flex justify-between py-2">
                                    <th>Dimensiones</th>
                                    <td class="">31x27x4 cm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
            </section>

            <!-- SHARE COMPONENT -->
            <section class="min-h-[25vh] grid place-items-center my-8">
                <?= $this->include('website/components/Share') ?>
            </section>

            <!-- Reccomendations products  -->
            <section class="mt-8 py-5">
                <div class="container">
                    <h2 class="font-bold text-denny-dark-500 text-center text-xl">También puede interesarte</h2>
                    <div class="favorites__wrapper mt-8 grid grid-cols-[repeat(auto-fit,minmax(150px,1fr))] gap-x-4 gap-y-5 justify-center justify-items-center">
                        <?php foreach ($recommendations as $itr => $product) : ?>
                            <?= $this->setVar('product', $product)->setVar('type', 'primary')->include('website/components/ProductItem') ?>
                        <?php endforeach ?>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?= $this->include('website/components/Footer') ?>
<?= $this->endSection() ?>
