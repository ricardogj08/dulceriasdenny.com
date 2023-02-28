<?= $this->extend('backend/templates/dashboard') ?>

<?= $this->section('head') ?>
    <title>
        Modificar | Facebook
    </title>

    <meta
        name="description"
        content="Modifica o actualiza los datos de la red social."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Facebook
            </h1>
            <h2 class="text-sm">
                Modifica o actualiza los datos de la red social.
            </h2>
        </div>

        <!-- Botón de retroceso -->
        <label for="modal-confirm" class="btn gap-2">
            <i class="ri-arrow-left-circle-line text-xl"></i>
            Volver
        </label>
    </div>

    <div class="divider"></div>

    <!-- Formulario de modificación de la red social -->
    <?= form_open(url_to('backend.modules.social-networks.update', 1)) ?>
        <div class="flex flex-col gap-y-2">
            <div class="form-control w-full">
                <!-- Campo del link -->
                <label for="link" class="label">
                    <span class="label-text">
                        Link:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="url"
                        name="link"
                        id="link"
                        placeholder="Escribe el link de la red social"
                        class="input input-bordered input-secondary w-full"
                    >
                    <button type="button" aria-label="Campo del link de la red social" class="btn btn-secondary btn-square">
                        <i class="ri-links-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('link') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del link -->

            <!-- Campo de activación -->
            <div class="form-control">
                <label class="cursor-pointer label w-36">
                    <span class="label-text">
                        Habilitar
                    </span>
                    <input
                        type="checkbox"
                        name="active"
                        value="active"
                        class="toggle toggle-secondary"
                        checked
                    >
                </label>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('link') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de activación -->

            <!-- Botones de confirmación -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-end gap-2">
                <label for="modal-submit" class="btn btn-primary">
                    Guardar
                </label>

                <label for="modal-confirm" class="btn btn-secondary">
                    Cancelar
                </label>
            </div>
        </div>

        <!-- Modal de submit -->
        <?= $this->setData([
            'id'      => 'modal-submit',
            'message' => '¿Deseas guardar los cambios?',
        ])->include('backend/components/modal-submit') ?>
    <?= form_close() ?>
    <!-- Fin del formulario de modificación de la red social -->

    <!-- Modal de confirmación -->
    <?= $this->setData([
        'id'        => 'modal-confirm',
        'routeName' => 'backend.modules.social-networks.index',
        'message'   => '¿Deseas cancelar las modificaciones de la red social?',
    ], 'html')->include('backend/components/modal-confirm') ?>
<?= $this->endSection() ?>
