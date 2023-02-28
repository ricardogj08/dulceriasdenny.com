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
}
