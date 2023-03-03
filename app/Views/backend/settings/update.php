<?= $this->extend('backend/templates/dashboard') ?>

<?= $this->section('head') ?>
    <title>
        Modificar | Configuraciones
    </title>

    <meta
        name="description"
        content="Modifica o actualiza todas las configuraciones del sitio web."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Configura tu sitio web
            </h1>
            <h2 class="text-sm">
                Modifica o actualiza todas las configuraciones del sitio web.
            </h2>
        </div>

        <!-- Botón de retroceso -->
        <label for="modal-confirm" class="btn gap-2">
            <i class="ri-arrow-left-circle-line text-xl"></i>
            Volver
        </label>
    </div>

    <div class="divider"></div>

    <!-- Formulario de modificación del sitio web -->
    <?= form_open(url_to('backend.settings.update')) ?>
        <fieldset>
            <legend class="text-xl font-bold underline decoration-wavy decoration-secondary underline-offset-4 mb-4">
                General
            </legend>

            <!-- Campo del nombre de la empresa -->
            <div class="form-control w-full">
                <label for="company" class="label">
                    <span class="label-text">
                        Nombre de la empresa:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="text"
                        name="company"
                        id="company"
                        placeholder="Escribe el nombre de la empresa"
                        class="input input-bordered input-primary w-full"
                    >
                    <button type="button" aria-label="Campo del nombre de la empresa" class="btn btn-primary btn-square">
                        <i class="ri-building-2-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('company') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del nombre de la empresa -->

            <!-- Campo de los teléfonos -->
            <div class="form-control w-full">
                <label for="phones" class="label">
                    <span class="label-text">
                        Teléfonos de contacto:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="tel"
                        name="phones"
                        id="phones"
                        placeholder="Escribe los teléfonos de contacto"
                        class="input input-bordered input-primary w-full"
                    >
                    <button type="button" aria-label="Campo de los teléfonos de contacto" class="btn btn-primary btn-square">
                        <i class="ri-phone-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('phones') ?>
                    </span>
                    <span class="label-text-alt">
                        *separados por comas
                    </span>
                </label>
            </div>
            <!-- Fin del campo de los teléfonos -->

            <!-- Campo del tema de colores -->
            <div class="form-control w-full">
                <label for="theme" class="label">
                    <span class="label-text">
                        Tema de colores:
                    </span>
                </label>
                <?= form_dropdown('theme', [], '', [
                    'id'    => 'theme',
                    'class' => 'select select-secondary w-full',
                ]) ?>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('theme') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del tema de colores -->

            <!-- Campo del favicon -->
            <div class="form-control w-full">
                <label for="favicon" class="label">
                    <span class="label-text">
                        Favicon:
                    </span>
                </label>
                <input
                    type="file"
                    name="favicon"
                    id="favicon"
                    class="file-input file-input-bordered file-input-primary w-full"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('favicon') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del favicon -->

            <!-- Campo del fondo de inicio de sesión -->
            <div class="form-control w-full">
                <label for="background" class="label">
                    <span class="label-text">
                        Fondo de inicio de sesión:
                    </span>
                </label>
                <input
                    type="file"
                    name="background"
                    id="background"
                    class="file-input file-input-bordered file-input-primary w-full"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('background') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del fondo de inicio de sesión -->

            <!-- Campo del logo -->
            <div class="form-control w-full">
                <label for="logo" class="label">
                    <span class="label-text">
                        Logo:
                    </span>
                </label>
                <input
                    type="file"
                    name="logo"
                    id="logo"
                    class="file-input file-input-bordered file-input-primary w-full"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('logo') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del logo -->
        </fieldset>

        <div class="divider"></div>

        <fieldset>
            <legend class="text-xl font-bold underline decoration-wavy decoration-secondary underline-offset-4 mb-4">
                Emails
            </legend>

            <!-- Campo de los emails de destino -->
            <div class="form-control w-full">
                <label for="emailsTo" class="label">
                    <span class="label-text">
                        Destinatarios:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="email"
                        name="emailsTo"
                        id="emailsTo"
                        placeholder="Escribe los emails de destino"
                        class="input input-bordered input-primary w-full"
                    >
                    <button type="button" aria-label="Campo de los emails de destino" class="btn btn-primary btn-square">
                        <i class="ri-mail-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('emailsTo') ?>
                    </span>
                    <span class="label-text-alt">
                        *separados por comas
                    </span>
                </label>
            </div>
            <!-- Fin del campo de los emails de destino -->

            <!-- Campo de los emails de destino con copia -->
            <div class="form-control w-full">
                <label for="emailsCC" class="label">
                    <span class="label-text">
                        Destinatarios con copia (CC):
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="email"
                        name="emailsCC"
                        id="emailsCC"
                        placeholder="Escribe los emails con copia"
                        class="input input-bordered input-secondary w-full"
                    >
                    <button type="button" aria-label="Campo de los emails de destino con copia" class="btn btn-secondary btn-square">
                        <i class="ri-mail-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('emailsCC') ?>
                    </span>
                    <span class="label-text-alt">
                        *separados por comas
                    </span>
                </label>
            </div>
            <!-- Fin del campo de los emails de destino con copia -->

            <!-- Campo de los emails de destino con copia oculta -->
            <div class="form-control w-full">
                <label for="emailsBCC" class="label">
                    <span class="label-text">
                        Destinatarios con copia oculta (BCC):
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="email"
                        name="emailsBCC"
                        id="emailsBCC"
                        placeholder="Escribe los emails con copia oculta"
                        class="input input-bordered input-secondary w-full"
                    >
                    <button type="button" aria-label="Campo de los emails de destino con copia oculta" class="btn btn-secondary btn-square">
                        <i class="ri-mail-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('emailsBCC') ?>
                    </span>
                    <span class="label-text-alt">
                        *separados por comas
                    </span>
                </label>
            </div>
            <!-- Fin del campo de los emails de destino con copia oculta -->
        </fieldset>

        <div class="divider"></div>

        <fieldset class="pb-4">
            <legend class="text-xl font-bold underline decoration-wavy decoration-secondary underline-offset-4 mb-4">
                Aplicaciones
            </legend>

            <!-- Campo de WhatsApp -->
            <div class="form-control w-full">
                <label for="whatsapp" class="label">
                    <span class="label-text">
                        Número de WhatsApp:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="tel"
                        name="whatsapp"
                        id="whatsapp"
                        placeholder="Escribe el número de WhatsApp"
                        class="input input-bordered input-secondary w-full"
                    >
                    <button type="button" aria-label="Campo del número de WhatsApp" class="btn btn-secondary btn-square">
                        <i class="ri-whatsapp-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('whatsapp') ?>
                    </span>
                    <span class="label-text-alt">
                        *en formato internacional
                    </span>
                </label>
            </div>
            <!-- Fin del campo de WhatsApp -->

            <!-- Campo del ID de Google Tag Manager -->
            <div class="form-control w-full">
                <label for="googleTagManager" class="label">
                    <span class="label-text">
                        ID de Google Tag Manager:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="text"
                        name="googleTagManager"
                        id="googleTagManager"
                        placeholder="Escribe el ID de Google Tag Manager"
                        class="input input-bordered input-secondary w-full"
                    >
                    <button type="button" aria-label="Campo del ID de Google Tag Manager" class="btn btn-secondary btn-square">
                        <i class="ri-google-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('googleTagManager') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del ID de Google Tag Manager -->

            <!-- Campo de verificación de Google Search Console -->
            <div class="form-control w-full">
                <label for="googleSearchConsole" class="label">
                    <span class="label-text">
                        Verificación de Google Search Console:
                    </span>
                </label>
                <input
                    type="file"
                    name="googleSearchConsole"
                    id="googleSearchConsole"
                    class="file-input file-input-bordered file-input-primary w-full"
                >
                <label class="label">
                    <span class="label-text-alt text-error">
                        <ul>
                            <li>
                                <?= validation_show_error('googleSearchConsole') ?>
                            </li>
                            <li>
                                <?= validation_show_error('deleteGoogleSearchConsole') ?>
                            </li>
                        </ul>
                    </span>
                    <span class="label-text-alt cursor-pointer inline-flex items-center gap-2">
                        <i class="ri-delete-bin-5-fill text-2xl text-error"></i>
                        <input
                            type="checkbox"
                            name="deleteGoogleSearchConsole"
                            aria-label="Botón para eliminar la verificación de Google Search Console"
                            value="1"
                            class="checkbox checkbox-error"
                        >
                    </span>
                </label>
            </div>
            <!-- Fin del campo de verificación de Google Search Console -->

            <!-- Campo de la clave de sitio web de Google reCAPTCHA -->
            <div class="form-control w-full">
                <label for="googleRecaptcha" class="label">
                    <span class="label-text">
                        Clave de sitio web de Google reCAPTCHA:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="text"
                        name="googleRecaptcha"
                        id="googleRecaptcha"
                        placeholder="Escribe la clave de sitio web de Google reCAPTCHA"
                        class="input input-bordered input-primary w-full"
                    >
                    <button type="button" aria-label="Campo de la clave de sitio web de Google reCAPTCHA" class="btn btn-primary btn-square">
                        <i class="ri-google-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('googleRecaptcha') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de la clave de sitio web de Google reCAPTCHA -->
        </fieldset>

        <!-- Botones de confirmación -->
        <div class="flex flex-col lg:flex-row lg:items-center justify-end gap-3">
            <label for="modal-submit" class="btn btn-primary">
                Guardar
            </label>

            <label for="modal-confirm" class="btn btn-secondary">
                Cancelar
            </label>
        </div>

        <!-- Modal de submit -->
        <?= $this->setData([
            'id'      => 'modal-submit',
            'message' => '¿Deseas guardar los cambios?',
        ])->include('backend/components/modal-submit') ?>
    <?= form_close() ?>
    <!-- Fin del formulario de modificación del sitio web -->

    <!-- Modal de confirmación -->
    <?= $this->setData([
        'id'        => 'modal-confirm',
        'routeName' => 'backend.settings.index',
        'message'   => '¿Deseas cancelar las modificaciones del sitio web?',
    ])->include('backend/components/modal-confirm') ?>
<?= $this->endSection() ?>
