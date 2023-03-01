<?= $this->extend('backend/templates/dashboard') ?>

<?= $this->section('head') ?>
    <title>
        Usuarios | Nuevo
    </title>

    <meta
        name="description"
        content="Ingresa los datos de acceso del nuevo usuario."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Registra un nuevo usuario
            </h1>
            <h2 class="text-sm">
                Ingresa los datos de acceso del nuevo usuario.
            </h2>
        </div>

        <!-- Botón de retroceso -->
        <label for="modal-confirm" class="btn gap-2">
            <i class="ri-arrow-left-circle-line text-xl"></i>
            Volver
        </label>
    </div>

    <div class="divider"></div>

    <!-- Formulario de registro del usuario -->
    <?= form_open(url_to('backend.users.create')) ?>
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
                    <button type="button" aria-label="Campo del nombre completo del usuario" class="btn btn-primary btn-square">
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
                    <button type="button" aria-label="Campo del email del usuario" class="btn btn-primary btn-square">
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

            <!-- Campo del rol -->
            <div class="form-control w-full">
                <label for="role_id" class="label">
                    <span class="label-text">
                        Rol:
                    </span>
                </label>
                <?= form_dropdown('role_id', [], '', [
                    'id'    => 'role_id',
                    'class' => 'select select-bordered select-primary w-full',
                ]) ?>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('role_id') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo del rol -->

            <!-- Campo de la contraseña -->
            <div class="form-control w-full">
                <label for="password" class="label">
                    <span class="label-text">
                        Contraseña:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Escribe su contraseña"
                        class="input input-bordered input-primary w-full"
                    >
                    <button type="button" aria-label="Campo de la contraseña del usuario" class="btn btn-primary btn-square">
                        <i class="ri-lock-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('password') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de la contraseña -->

            <!-- Campo de confirmación de contraseña -->
            <div class="form-control w-full">
                <label for="pass_confirm" class="label">
                    <span class="label-text">
                        Repetir contraseña:
                    </span>
                </label>
                <div class="input-group">
                    <input
                        type="password"
                        name="pass_confirm"
                        id="pass_confirm"
                        placeholder="Repita su contraseña"
                        class="input input-bordered input-primary w-full"
                    >
                    <button type="button" aria-label="Campo de confirmación de la contraseña del usuario" class="btn btn-primary btn-square">
                        <i class="ri-lock-fill text-xl"></i>
                    </button>
                </div>
                <label class="label">
                    <span class="label-text-alt text-error">
                        <?= validation_show_error('pass_confirm') ?>
                    </span>
                </label>
            </div>
            <!-- Fin del campo de confirmación de contraseña -->

            <!-- Botones de confirmación -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-end gap-3">
                <input type="submit" value="Guardar" class="btn btn-primary">

                <label for="modal-confirm" class="btn btn-secondary">
                    Cancelar
                </label>
            </div>
        </div>
    <?= form_close() ?>
    <!-- Fin del formulario de registro del usuario -->

    <!-- Modal de confirmación -->
    <?= $this->setData([
        'id'        => 'modal-confirm',
        'routeName' => 'backend.users.index',
        'message'   => '¿Deseas cancelar el registro del nuevo usuario?',
    ], 'html')->include('backend/components/modal-confirm') ?>
<?= $this->endSection() ?>
