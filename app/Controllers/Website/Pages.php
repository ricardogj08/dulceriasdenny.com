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
        return view('website/pages/home');
    }

    /**
     * Renderiza la página de sucursales.
     */
    public function offices()
    {
        return view('website/pages/offices');
    }

    /**
     * Renderiza la página de acerca de nosotros.
     */
    public function about()
    {
        return view('website/pages/about');
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
