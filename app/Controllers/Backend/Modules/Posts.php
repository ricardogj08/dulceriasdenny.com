<?php

namespace App\Controllers\Backend\Modules;

use App\Controllers\BaseController;

class Posts extends BaseController
{
    /**
     * Renderiza la página para registrar un artículo
     * y registra los datos de un artículo.
     */
    public function create()
    {
        return view('backend/modules/posts/create');
    }

    /**
     * Renderiza la página de todos los artículos.
     */
    public function index()
    {
        return view('backend/modules/posts/index');
    }

    /**
     * Renderiza la página de los datos de un artículo.
     *
     * @param mixed|null $id
     */
    public function show($id = null)
    {
        return view('backend/modules/posts/show');
    }

    /**
     * Renderiza la página para modificar artículos
     * y modifica los datos de un artículo.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
        return view('backend/modules/posts/update');
    }

    /**
     * Elimina el registro de un artículo.
     *
     * @param mixed|null $id
     */
    public function delete($id = null)
    {
    }
}
