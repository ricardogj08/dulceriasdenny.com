<article class="flex flex-col md:flex-row items-center justify-center">
    <picture class="max-w-[350px] min-w-[200] w-1/2 inline-block">
        <img src="<?= base_url($season['imgSrc']) ?>" alt="Temporada - <?= esc($season['name']) ?>" class="w-full object-cover">
    </picture>
    <div class="mt-5 text-center md:w-[40%] md:text-left md:mt-0 md:ml-10">
        <h3 class="text-denny-blue-300 font-black text-xl"><?= esc($season['name']) ?></h3>
        <p class="text-denny-dark-400 font-medium text-lg mb-4 md:mb-8"><?= esc($season['description']) ?></p>
        <a href="#" role="button" class="inline-block py-2 px-3 bg-denny-blue-100 text-white rounded-3xl hover:bg-denny-blue-300 transition-colors delay-100">Ir al Catálogo</a>
    </div>
</article>
