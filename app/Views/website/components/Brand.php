<a href="" class="group inline-grid">
    <figure class="inline-block max-w-max">
        <img src="<?= base_url($brand['imgSrc']) ?>" alt="Marca - <?= esc($brand['name']) ?>" class="w-full object-cover">
        <?php if ($isNameVisible === true) : ?>
            <figcaption class="text-center mt-2 text-denny-dark-400 text-sm transition-all delay-75 group-hover:text-denny-red-200 group-hover:font-black"><?= esc($brand['name']) ?></figcaption>
        <?php endif; ?>
    </figure>
</a>
