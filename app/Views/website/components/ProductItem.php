<article class="max-w-[250px] text-center flex flex-col justify-between">
  <picture class="max-h-44 max-w-[220px]">
    <img src="<?= esc($product['imgSrc']) ?>" alt="Producto - <?= esc($product['name']) ?>" class="w-full h-full object-cover aspect-square">
  </picture>
  <div class="text-center mt-1">
    <p class="font-bold"><?= esc($product['name']) ?></p>
    <?php if($product['quantity']) : ?>
      <p class="font-medium"><?= esc($product['quantity']) ?></p>
    <?php endif; ?>
    <p class="font-medium">
      <?php if(isset($product['prevPrice'])) : ?>
        <span class="text-denny-pink-400 line-through">$<?= esc($product['prevPrice']) ?></span>
      <?php endif; ?>
      <span class="text-denny-blue-300">$<?= esc($product['price']) ?></span>
    </p>
  </div>
  <?php if($type == 'primary') : ?>
        <a href="/interna" class="w-3/5 sm:w-3/4 md:w-1/2 mx-auto inline-block mt-4 bg-denny-blue-100 text-white rounded-3xl py-2 px-3 transition-colors hover:bg-denny-blue-300 delay-100" role="button">Me interesa</a>
  <?php else : ?>
      <a href="/interna" class="w-3/5 md:w-1/2 mx-auto inline-block mt-4 text-denny-pink-400 border-denny-pink-400 border rounded-3xl py-2 px-3 transition-colors hover:bg-denny-pink-400 hover:text-white" role="button">Me interesa</a>
  <?php endif; ?>
</article>

