<?= $this->extend('backend/templates/emails') ?>

<?= $this->section('head') ?>
    <title>
        Prospecto
    </title>

    <meta
        name="description"
        content="Registro del prospecto."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="text-2xl font-bold mb-4">
        Prospecto
    </h1>

    <!-- Tabla de datos del prospecto -->
    <div class="pb-4">
        <div class="overflow-x-auto">
            <table class="table table-compact table-zebra w-full">
                <tr>
                    <th>Nombre completo:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Teléfono:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Interés en:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Mensaje:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Fecha:</th>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    <!-- Fin de la tabla de datos del prospecto -->

    <p class="text-center">
        <?= mailto('ricardo@genotipo.com', 'Responder solicitud', 'class="btn btn-primary btn-wide"') ?>
    </p>
<?= $this->endSection() ?>
