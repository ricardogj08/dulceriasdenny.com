<!-- Muestra el preview de un producto -->
<article class="max-w-[250px] text-center flex flex-col justify-between">
    <picture class="max-h-44 max-w-[220px]">
        <!-- Imagen del producto -->
        <img
            src="<?= esc($product['imgSrc']) ?>"
            alt="Producto - <?= esc($product['name']) ?>"
            class="w-full h-full object-cover aspect-square"
        >
    </picture>

    <div class="text-center mt-1">
        <!-- Nombre del producto -->
        <p class="font-bold">
            <?= esc($product['name']) ?>
        </p>

        <!-- Stock del producto -->
        <?php if ($product['quantity']): ?>
            <p class="font-medium">
                <?= esc($product['quantity']) ?>
            </p>
        <?php endif ?>

        <p class="font-medium">
            <!-- Rebaja del precio del producto -->
            <?php if (isset($product['prevPrice'])): ?>
                <span class="text-denny-pink-400 line-through">
                    $<?= esc($product['prevPrice']) ?>
                </span>
            <?php endif ?>

            <!-- Precio del producto -->
            <span class="text-denny-blue-300">
                $<?= esc($product['price']) ?>
            </span>
        </p>
    </div>

    <!-- Botón de enlace a los detalles del producto -->
    <a
        href="<?= url_to('website.products.show', 'test') ?>"
        class="w-3/5 md:w-1/2 mx-auto inline-block mt-4 rounded-3xl py-2 px-3 transition-colors <?= $type === 'primary' ? 'sm:w-3/4 bg-denny-blue-100 text-white hover:bg-denny-blue-300 delay-100' : 'text-denny-pink-400 border border-denny-pink-400 hover:bg-denny-pink-400 hover:text-white' ?>"
        role="button"
    >
        Me interesa
    </a>
</article>
