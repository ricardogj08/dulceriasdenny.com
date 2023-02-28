<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Account extends BaseController
{
    /**
     * Renderiza la página para modificar las cuentas de sesión
     * y modifica los datos del usuario de sesión.
     */
    public function update()
    {
        return view('backend/account/update');
    }
}
