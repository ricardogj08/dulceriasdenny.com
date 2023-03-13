<fieldset class="flex flex-row sm:flex-col gap-x-2 gap-y-1 flex-wrap text-denny-dark-300">
    <legend class="text-dark-500 font-bold"><?= esc($listName) ?></legend>
    <?php foreach ($checkList as $itr => $item) : ?>
        <label for="<?= esc($item['name']) ?>">
            <input name="<?= esc($listName) ?>" type="checkbox" value="<?= esc($item['name']) ?>">
            <span><?= esc($item['name']) ?></span>
        </label>
    <?php endforeach ?>
</fieldset>
