<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Users extends BaseController
{
    /**
     * Renderiza la página de todos los usuarios del backend.
     */
    public function index()
    {
        return view('backend/users/index');
    }
}
