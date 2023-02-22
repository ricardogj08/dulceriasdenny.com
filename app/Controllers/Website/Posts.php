<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Posts extends BaseController
{
    /**
     * Renderiza la página de blog.
     */
    public function index()
    {
        return view('website/posts/index');
    }

    /**
     * Renderiza la página de un artículo.
     *
     * @param mixed|null $slug
     */
    public function show($slug = null)
    {
        return view('website/posts/show');
    }
}
