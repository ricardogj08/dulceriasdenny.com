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
        $jsonProducts = file_get_contents('temporalDB/products.json');
        $products = json_decode($jsonProducts, true);
        $recommendations = array_slice($products, 0, 3);
        return view('website/products/show', [
            'recommendations' => $recommendations
        ]);
    }
}
