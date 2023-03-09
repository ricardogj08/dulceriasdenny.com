<?php

namespace App\Controllers\Backend\Modules;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

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
        $sortByParam = stripAllSpaces($this->request->getGet('sortBy')) ?: 'name';

        // Obtiene el campo del modo de ordenamiento (por defecto: 'asc');
        $sortOrderParam = stripAllSpaces($this->request->getGet('sortOrder')) ?: 'asc';

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
        // Valida si existe la red social.
        if (! $this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[socialnetworks.id]']
        )) {
            throw PageNotFoundException::forPageNotFound();
        }

        $socialNetworkModel = model('SocialNetworkModel');

        // Consulta los datos de la red social.
        $socialNetwork = $socialNetworkModel->select('id, name, link, active')->find($id);

        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) !== 'post' || ! $this->validate([
            'link'   => 'permit_empty|valid_url_strict|max_length[2048]',
            'active' => 'if_exist|in_list[active]',
        ])) {
            return view('backend/modules/socialNetworks/update', [
                'socialNetwork' => $socialNetwork,
            ]);
        }

        // Actualiza los datos de la red social.
        $socialNetworkModel->update($socialNetwork['id'], [
            'link'   => stripAllSpaces($this->request->getPost('link')) ?: null,
            'active' => (bool) stripAllSpaces($this->request->getPost('active')),
        ]);

        return redirect()
            ->route('backend.modules.socialNetworks.index')
            ->with('toast-success', 'La red social se ha modificado correctamente');
    }
}
