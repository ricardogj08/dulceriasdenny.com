<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Seasons extends BaseController
{
    /**
     * Renderiza la página de todos los productos de una temporada.
     */
    public function products()
    {
        $jsonProducts   = file_get_contents('temporalDB/products.json');
        $jsonBrands     = file_get_contents('temporalDB/brands.json');
        $jsonCategories = file_get_contents('temporalDB/categories.json');
        $jsonSeasons    = file_get_contents('temporalDB/seasons.json');

        $products   = json_decode($jsonProducts, true);
        $categories = json_decode($jsonCategories, true);
        $brands     = json_decode($jsonBrands, true);
        $seasons    = json_decode($jsonSeasons, true);

        return view('website/seasons/products', [
            'products'   => $products,
            'categories' => $categories,
            'brands'     => $brands,
            'seasons'    => $seasons,
        ]);
    }
}
