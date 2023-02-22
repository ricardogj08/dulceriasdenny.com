<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Prospects extends BaseController
{
    /**
     * Renderiza la página de contacto.
     */
    public function new()
    {
        return view('website/prospects/new');
    }

    /**
     * Registra un nuevo prospecto y
     * renderiza la página de gracias.
     */
    public function create()
    {
        return view('website/prospects/create');
    }
}
