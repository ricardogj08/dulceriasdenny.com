<?php

namespace App\Controllers\Backend\Modules;

use App\Controllers\BaseController;

class PopUps extends BaseController
{
    /**
     * Renderiza la página para registrar un Pop Up
     * y registra los datos de un Pop Up.
     */
    public function create()
    {
        return view('backend/modules/popups/create');
    }

    /**
     * Renderiza la página de todos los Pop Ups.
     */
    public function index()
    {
        return view('backend/modules/popups/index');
    }

    /**
     * Renderiza la página para modificar Pop Ups
     * y modifica los datos de un Pop Up.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
        return view('backend/modules/popups/update');
    }

    /**
     * Elimina el registro de un Pop Up.
     *
     * @param mixed|null $id
     */
    public function delete($id = null)
    {
    }
}
