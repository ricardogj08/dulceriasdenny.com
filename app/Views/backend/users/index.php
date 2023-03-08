<?= $this->extend('backend/templates/dashboard') ?>

<?= $this->section('head') ?>
    <title>
        General | Usuarios
    </title>

    <meta
        name="description"
        content="Búsqueda y consulta de todos los usuarios de acceso."
    >
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <!-- Mensaje de notificación -->
    <?php if (session()->has('toast-success')): ?>
        <?= $this->setData([
            'message' => session()->getFlashdata('toast-success'),
        ])->include('backend/components/toast-success') ?>
    <?php endif ?>
    <!-- Fin del mensaje de notificación -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Usuarios de acceso
            </h1>
            <h2 class="text-sm">
                Búsqueda y consulta de todos los usuarios de acceso.
            </h2>
        </div>

        <!-- Botón para registrar un nuevo usuario de acceso -->
        <a
            href="<?= url_to('backend.users.create') ?>"
            class="btn btn-primary gap-2"
        >
            <i class="ri-add-circle-fill text-xl"></i>
            Registra un nuevo usuario
        </a>
    </div>

    <div class="divider"></div>

    <div class="pb-6">
        <?= form_open(url_to('backend.users.index'), ['method' => 'get']) ?>
            <div class="flex flex-col lg:flex-row items-end lg:items-center justify-between gap-4">
                <!-- Campo de búsqueda -->
                <div class="form-control w-full">
                    <div class="input-group">
                        <input
                            type="text"
                            name="q"
                            placeholder="Buscar..."
                            value=""
                            class="input input-bordered w-full"
                        >

                        <!-- Botón de submit -->
                        <button
                            type="submit"
                            aria-label="Botón que realiza una búsqueda"
                            class="btn btn-primary btn-square"
                        >
                            <i class="ri-search-2-line text-xl"></i>
                        </button>
                    </div>
                </div>
                <!-- Fin del campo de búsqueda -->

                <!-- Botón que muestra los campos de filtrado -->
                <button
                    type="button"
                    data-collapse-toggle="filters"
                    aria-label="Botón que muestra los filtros de búsqueda y consulta"
                    class="btn btn-secondary"
                >
                    <i class="ri-filter-3-fill text-xl"></i>
                </button>
            </div>

            <!-- Filtros de búsqueda y consulta -->
            <div id="filters" class="hidden pt-4">
                <div class="bg-base-200 p-6 rounded-xl">
                    <div class="pb-4 grid grid-cols-1 lg:grid-cols-4 items-end gap-2">
                        <!-- Campo de filtrado de búsqueda -->
                        <div class="form-control w-full">
                            <label for="filter" class="label">
                                <span class="label-text">
                                    Filtro de búsqueda:
                                </span>
                            </label>
                            <?= form_dropdown('filter', [], '', [
                                'id'    => 'filter',
                                'class' => 'select select-bordered w-full',
                            ]) ?>
                        </div>
                        <!-- Fin del campo de filtrado de búsqueda -->

                        <!-- Campo de ordenamiento -->
                        <div class="form-control w-full">
                            <label for="sortBy" class="label">
                                <span class="label-text">
                                    Campo de ordenamiento:
                                </span>
                            </label>
                            <?= form_dropdown('sortBy', [], '', [
                                'id'    => 'sortBy',
                                'class' => 'select select-bordered w-full',
                            ]) ?>
                        </div>
                        <!-- Fin del campo de ordenamiento -->

                        <!-- Campo del modo de ordenamiento -->
                        <div class="form-control w-full">
                            <label for="sortOrder" class="label">
                                <span class="label-text">
                                    Modo de ordenamiento:
                                </span>
                            </label>
                            <?= form_dropdown('sortOrder', [], '', [
                                'id'    => 'sortOrder',
                                'class' => 'select select-bordered w-full',
                            ]) ?>
                        </div>
                        <!-- Fin del campo del modo de ordenamiento -->

                        <!-- Campo de filtrado por rol -->
                        <div class="form-control w-full">
                            <label for="role_id" class="label">
                                <span class="label-text">
                                    Filtrar por rol:
                                </span>
                            </label>
                            <?= form_dropdown('role_id', [], '', [
                                'id'    => 'role_id',
                                'class' => 'select select-bordered w-full',
                            ]) ?>
                        </div>
                        <!-- Fin del campo de filtrado por rol -->

                        <!-- Campo de filtrado por fecha desde -->
                        <div class="form-control w-full">
                            <label for="dateFrom" class="label">
                                <span class="label-text">
                                    Desde:
                                </span>
                            </label>
                            <input
                                type="date"
                                name="dateFrom"
                                id="dateFrom"
                                class="input input-bordered w-full"
                                value=""
                            >
                        </div>
                        <!-- Fin del campo de filtrado por fecha desde -->

                        <!-- Campo de filtrado por fecha hasta -->
                        <div class="form-control w-full">
                            <label for="dateTo" class="label">
                                <span class="label-text">
                                    Hasta:
                                </span>
                            </label>
                            <input
                                type="date"
                                name="dateTo"
                                id="dateTo"
                                class="input input-bordered w-full"
                                value=""
                            >
                        </div>
                        <!-- Fin del campo de filtrado por fecha hasta -->
                    </div>

                    <div class="flex flex-col lg:flex-row lg:items-center justify-end gap-3">
                        <!-- Botón que aplica los filtros -->
                        <input type="submit" value="Aplicar" class="btn btn-primary">

                        <!-- Botón para restaurar los filtros -->
                        <a href="<?= url_to('backend.users.index') ?>" class="btn btn-secondary">
                            Restaurar
                        </a>
                    </div>
                </div>
            </div>
            <!-- Fin de los filtros de búsqueda y consulta -->
        <?= form_close() ?>
    </div>

    <!-- Tabla de usuarios -->
    <div class="overflow-x-auto">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Activo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover">
                    <th></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="flex gap-2">
                            <!-- Formulario que alterna el estado de cuenta del usuario -->
                            <?= form_open(url_to('backend.users.toggle-active', 1)) ?>
                                <label
                                    for="modal-submit-toggle-active"
                                    class="btn btn-square btn-success btn-outline btn-sm"
                                >
                                    <!-- <i class="ri-close-fill text-xl"></i> -->
                                    <i class="ri-recycle-line text-xl"></i>
                                </label>

                                <?= $this->setData([
                                    'id'      => 'modal-submit-toggle-active',
                                    'message' => '¿Deseas dar de baja este usuario?',
                                ])->include('backend/components/modal-submit') ?>
                            <?= form_close() ?>
                            <!-- Fin del formulario que alterna el estado de cuenta del usuario -->

                            <!-- Botón para editar los datos del usuario -->
                            <a
                                href="<?= url_to('backend.users.update', 1) ?>"
                                aria-label="Botón para editar los datos del usuario"
                                class="btn btn-square btn-info btn-outline btn-sm"
                            >
                                <i class="ri-pencil-line text-xl"></i>
                            </a>
                            <!-- Fin del botón para editar los datos del usuario -->

                            <!-- Formulario para eliminar el usuario -->
                            <?= form_open(url_to('backend.users.delete', 1)) ?>
                                <label
                                    for="modal-submit-delete"
                                    class="btn btn-square btn-error btn-outline btn-sm"
                                >
                                    <i class="ri-delete-bin-5-line text-xl"></i>
                                </label>

                                <?= $this->setData([
                                    'id'      => 'modal-submit-delete',
                                    'message' => '¿Deseas eliminar este usuario?',
                                ])->include('backend/components/modal-submit') ?>
                            <?= form_close() ?>
                            <!-- Fin del formulario para eliminar el usuario -->
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Fin de la tabla de usuarios -->
<?= $this->endSection() ?>
