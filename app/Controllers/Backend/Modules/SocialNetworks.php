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

    /**
     * Renderiza la página para modificar redes sociales
     * y modifica los datos de una red social.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
    }
}
