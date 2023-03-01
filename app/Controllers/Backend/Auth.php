<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    /**
     * Renderiza la página de inicio de sesión
     * y genera la sesión de un usuario.
     */
    public function login()
    {
        return view('backend/auth/login');
    }

    /**
     * Cierra la sesión de un usuario.
     */
    public function logout()
    {
    }

    /**
     * Renderiza la página para solicitar la recuperación de una contraseña
     * y envía un enlace de recuperación de contraseña por email.
     */
    public function forgotten()
    {
        return view('backend/auth/forgotten');
    }

    /**
     * Renderiza la página para restaurar una contraseña
     * y restaura la contraseña de un usuario.
     *
     * @param mixed|null $id
     * @param mixed|null $key
     */
    public function recovery($id = null, $key = null)
    {
        return view('backend/auth/recovery');
    }
}
