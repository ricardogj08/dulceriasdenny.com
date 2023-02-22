<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Brands extends BaseController
{
    /**
     * Renderiza la página de todas las marcas.
     */
    public function index()
    {
        return view('website/brands/index');
    }

    /**
     * Renderiza la página de todos los productos de una marca.
     */
    public function products()
    {
        return view('website/brands/products');
    }
}
