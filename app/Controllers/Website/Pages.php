<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    /**
     * Renderiza la página del home.
     */
    public function home()
    {
        // Read the JSON files
        $jsonProducts   = file_get_contents('temporalDB/products.json');
        $jsonCategories = file_get_contents('temporalDB/categories.json');
        $jsonSeasons = file_get_contents('temporalDB/seasons.json');
        $jsonBrands = file_get_contents('temporalDB/brands.json');

        // Decode the JSON files
        $products = json_decode($jsonProducts, true);
        $categories = json_decode($jsonCategories, true);
        $seasons = json_decode($jsonSeasons, true);
        $brands = json_decode($jsonBrands, true);

        $favorites = array_slice($products, 0, 3);
        return view('website/pages/home', [
            'favorites' => $favorites,
            'categories' => $categories,
            'seasons' => $seasons,
            'brands' => $brands
        ]);
    }

    /**
     * Renderiza la página de promociones
     */
    public function promotions()
    {
        return view('website/pages/promotions');
    }

    /**
     * Renderiza la página de sucursales.
     */
    public function offices()
    {
        // Read the JSON files
        $jsonOffices = file_get_contents('temporalDB/offices.json');

        // Decode the JSON files
        $offices = json_decode($jsonOffices, true);
        // Get cities
        $cities = array_map(function ($city) {
            return $city['name'];
        }, $offices);

        $initialMapUrl = $offices[0]['offices'][0]['mapCoords'];
        return view('website/pages/offices', [
            'offices' => $offices,
            'cities' => $cities,
            'initialMapUrl' => $initialMapUrl
        ]);
    }

    /**
     * Renderiza la página de acerca de nosotros.
     */
    public function about()
    {
        // Read the JSON files
        $jsonCategories = file_get_contents('temporalDB/categories.json');

        // Decode the JSON files
        $categories = json_decode($jsonCategories, true);
        return view('website/pages/about', [
            'categories' => $categories
        ]);
    }

    /**
     * Renderiza la página de preguntas frecuentes.
     */
    public function faqs()
    {
        return view('website/pages/faqs');
    }

    /**
     * Renderiza la página de aviso de privacidad.
     */
    public function privacy()
    {
        return view('website/pages/privacy');
    }

    /**
     * Renderiza la página de aviso de privacidad.
     */
    public function promotions()
    {
        // Decode the JSON files
        $jsonProducts = file_get_contents('temporalDB/products.json');
        $products = json_decode($jsonProducts, true);
        return view('website/pages/promotions', [
            'products' => $products
        ]);
    }

    /**
     * Renderiza la página de error 404.
     */
    public function error404()
    {
        $this->response->setStatusCode(404);

        return view('website/pages/error404');
    }

    /**
     * Renderiza el sitemap del sitio web.
     */
    public function sitemap()
    {
        return view('website/pages/sitemap');
    }
}
