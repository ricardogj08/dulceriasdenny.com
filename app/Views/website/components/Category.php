<!-- Muestra el preview de una categoría de dulces -->
<article class="w-full">
    <!-- URL de la categoría -->
    <a href="">
        <figure class="flex items-center justify-center max-w-[120px] mx-auto">
            <!-- Imagen de la categoría -->
            <img
                src="<?= base_url($category['image']) ?>"
                alt="Category <?= esc($category['name']) ?>"
                class="w-full h-full object-cover mr-4"
            >

            <!-- Nombre de la categoría -->
            <figcaption class="md:text-lg text-denny-dark-400">
                <?= esc($category['name']) ?>
            </figcaption>
        </figure>
    </a>
</article>
