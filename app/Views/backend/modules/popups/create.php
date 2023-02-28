<?= $this->extend('backend/templates/dashboard') ?>

<?= $this->section('head') ?>
    <title>
        Pop Ups | Nuevo
    </title>

    <meta
        name="description"
        content="Ingresa los datos de publicación del Pop Up."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Agrega un nuevo Pop Up
            </h1>
            <h2 class="text-sm">
                Ingresa los datos de publicación del Pop Up.
            </h2>
        </div>

        <!-- Botón de retroceso -->
        <label for="modal-confirm" class="btn gap-2">
            <i class="ri-arrow-left-circle-line text-xl"></i>
            Volver
        </label>
    </div>

    <div class="divider"></div>

    <!-- Formulario de registro del Pop Up -->
    <?= form_open(url_to('backend.modules.popups.create')) ?>
        <div class="flex flex-col gap-y-2">
            <!-- Campo del nombre -->
            <div class="form-control w-full">
                <label for="name" class="label">
                    <span class="label-text">
                        Nombre:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Escribe el nombre del Pop Up"
                        class="input input-bordered input-primary w-full"
                    >
                    <button type="button" aria-label="Campo del nombre del Pop Up" class="btn btn-primary btn-square">
                        <i class="ri-edit-2-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('name') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del nombre -->

            <!-- Campo de la imagen del Pop Up -->
            <div class="form-control w-full">
                <label for="image" class="label">
                    <span class="label-text">
                        Imagen:
                    </span>
                </label>
                <input
                    type="file"
                    name="image"
                    id="image"
                    class="file-input file-input-bordered file-input-primary w-full"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('image') ?>
                    </span>
                </label>
            </div>
            <!-- Fin de la imagen del Pop Up -->

            <!-- Campo de la fecha de término -->
            <div class="form-control">
                <label for="finished_at" class="label">
                    <span class="label-text">
                        Fecha de programación <span class="italic">(opcional)</span>:
                    </span>
                </label>
                <input
                    type="date"
                    name="finished_at"
                    id="finished_at"
                    class="input input-bordered input-secondary w-full"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('finished_at') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de la fecha de término -->

            <!-- Campo de activación -->
            <div class="form-control">
                <label class="cursor-pointer label w-52">
                    <span class="label-text">
                        Habilitar <span class="italic">(opcional)</span>
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
                        <?= validation_show_error('active') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de activación -->

            <!-- Botones de confirmación -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-end gap-2">
                <input type="submit" value="Guardar" class="btn btn-primary">

                <label for="modal-confirm" class="btn btn-secondary">
                    Cancelar
                </label>
            </div>
        </div>
    <?= form_close() ?>
    <!-- Fin del formulario de registro del Pop Up -->

    <!-- Modal de confirmación -->
    <?= $this->setData([
        'id'        => 'modal-confirm',
        'routeName' => 'backend.modules.popups.index',
        'message'   => '¿Deseas cancelar el registro del nuevo Pop Up?',
    ], 'html')->include('backend/components/modal-confirm') ?>
<?= $this->endSection() ?>
