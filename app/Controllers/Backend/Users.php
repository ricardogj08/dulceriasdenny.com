<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Users extends BaseController
{
    /**
     * Renderiza la página para registrar un usuario de acceso
     * y registra los datos de un usuario de acceso.
     */
    public function create()
    {
        return view('backend/users/create');
    }

    /**
     * Renderiza la página de todos los usuarios de acceso.
     */
    public function index()
    {
        return view('backend/users/index');
    }

    /**
     * Renderiza la página para modificar usuarios de acceso
     * y modifica los datos de un usuario de acceso.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
        return view('backend/users/update');
    }

    /**
     * Alterna el estado de cuenta de un usuario de acceso.
     *
     * @param mixed|null $id
     */
    public function toggleActive($id = null)
    {
    }

    /**
     * Elimina el registro de un usuario de acceso.
     *
     * @param mixed|null $id
     */
    public function delete($id = null)
    {
    }
}
