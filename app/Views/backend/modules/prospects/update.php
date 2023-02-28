<?= $this->extend('backend/templates/dashboard') ?>

<?= $this->section('head') ?>
    <title>
        Modificar | Ricardo García Jiménez
    </title>

    <meta
        name="description"
        content="Modifica o actualiza los datos del prospecto."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Ricardo García Jiménez
            </h1>
            <h2 class="text-sm">
                Modifica o actualiza los datos del prospecto.
            </h2>
        </div>

        <!-- Botón de retroceso -->
        <label for="modal-confirm" class="btn gap-2">
            <i class="ri-arrow-left-circle-line text-xl"></i>
            Volver
        </label>
    </div>

    <div class="divider"></div>

    <!-- Formulario de modificación de prospectos -->
    <?= form_open(url_to('backend.modules.prospects.update', 1)) ?>
        <div class="flex flex-col gap-y-2">
            <!-- Campo del nombre -->
            <div class="form-control w-full">
                <label for="name" class="label">
                    <span class="label-text">
                        Nombre completo:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Escribe su nombre completo"
                        class="input input-bordered input-primary w-full"
                    >
                    <button type="button" aria-label="Campo del nombre del prospecto" class="btn btn-primary btn-square">
                        <i class="ri-user-3-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('name') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del nombre -->

            <!-- Campo del teléfono -->
            <div class="form-control w-full">
                <label for="phone" class="label">
                    <span class="label-text">
                        Teléfono:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="tel"
                        name="phone"
                        id="phone"
                        placeholder="Escribe su teléfono"
                        class="input input-bordered input-primary w-full"
                    >
                    <button type="button" aria-label="Campo del teléfono del prospecto" class="btn btn-primary btn-square">
                        <i class="ri-phone-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('phone') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del teléfono -->

            <!-- Campo del email -->
            <div class="form-control w-full">
                <label for="email" class="label">
                    <span class="label-text">
                        Email:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Escribe su email"
                        class="input input-bordered input-primary w-full"
                    >
                    <button type="button" aria-label="Campo del email del prospecto" class="btn btn-primary btn-square">
                        <i class="ri-mail-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('email') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del email -->

            <!-- Campo del interés -->
            <div class="form-control w-full">
                <label for="" class="label">
                    <span class="label-text">
                        Interés en:
                    </span>
                </label>
                <?= form_dropdown('', [], '', [
                    'id'    => '',
                    'class' => 'select select-bordered select-primary w-full',
                ]) ?>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del interés -->

            <!-- Campo del mensaje -->
            <div class="form-control">
                <label for="message" class="label">
                    <span class="label-text">
                        Mensaje <span class="italic">(opcional)</span>:
                    </span>
                </label>
                <textarea
                    name="message"
                    id="message"
                    class="textarea textarea-bordered textarea-secondary h-32 w-full"
                    placeholder="Escribe el mensaje del prospecto..."
                ></textarea>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('message') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del mensaje -->

            <!-- Campo del rating -->
            <div class="form-control">
                <label for="rating" class="label">
                    <span class="label-text">
                        Rating <span class="italic">(opcional)</span>:
                    </span>
                </label>
                <div class="flex items-center gap-x-2">
                    <div class="font-semibold text-2xl">
                        <?= esc(number_format(0, 1)) ?>
                    </div>
                    <div class="rating rating-half rating-lg">
                        <?php foreach (range(0, 10) as $rating): ?>
                            <input
                                type="radio"
                                name="rating"
                                id="rating"
                                class="<?= $rating
                                    ? ($rating % 2
                                        ? 'mask mask-star-2 bg-orange-400 mask-half-1'
                                        : 'mask mask-star-2 bg-orange-400 mask-half-2 mr-2')
                                    : 'rating-hidden' ?>"
                                value="<?= esc($rating) ?>"
                                aria-label="Rating de <?= esc($rating) ?>"
                                disabled
                            >
                        <?php endforeach ?>
                    </div>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('rating') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del rating -->

            <!-- Campo de las observaciones -->
            <div class="form-control">
                <label for="observations" class="label">
                    <span class="label-text">
                        Observaciones <span class="italic">(opcional)</span>:
                    </span>
                </label>
                <textarea
                    name="observations"
                    id="observations"
                    class="textarea textarea-bordered textarea-secondary h-32 w-full"
                    placeholder="Escribe una nota para el prospecto..."
                ></textarea>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('observations') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de las observaciones -->

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
        ], 'html')->include('backend/components/modal-submit') ?>
    <?= form_close() ?>
    <!-- Fin del formulario de modificación de prospectos -->

    <!-- Modal de confirmación -->
    <?= $this->setData([
        'id'        => 'modal-confirm',
        'routeName' => 'backend.modules.prospects.index',
        'message'   => '¿Deseas cancelar las modificaciones del prospecto?',
    ], 'html')->include('backend/components/modal-confirm') ?>
<?= $this->endSection() ?>
