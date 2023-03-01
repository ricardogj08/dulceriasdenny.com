<?= $this->extend('backend/templates/dashboard') ?>

<?= $this->section('head') ?>
    <title>
        General | Configuraciones
    </title>

    <meta
        name="description"
        content="Consulta todas las configuraciones del sitio web."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Configuraciones
            </h1>
            <p class="text-sm">
                Consulta todas las configuraciones del sitio web.
            </p>
        </div>

        <!-- Botón para modificar las configuraciones del sitio web -->
        <a
            href="<?= url_to('backend.settings.update') ?>"
            class="btn btn-primary gap-2"
        >
            <i class="ri-pencil-fill text-xl"></i>
            Modificar
        </a>
    </div>

    <div class="divider"></div>

    <!-- Tabla de configuraciones generales -->
    <section>
        <h2 class="text-xl font-bold underline decoration-wavy decoration-secondary underline-offset-4 mb-4">
            General
        </h2>

        <div class="overflow-x-auto">
            <table class="table table-compact lg:table-normal table-zebra w-full">
                <thead>
                    <tr>
                        <th>Configuración</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Empresa:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Teléfonos:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Tema:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Favicon:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Fondo:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Logo:</th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Fin de la tabla de configuraciones generales -->

    <div class="divider"></div>

    <!-- Tabla de configuraciones de emails -->
    <section>
        <h2 class="text-xl font-bold underline decoration-wavy decoration-secondary underline-offset-4 mb-4">
            Emails
        </h2>

        <div class="overflow-x-auto">
            <table class="table table-compact lg:table-normal table-zebra w-full">
                <thead>
                    <tr>
                        <th>Configuración</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Remitente:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Destinatarios:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Destinatarios CC:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Destinatarios BCC:</th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Fin de la tabla de configuraciones de emails -->

    <div class="divider"></div>

    <!-- Tabla de configuraciones de aplicaciones -->
    <section>
        <h2 class="text-xl font-bold underline decoration-wavy decoration-secondary underline-offset-4 mb-4">
            Aplicaciones
        </h2>

        <div class="overflow-x-auto">
            <table class="table table-compact lg:table-normal table-zebra w-full">
                <thead>
                    <tr>
                        <th>Configuración</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>WhatsApp:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Google Tag Manager:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Google Search Console:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Google reCAPTCHA:</th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Fin de la tabla de configuraciones de aplicaciones -->
<?= $this->endSection() ?>
