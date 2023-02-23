<?= $this->extend('backend/templates/dashboard') ?>

<?= $this->section('head') ?>
    <title>Módulos | Prospectos</title>

    <meta name="description" content="Búsqueda y consulta de todos los prospectos registrados.">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-4">
                Prospectos
            </h1>
            <h2 class="text-sm">
                Búsqueda y consulta de todos los prospectos registrados.
            </h2>
        </div>

        <!-- Botón para exportar los prospectos -->
        <a href="#" target="_blank" class="btn gap-2">
            <i class="ri-download-cloud-fill text-xl"></i>
            Exportar
        </a>
    </div>

    <div class="divider"></div>

    <div class="pb-6">
        <?= form_open(url_to('backend.modules.prospects.index'), ['method' => 'get']) ?>
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
                        <button type="submit" class="btn btn-primary btn-square">
                            <i class="ri-search-2-line text-xl"></i>
                        </button>
                    </div>
                </div>
                <!-- Fin del campo de búsqueda -->

                <!-- Botón que muestra el formulario de filtros -->
                <button type="button" data-collapse-toggle="filters" class="btn btn-secondary">
                    <i class="ri-filter-3-fill text-xl"></i>
                </button>
            </div>

            <!-- Filtros de búsqueda y consulta -->
            <div id="filters" class="hidden pt-4">
                <div class="bg-base-200 p-6 rounded-xl">
                    <div class="pb-4 grid grid-cols-1 lg:grid-cols-4 items-end gap-2">
                        <!-- Campo del filtrado de búsqueda -->
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

                        <!-- Campo de filtrado por interés -->
                        <div class="form-control w-full">
                            <label for="" class="label">
                                <span class="label-text">
                                    Filtrar por interés:
                                </span>
                            </label>
                            <?= form_dropdown('sortOrder', [], '', [
                                'id'    => '',
                                'class' => 'select select-bordered w-full',
                            ]) ?>
                        </div>
                        <!-- Fin del campo de filtrado por interés -->

                        <!-- Campo de filtrado por rating -->
                        <div class="form-control w-full">
                            <label for="rating" class="label">
                                <span class="label-text">
                                    Filtrar por rating:
                                </span>
                            </label>
                            <?= form_dropdown('rating', array_merge(['' => 'Rating...'], range(0, 10)), '', [
                                'id'    => 'rating',
                                'class' => 'select select-bordered w-full',
                            ]) ?>
                        </div>
                        <!-- Fin del campo de filtrado por rating -->

                        <!-- Campo de filtrado de fecha desde -->
                        <div class="form-control">
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
                        <!-- Fin del campo de filtrado de fecha desde -->

                        <!-- Campo de filtrado de fecha hasta -->
                        <div class="form-control">
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
                        <!-- Fin del campo de filtrado de fecha hasta -->
                    </div>

                    <div class="flex flex-col lg:flex-row lg:items-center justify-end gap-2">
                        <!-- Botón para aplicar los filtros -->
                        <input type="submit" value="Aplicar" class="btn btn-primary">

                        <!-- Botón para restaurar los filtros -->
                        <a href="<?= url_to('backend.modules.prospects.index') ?>" class="btn btn-secondary">
                            Restaurar
                        </a>
                    </div>
                </div>
            </div>
            <!-- Fin de los filtros de búsqueda y consulta -->
        <?= form_close() ?>
    </div>

    <!-- Tabla de prospectos -->
    <div class="overflow-x-auto">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Interés en</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="flex gap-2">
                            <!-- Botón para mostrar los datos de un prospecto -->
                            <a
                                href="<?= url_to('backend.modules.prospects.show', 1) ?>"
                                class="btn btn-square btn-warning btn-outline btn-sm"
                            >
                                <i class="ri-eye-line text-xl"></i>
                            </a>
                            <!-- Fin del botón para mostrar los datos de un prospecto -->

                            <!-- Botón para editar los datos de un prospecto -->
                            <a
                                class="btn btn-square btn-info btn-outline btn-sm"
                            >
                                <i class="ri-pencil-line text-xl"></i>
                            </a>
                            <!-- Fin del botón para editar los datos de un prospecto -->

                            <!-- Formulario para eliminar un prospecto -->
                            <?= form_open(url_to('backend.modules.prospects.delete', 1)) ?>
                                <label
                                    for=""
                                    class="btn btn-square btn-error btn-outline btn-sm"
                                >
                                    <i class="ri-delete-bin-5-line text-xl"></i>
                                </label>

                                <?= $this->setData([
                                    'id'      => '',
                                    'message' => '¿Deseas eliminar este prospecto?',
                                ], 'html')->include('backend/components/modal-submit') ?>
                            <?= form_close() ?>
                            <!-- Fin del formulario para eliminar un prospecto -->
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Fin de la tabla de prospectos -->
<?= $this->endSection() ?>
