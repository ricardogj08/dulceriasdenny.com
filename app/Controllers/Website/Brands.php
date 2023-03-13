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
        $jsonBrands = file_get_contents('temporalDB/brands.json');
        $brands = json_decode($jsonBrands, true);

        return view('website/brands/index', [
            'brands' => $brands
        ]);
    }

    /**
     * Renderiza la página de todos los productos de una marca.
     */
    public function products()
    {
        return view('website/brands/products');
    }
}
