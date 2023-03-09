<?= $this->extend('backend/templates/dashboard') ?>

<?= $this->section('head') ?>
    <title>
        Módulos | Redes sociales
    </title>

    <meta
        name="description"
        content="Búsqueda y consulta de todas las redes sociales de la empresa."
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

    <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
        Redes sociales
    </h1>
    <h2 class="text-sm">
        Búsqueda y consulta de todas las redes sociales de la empresa.
    </h2>

    <div class="divider"></div>

    <div class="pb-6 flex flex-col gap-4">
        <!-- Mensajes de errores de validación -->
        <div class="text-error text-sm">
            <?= validation_list_errors() ?>
        </div>

        <?= form_open(url_to('backend.modules.socialNetworks.index'), ['method' => 'get']) ?>
            <div class="flex flex-col lg:flex-row items-end lg:items-center justify-between gap-4">
                <!-- Campo de búsqueda -->
                <div class="form-control w-full">
                    <div class="input-group">
                        <input
                            type="text"
                            name="q"
                            maxlength="64"
                            placeholder="Buscar..."
                            value="<?= esc($queryParam) ?>"
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
                    <div class="pb-4 grid grid-cols-1 lg:grid-cols-3 items-end gap-2">
                        <!-- Campo de ordenamiento -->
                        <div class="form-control w-full">
                            <label for="sortBy" class="label">
                                <span class="label-text">
                                    Ordenar por:
                                </span>
                            </label>
                            <?= form_dropdown('sortBy', $sortByFields, $sortByParam, [
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
                            <?= form_dropdown('sortOrder', $sortOrderFields, $sortOrderParam, [
                                'id'    => 'sortOrder',
                                'class' => 'select select-bordered w-full',
                            ]) ?>
                        </div>
                        <!-- Fin del campo del modo de ordenamiento -->

                        <!-- Campo de filtrado por activación -->
                        <div class="form-control w-full">
                            <label for="active" class="label">
                                <span class="label-text">
                                    Filtrar por estado:
                                </span>
                            </label>
                            <select name="active" id="active" class="select select-bordered w-full">
                                <option value="" selected>
                                    Todos
                                </option>
                                <?php foreach ($activeFilterFields as $value => $description): ?>
                                    <option
                                        value="<?= esc($value) ?>"
                                        <?= $value === $activeFilterParam ? 'selected' : '' ?>
                                    >
                                        <?= esc($description) ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <!-- Fin del campo de filtrado por activación -->
                    </div>

                    <div class="flex flex-col lg:flex-row lg:items-center justify-end gap-3">
                        <!-- Botón que aplica los filtros -->
                        <input type="submit" value="Aplicar" class="btn btn-primary">

                        <!-- Botón para restaurar los filtros -->
                        <a href="<?= url_to('backend.modules.socialNetworks.index') ?>" class="btn btn-secondary">
                            Restaurar
                        </a>
                    </div>
                </div>
            </div>
            <!-- Fin de los filtros de búsqueda y consulta -->
        <?= form_close() ?>
    </div>

    <!-- Tabla de redes sociales -->
    <div class="pb-4">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Habilitado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($socialNetworks as $socialNetwork): ?>
                        <tr class="hover">
                            <th>
                                <?php if ($socialNetwork['link']): ?>
                                    <a
                                        href="<?= esc($socialNetwork['link'], 'attr') ?>"
                                        target="_blank"
                                        rel="nofollow noreferrer noopener"
                                        class="group"
                                    >
                                <?php endif ?>
                                        <div class="flex gap-4 items-center">
                                            <i class="text-2xl <?= esc($socialNetwork['icon']) ?>"></i>
                                            <span class="group-hover:link">
                                                <?= esc($socialNetwork['name']) ?>
                                            </span>
                                        </div>
                                <?php if ($socialNetwork['link']): ?>
                                    </a>
                                <?php endif ?>
                            </th>
                            <td>
                                <div class="badge <?= $socialNetwork['active'] ? 'badge-success' : 'badge-error' ?>">
                                    <?= esc($socialNetwork['active'] ? 'Sí' : 'No') ?>
                                </div>
                            </td>
                            <td>
                                <!-- Botón para editar los datos de la red social -->
                                <a
                                    href="<?= url_to('backend.modules.socialNetworks.update', $socialNetwork['id']) ?>"
                                    aria-label="Botón para editar la red social"
                                    class="btn btn-square btn-info btn-outline btn-sm"
                                >
                                    <i class="ri-pencil-line text-xl"></i>
                                </a>
                                <!-- Fin del botón para editar los datos de la red social -->
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Fin de la tabla de redes sociales -->

    <!-- Paginación -->
    <div class="flex justify-center lg:justify-end">
        <?= $pager->links('default', 'backend') ?>
    </div>
<?= $this->endSection() ?>
