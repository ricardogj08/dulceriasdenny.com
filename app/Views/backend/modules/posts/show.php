<?= $this->extend('backend/templates/dashboard') ?>

<?= $this->section('head') ?>
    <title>
        Blog | Artículo
    </title>

    <meta
        name="description"
        content="Información y datos del artículo."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Artículo
            </h1>
            <h2 class="text-sm">
                Información y datos del artículo.
            </h2>
        </div>

        <!-- Botón de retroceso -->
        <a
            href="<?= url_to('backend.modules.posts.index') ?>"
            class="btn gap-2"
        >
            <i class="ri-arrow-left-circle-line text-xl"></i>
            Volver
        </a>
    </div>

    <div class="divider"></div>

    <!-- Tabla de datos del prospecto -->
    <div class="pb-4">
        <div class="overflow-x-auto">
            <table class="table table-zebra table-compact lg:table-normal w-full">
                <tr>
                    <th>Título:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>URL:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Portada:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Resumen:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Estado de publicación:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Fecha de programación:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Fecha de registro:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Fecha de modificación:</th>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row lg:items-center justify-end gap-3">
        <!-- Formulario para eliminar el artículo -->
        <?= form_open(url_to('backend.modules.posts.delete', 1)) ?>
            <label
                for="modal-submit"
                class="btn btn-error btn-outline w-full"
            >
                Eliminar
            </label>

            <?= $this->setData([
                'id'      => 'modal-submit',
                'message' => '¿Deseas eliminar este artículo?',
            ])->include('backend/components/modal-submit') ?>
        <?= form_close() ?>
        <!-- Fin del formulario para eliminar el artículo -->

        <!-- Botón para editar los datos del artículo -->
        <a
            href="<?= url_to('backend.modules.posts.update', 1) ?>"
            class="btn btn-info btn-outline"
        >
            Modificar
        </a>
        <!-- Fin del botón para editar los datos del artículo -->
    </div>
<?= $this->endSection() ?>
