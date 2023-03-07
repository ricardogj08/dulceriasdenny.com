<?php

namespace App\Controllers\Backend\Modules;

use App\Controllers\BaseController;

class SocialNetworks extends BaseController
{
    /**
     * Renderiza la página de todas las redes sociales.
     */
    public function index()
    {
        // Define los campos de ordenamiento de resultados.
        $sortByFields = [
            'name'       => 'Nombre',
            'updated_at' => 'Fecha de modificación',
        ];

        $sortByList = implode(',', array_keys($sortByFields));

        // Define los modos de ordenamiento de resultados.
        $sortOrderFields = [
            'asc'  => 'Ascendente',
            'desc' => 'Descendente',
        ];

        $sortOrderList = implode(',', array_keys($sortOrderFields));

        // Define los modos de filtrado de redes sociales habilitados.
        $activeFilterFields = [
            'true'  => 'Habilitado',
            'false' => 'Deshabilitado',
        ];

        $activeFilterList = implode(',', array_keys($activeFilterFields));

        // Valida los parámetros de búsqueda y consulta de los resultados.
        if (! $this->validate([
            'q'         => 'if_exist|max_length[64]',
            'sortBy'    => "permit_empty|in_list[{$sortByList}]",
            'sortOrder' => "permit_empty|in_list[{$sortOrderList}]",
            'active'    => "permit_empty|in_list[{$activeFilterList}]",
        ])) {
            return redirect()
                ->route('backend.modules.socialNetworks.index')
                ->withInput();
        }

        // Obtiene el patrón de búsqueda (por defecto: '').
        $queryParam = trimAll($this->request->getGet('q'));

        // Obtiene el campo de ordenamiento (por defecto: 'name').
        $sortByParam = stripAllSpaces($this->request->getGet('sortBy') ?: 'name');

        // Obtiene el campo del modo de ordenamiento (por defecto: 'asc');
        $sortOrderParam = stripAllSpaces($this->request->getGet('sortOrder') ?: 'asc');

        // Obtiene el campo de filtrado de redes sociales habilitados (por defecto: '').
        $activeFilterParam = stripAllSpaces($this->request->getGet('active'));

        $socialNetworkModel = model('SocialNetworkModel');

        // Define los campos a seleccionar.
        $builder = $socialNetworkModel->select('id, name, alias, link, active, icon');

        // Filtra los resultados por habilitados.
        if ($activeFilterParam) {
            $builder->where('active', $activeFilterParam === 'true');
        }

        /**
         * Consulta todas las redes sociales registradas
         * que coinciden con el patrón de búsqueda
         * con paginación.
         */
        $socialNetworks = $builder
            ->like('name', $queryParam)
            ->orderBy($sortByParam, $sortOrderParam)
            ->paginate(8);

        $activeFilterFields[''] = 'Todos';

        return view('backend/modules/socialNetworks/index', [
            'queryParam'         => $queryParam,
            'sortByFields'       => $sortByFields,
            'sortByParam'        => $sortByParam,
            'sortOrderFields'    => $sortOrderFields,
            'sortOrderParam'     => $sortOrderParam,
            'activeFilterFields' => $activeFilterFields,
            'activeFilterParam'  => $activeFilterParam,
            'socialNetworks'     => $socialNetworks,
            'pager'              => $socialNetworkModel->pager,
        ]);
    }

    /**
     * Renderiza la página para modificar las redes sociales
     * y modifica los datos de una red social.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
        return view('backend/modules/socialNetworks/update');
    }
}
