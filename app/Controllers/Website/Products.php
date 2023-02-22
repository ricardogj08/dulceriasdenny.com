<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Products extends BaseController
{
    /**
     * Renderiza la página de todos los productos.
     */
    public function index()
    {
        return view('website/products/index');
    }

    /**
     * Renderiza la página de un producto.
     *
     * @param mixed|null $slug
     */
    public function show($slug = null)
    {
        return view('website/products/show');
    }
}
