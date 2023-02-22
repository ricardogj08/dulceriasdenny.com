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
        return view('website/seasons/products');
    }
}
