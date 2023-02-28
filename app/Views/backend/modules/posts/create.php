<?= $this->extend('backend/templates/dashboard') ?>

<?= $this->section('head') ?>
    <title>
        Blog | Nuevo
    </title>

    <meta
        name="description"
        content="Publica o programa un nuevo artículo."
    >

    <link rel="stylesheet" href="<?= base_url('css/trix.css') ?>">
    <script src="<?= base_url('js/trix.js') ?>"></script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Escribe un nuevo artículo
            </h1>
            <h2 class="text-sm">
                Publica o programa un nuevo artículo.
            </h2>
        </div>

        <!-- Botón de retroceso -->
        <label for="modal-confirm" class="btn gap-2">
            <i class="ri-arrow-left-circle-line text-xl"></i>
            Volver
        </label>
    </div>

    <div class="divider"></div>

    <!-- Formulario de registro del artículo -->
    <?= form_open(url_to('backend.modules.posts.create')) ?>
        <div class="flex flex-col gap-y-2">
            <!-- Campo del título -->
            <div class="form-control w-full">
                <label for="title" class="label">
                    <span class="label-text">
                        Título:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="text"
                        name="title"
                        id="title"
                        placeholder="Escribe el título del artículo"
                        class="input input-bordered input-primary w-full"
                    >
                    <button type="button" aria-label="Campo del título del artículo" class="btn btn-primary btn-square">
                        <i class="ri-edit-2-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('title') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del título -->

            <!-- Campo de la portada -->
            <div class="form-control w-full">
                <label for="cover" class="label">
                    <span class="label-text">
                        Portada:
                    </span>
                </label>
                <input
                    type="file"
                    name="cover"
                    id="cover"
                    class="file-input file-input-bordered file-input-primary w-full"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('cover') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de la portada -->

            <!-- Campo del resumen del artículo -->
            <div class="form-control">
                <label for="excerpt" class="label">
                    <span class="label-text">
                        Resumen:
                    </span>
                </label>
                <textarea
                    name="excerpt"
                    id="excerpt"
                    class="textarea textarea-bordered textarea-secondary h-32 w-full"
                    placeholder="Escribe el resumen del artículo..."
                ></textarea>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('excerpt') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del resumen del artículo -->

            <!-- Campo de la fecha de programación -->
            <div class="form-control">
                <label for="started_at" class="label">
                    <span class="label-text">
                        Fecha de programación <span class="italic">(opcional)</span>:
                    </span>
                </label>
                <input
                    type="date"
                    name="started_at"
                    id="started_at"
                    class="input input-bordered input-secondary w-full"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('started_at') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de la fecha de programación -->

            <!-- Campo del contenido -->
            <div class="form-control">
                <label for="body" class="label">
                    <span class="label-text">
                        Contenido:
                    </span>
                </label>
                <input
                    type="hidden"
                    name="body"
                    id="body"
                    value=""
                >
                <trix-editor
                    input="body"
                    placeholder="Escribe el contenido del artículo..."
                    class="trix-content"
                ></trix-editor>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('body') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del contenido -->

            <!-- Botones de confirmación -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-end gap-2">
                <input type="submit" value="Guardar" class="btn btn-primary">

                <label for="modal-confirm" class="btn btn-secondary">
                    Cancelar
                </label>
            </div>
        </div>
    <?= form_close() ?>
    <!-- Fin del formulario de registro del artículo -->

    <!-- Modal de confirmación -->
    <?= $this->setData([
        'id'        => 'modal-confirm',
        'routeName' => 'backend.modules.posts.index',
        'message'   => '¿Deseas cancelar el registro del nuevo artículo?',
    ], 'html')->include('backend/components/modal-confirm') ?>
<?= $this->endSection() ?>
