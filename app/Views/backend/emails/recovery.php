<?= $this->extend('backend/templates/emails') ?>

<?= $this->section('head') ?>
    <title>
        Recupera tu contraseña
    </title>

    <meta
        name="description"
        content="Recupera tu contraseña."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="text-2xl font-bold mb-4">
        Recupera tu contraseña
    </h1>

    <p class="text-justify mb-4">
        ¡Hola <?= esc(word_limiter('Ricardo García Jiménez', 1, '')) ?>!,
        presiona el siguiente botón para completar tu solicitud de recuperación de contraseña:
    </p>

    <p class="text-center mb-2">
        <a
            href="<?= url_to('backend.auth.recovery', 1, 'test') ?>"
            class="btn btn-primary btn-wide"
        >
            Recuperar contraseña
        </a>
    </p>

    <p class="text-center">
        <small>
            Por favor ignora este mensaje si no has realizado esta solicitud.
        </small>
    </p>
<?= $this->endSection() ?>
