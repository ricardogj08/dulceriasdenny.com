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
        return view('backend/modules/social-networks/index');
    }
}
