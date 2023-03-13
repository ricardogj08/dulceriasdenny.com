<div class="grid grid-cols-[repeat(auto-fit,minmax(120px,1fr))] justify-items-center gap-x-5 gap-y-12 mt-8 mb-10">
    <?php foreach ($brands as $itr => $brand) : ?>
        <div class="max-w-[120px]">
            <?= $this->setVar('brand', $brand)->setVar('isNameVisible', $isNameVisible)->include('website/components/Brand') ?>
        </div>
    <?php endforeach ?>
</div>
