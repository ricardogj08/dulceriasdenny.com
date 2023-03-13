<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Categories extends BaseController
{
    /**
     * Renderiza la página de todos los productos de una categoría.
     */
    public function products()
    {
        $jsonProducts = file_get_contents('temporalDB/products.json');
        $jsonBrands = file_get_contents('temporalDB/brands.json');
        $jsonCategories = file_get_contents('temporalDB/categories.json');

        $products = json_decode($jsonProducts, true);
        $categories = json_decode($jsonCategories, true);
        $brands = json_decode($jsonBrands, true);

        return view('website/categories/products', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
}
