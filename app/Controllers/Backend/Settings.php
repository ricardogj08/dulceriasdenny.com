<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Settings extends BaseController
{
    /**
     * Renderiza la página de todas las configuraciones del backend.
     */
    public function index()
    {
        return view('backend/settings/index');
    }

    /**
     * Renderiza la página para editar las configuraciones del sitio web
     * y modifica las configuraciones del sitio web.
     */
    public function update()
    {
        return view('backend/settings/update');
    }
}
