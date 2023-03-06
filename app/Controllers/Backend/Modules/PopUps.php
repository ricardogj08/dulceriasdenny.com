<?php

namespace App\Controllers\Backend\Modules;

use App\Controllers\BaseController;
use App\Libraries\ImageCompressor;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\I18n\Time;
use RuntimeException;

class PopUps extends BaseController
{
    /**
     * Renderiza la página para registrar un Pop Up
     * y registra los datos de un Pop Up.
     */
    public function create()
    {
        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) !== 'post' || ! $this->validate(
            [
                'name'        => 'required|max_length[256]|is_unique[popups.name]',
                'image'       => 'uploaded[image]|max_size[image,4096]|is_image[image]',
                'finished_at' => 'permit_empty|valid_date[Y-m-d]|date_greater_than_equal_to_now',
                'active'      => 'if_exist|in_list[active]',
            ],
            [
                'finished_at' => [
                    'date_greater_than_equal_to_now' => lang('Validation.valid_date'),
                ],
            ]
        )) {
            return view('backend/modules/popups/create');
        }

        $image = $this->request->getFile('image');

        // Valida si la imagen está disponible.
        if (! $image->isValid() || $image->hasMoved()) {
            throw new RuntimeException($image->getErrorString() . '(' . $image->getError() . ')');
        }

        $newImageName = $image->getRandomName();

        // Define la ruta de las imágenes.
        $path = FCPATH . 'uploads/popups/';

        // Almacena la imagen.
        $image->move($path, $newImageName);

        $finished_at = stripAllSpaces($this->request->getPost('finished_at'));

        $popUpModel = model('PopUpModel');

        // Registra el nuevo Pop Up.
        $popUpModel->insert([
            'name'        => trimAll($this->request->getPost('name')),
            'image'       => $newImageName,
            'finished_at' => $finished_at
                ? Time::parse($finished_at)->toDateTimeString()
                : null,
            'active' => (bool) stripAllSpaces($this->request->getPost('active')),
        ]);

        // Comprime la imagen del Pop Up.
        ImageCompressor::getInstance()->run($path . $newImageName);

        return redirect()
            ->route('backend.modules.popups.index')
            ->with('toast-success', 'El Pop Up se ha registrado correctamente');
    }

    /**
     * Renderiza la página de todos los Pop Ups.
     */
    public function index()
    {
        // Define los campos de ordenamiento de resultados.
        $sortByFields = [
            'name'        => 'Nombre',
            'created_at'  => 'Fecha de registro',
            'finished_at' => 'Fecha de término',
        ];

        $sortByList = implode(',', array_keys($sortByFields));

        // Define los modos de ordenamiento de resultados.
        $sortOrderFields = [
            'asc'  => 'Ascendente',
            'desc' => 'Descendente',
        ];

        $sortOrderList = implode(',', array_keys($sortOrderFields));

        // Define los modos de filtrado de Pop Ups habilitados.
        $activeFilterFields = [
            'true'  => 'Habilitados',
            'false' => 'Deshabilitados',
        ];

        $activeFilterList = implode(',', array_keys($activeFilterFields));

        // Valida los parámetros de búsqueda y consulta de los resultados.
        if (! $this->validate([
            'q'         => 'if_exist|max_length[256]',
            'sortBy'    => "permit_empty|in_list[{$sortByList}]",
            'sortOrder' => "permit_empty|in_list[{$sortOrderList}]",
            'active'    => "permit_empty|in_list[{$activeFilterList}]",
            'dateFrom'  => 'permit_empty|valid_date[Y-m-d]',
            'dateTo'    => 'permit_empty|valid_date[Y-m-d]',
        ])) {
            return redirect()
                ->route('backend.modules.popups.index')
                ->withInput();
        }

        // Obtiene el patrón de búsqueda (por defecto: '').
        $queryParam = trimAll($this->request->getGet('q'));

        // Obtiene el campo de ordenamiento (por defecto: 'created_at').
        $sortByParam = stripAllSpaces($this->request->getGet('sortBy') ?: 'created_at');

        // Obtiene el campo del modo de ordenamiento (por defecto: 'desc');
        $sortOrderParam = stripAllSpaces($this->request->getGet('sortOrder') ?: 'desc');

        // Obtiene el campo de filtrado de Pop Ups habilitados (por defecto: '').
        $activeFilterParam = stripAllSpaces($this->request->getGet('active'));

        // Obtiene el campo de filtrado por fecha desde (por defecto: '').
        $dateFromParam = stripAllSpaces($this->request->getGet('dateFrom'));

        // Obtiene el campo de filtrado por fecha hasta (por defecto: '').
        $dateToParam = stripAllSpaces($this->request->getGet('dateTo'));

        $popUpModel = model('PopUpModel');

        // Define los campos a seleccionar.
        $builder = $popUpModel->select('id, name, image, active, finished_at, created_at');

        // Filtra los resultados por habilitados.
        if ($activeFilterParam) {
            $builder->where('active', $activeFilterParam === 'true');
        }

        /**
         * Si el filtro 'finished_at' está presente
         * oculta los resultados que no tienen fecha de término.
         */
        if ($sortByParam === 'finished_at') {
            $builder->where('finished_at !=', null);
        }

        // Filtra los resultados por fecha desde.
        if ($dateFromParam) {
            $dateFrom = Time::parse($dateFromParam)->toDateTimeString();

            if ($sortByParam === 'finished_at') {
                $builder->where('finished_at >=', $dateFrom);
            } else {
                $builder->where('created_at >=', $dateFrom);
            }
        }

        // Filtra los resultados por fecha hasta.
        if ($dateToParam) {
            $dateTo = Time::parse('+1 day ' . $dateToParam)->toDateTimeString();

            if ($sortByParam === 'finished_at') {
                $builder->where('finished_at <', $dateTo);
            } else {
                $builder->where('created_at <', $dateTo);
            }
        }

        /**
         * Consulta todos los Pop Ups registrados
         * que coinciden con el patrón de búsqueda
         * con paginación.
         */
        $popups = $builder
            ->like('name', $queryParam)
            ->orderBy($sortByParam, $sortOrderParam)
            ->paginate(8);

        $activeFilterFields[''] = 'Todos';

        return view('backend/modules/popups/index', [
            'queryParam'         => $queryParam,
            'sortByFields'       => $sortByFields,
            'sortByParam'        => $sortByParam,
            'sortOrderFields'    => $sortOrderFields,
            'sortOrderParam'     => $sortOrderParam,
            'activeFilterFields' => $activeFilterFields,
            'activeFilterParam'  => $activeFilterParam,
            'dateFromParam'      => $dateFromParam,
            'dateToParam'        => $dateToParam,
            'popups'             => $popups,
            'pager'              => $popUpModel->pager,
        ]);
    }

    /**
     * Renderiza la página para modificar Pop Ups
     * y modifica los datos de un Pop Up.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
        // Valida si existe el Pop Up.
        if (! $this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[popups.id]']
        )) {
            throw PageNotFoundException::forPageNotFound();
        }

        // Consulta los datos del Pop Up.
        $popUpModel = model('PopUpModel');

        // Consulta los datos del Pop Up.
        $popup = $popUpModel->select('id, name, image, active, finished_at')->find($id);

        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) !== 'post' || ! $this->validate(
            [
                'name'        => "required|max_length[256]|is_unique[popups.name,id,{$popup['id']}]",
                'image'       => 'permit_empty|uploaded[image]|max_size[image,4096]|is_image[image]',
                'finished_at' => 'permit_empty|valid_date[Y-m-d]',
                'active'      => 'if_exist|in_list[active]',
            ],
            [
                'finished_at' => [
                    'date_greater_than_equal_to_now' => lang('Validation.valid_date'),
                ],
            ]
        )) {
            return view('backend/modules/popups/update', [
                'popup' => $popup,
            ]);
        }

        $image = $this->request->getFile('image');

        $newImageName = $popup['image'];

        // Reemplaza la imagen del Pop Up.
        if ($image->isValid() && ! $image->hasMoved()) {
            // Define la ruta de las imágenes.
            $path = FCPATH . 'uploads/popups/';

            $oldImage = $path . $popup['image'];

            // Elimina la imagen anterior del Pop Up.
            is_file($oldImage) && unlink($oldImage);

            $newImageName = $image->getRandomName();

            // Almacena la nueva imagen.
            $image->move($path, $newImageName);

            // Comprime la imagen del Pop Up.
            ImageCompressor::getInstance()->run($path . $newImageName);
        }

        $finished_at = stripAllSpaces($this->request->getPost('finished_at'));

        // Actualiza los datos del Pop Up.
        $popUpModel->update($popup['id'], [
            'name'        => trimAll($this->request->getPost('name')),
            'image'       => $newImageName,
            'finished_at' => $finished_at
                ? Time::parse($finished_at)->toDateTimeString()
                : null,
            'active' => (bool) stripAllSpaces($this->request->getPost('active')),
        ]);

        return redirect()
            ->route('backend.modules.popups.index')
            ->with('toast-success', 'El Pop Up se ha modificado correctamente');
    }

    /**
     * Elimina el registro de un Pop Up.
     *
     * @param mixed|null $id
     */
    public function delete($id = null)
    {
        // Valida si existe el Pop Up.
        if (! $this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[popups.id]']
        )) {
            throw PageNotFoundException::forPageNotFound();
        }

        $popUpModel = model('PopUpModel');

        // Consulta los datos del Pop Up.
        $popup = $popUpModel->select('id, image')->find($id);

        $path = FCPATH . 'uploads/popups/' . $popup['image'];

        // Elimina la imagen del Pop Up.
        is_file($path) && unlink($path);

        // Elimina el registro del Pop Up.
        $popUpModel->delete($popup['id']);

        return redirect()
            ->route('backend.modules.popups.index')
            ->with('toast-success', 'El Pop Up se ha eliminado correctamente');
    }
}
