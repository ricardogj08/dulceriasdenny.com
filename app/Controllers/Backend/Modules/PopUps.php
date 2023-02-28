<?php

namespace App\Controllers\Backend\Modules;

use App\Controllers\BaseController;

class PopUps extends BaseController
{
    /**
     * Renderiza la página de todos los Pop-Ups.
     */
    public function index()
    {
        return view('backend/modules/popups/index');
    }
}
