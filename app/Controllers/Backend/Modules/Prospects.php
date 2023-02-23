<?php

namespace App\Controllers\Backend\Modules;

use App\Controllers\BaseController;

class Prospects extends BaseController
{
    /**
     * Renderiza la página de todos los prospectos.
     */
    public function index()
    {
        return view('backend/modules/prospects/index');
    }

    /**
     * Renderiza la página de los datos de un prospecto.
     *
     * @param mixed|null $id
     */
    public function show($id = null)
    {
        return view('backend/modules/prospects/show');
    }

    /**
     * Renderiza la página para modificar prospectos
     * y modifica los datos de un prospecto.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
        return view('backend/modules/prospects/update');
    }

    /**
     * Elimina el registro de un prospecto.
     *
     * @param mixed|null $id
     */
    public function delete($id = null)
    {
    }
}
