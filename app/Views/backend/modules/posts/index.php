<?= $this->extend('backend/templates/dashboard') ?>

<?= $this->section('head') ?>
    <title>
        Módulos | Blog
    </title>

    <meta
        name="description"
        content="Búsqueda y consulta de todos los artículos publicados o programados."
    >
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-accent underline-offset-4 mb-2">
                Blog
            </h1>
            <h2 class="text-sm">
                Búsqueda y consulta de todos los artículos publicados o programados.
            </h2>
        </div>

        <!-- Botón para registrar un nuevo artículo -->
        <a
            href="<?= url_to('backend.modules.posts.create') ?>"
            class="btn btn-primary gap-2"
        >
            <i class="ri-add-circle-fill text-xl"></i>
            Escribe un nuevo artículo
        </a>
    </div>

    <div class="divider"></div>

    <div class="pb-6">
        <?= form_open(url_to('backend.modules.posts.index'), ['method' => 'get']) ?>
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
                    <div class="pb-4 grid grid-cols-1 lg:grid-cols-3 items-end gap-2">
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

                        <!-- Campo de filtrado por publicación -->
                        <div class="form-control w-full">
                            <label for="active" class="label">
                                <span class="label-text">
                                    Filtrar por publicación:
                                </span>
                            </label>
                            <?= form_dropdown('active', [], '', [
                                'id'    => 'active',
                                'class' => 'select select-bordered w-full',
                            ]) ?>
                        </div>
                        <!-- Fin del campo de filtrado por publicación -->

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

                    <div class="flex flex-col lg:flex-row lg:items-center justify-end gap-2">
                        <!-- Botón que aplica los filtros -->
                        <input type="submit" value="Aplicar" class="btn btn-primary">

                        <!-- Botón para restaurar los filtros -->
                        <a href="<?= url_to('backend.modules.posts.index') ?>" class="btn btn-secondary">
                            Restaurar
                        </a>
                    </div>
                </div>
            </div>
            <!-- Fin de los filtros de búsqueda y consulta -->
        <?= form_close() ?>
    </div>

    <!-- Tabla de artículos -->
    <div class="overflow-x-auto">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Título</th>
                    <th>Publicado</th>
                    <th>Fecha de programación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="flex gap-2">
                            <!-- Botón para mostrar los datos del artículo -->
                            <a
                                href="<?= url_to('backend.modules.posts.show', 1) ?>"
                                aria-label="Botón para mostrar los datos del artículo"
                                class="btn btn-square btn-warning btn-outline btn-sm"
                            >
                                <i class="ri-eye-line text-xl"></i>
                            </a>
                            <!-- Fin del botón para mostrar los datos del artículo -->

                            <!-- Botón para editar los datos del artículo -->
                            <a
                                href="<?= url_to('backend.modules.posts.update', 1) ?>"
                                aria-label="Botón para editar los datos del artículo"
                                class="btn btn-square btn-info btn-outline btn-sm"
                            >
                                <i class="ri-pencil-line text-xl"></i>
                            </a>
                            <!-- Fin del botón para editar los datos del artículo -->

                            <!-- Formulario para eliminar el artículo -->
                            <?= form_open(url_to('backend.modules.posts.delete', 1)) ?>
                                <label
                                    for="modal-submit"
                                    class="btn btn-square btn-error btn-outline btn-sm"
                                >
                                    <i class="ri-delete-bin-5-line text-xl"></i>
                                </label>

                                <?= $this->setData([
                                    'id'      => 'modal-submit',
                                    'message' => '¿Deseas eliminar este artículo?',
                                ], 'html')->include('backend/components/modal-submit') ?>
                            <?= form_close() ?>
                            <!-- Fin del formulario para eliminar el artículo -->
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Fin de la tabla de artículos -->
<?= $this->endSection() ?>
