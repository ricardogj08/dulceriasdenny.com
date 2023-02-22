<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Categories extends BaseController
{
    // Renderiza la página de todos los productos de una categoría.
    public function products()
    {
        return view('website/categories/products');
    }
}
