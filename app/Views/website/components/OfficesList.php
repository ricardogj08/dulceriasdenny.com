<ul class="list__offices grid gap-y-4 <?= esc(($idOffice !== 1) ? 'sr-only' : '') ?>" data-listid="<?= esc($idOffice) ?>">
    <?php foreach ($officesList as $itr => $office) : ?>
        <li>
            <?= $this->setVar('office', $office)->include('website/components/Office') ?>
        </li>
    <?php endforeach ?>
</ul>
<style>
    .isHidden {
        visibility: collapse;
        max-height: 0;
    }
</style>
