<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(ENVIRONMENT === 'production' ? 'App\Controllers\Website\Pages::error404' : 'App\Controllers\Website\Pages::error404');
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Ruta del home.
$routes->get('/', 'Website\Pages::home', ['as' => 'website.pages.home']);

// Ruta del sitemap.
$routes->get('sitemap.xml', 'Website\Pages::sitemap', ['as' => 'website.pages.sitemap']);

// Definición de rutas de otras páginas.
$routes->get('promociones', 'Website\Pages::promotions', ['as' => 'website.pages.promotions']);
$routes->get('donde-comprar-dulces-mayoreo', 'Website\Pages::offices', ['as' => 'website.pages.offices']);
$routes->get('nosotros', 'Website\Pages::about', ['as' => 'website.pages.about']);
$routes->get('preguntas-frecuentes', 'Website\Pages::faqs', ['as' => 'website.pages.faqs']);
$routes->get('aviso-privacidad', 'Website\Pages::privacy', ['as' => 'website.pages.privacy']);
$routes->get('promociones', 'Website\Pages::promotions', ['as' => 'website.pages.promotions']);

// Definición de rutas del formulario de contacto.
$routes->group('contacto', static function ($routes) {
    $routes->get('gracias', 'Website\Prospects::create', ['as' => 'website.prospects.create']);
});

// Definición de rutas del blog.
$routes->group('blog', static function ($routes) {
    $routes->get('', 'Website\Posts::index', ['as' => 'website.posts.index']);
    $routes->get('(:segment)', 'Website\Posts::show/$1', ['as' => 'website.posts.show']);
});

// Definición de rutas de productos generales.
$routes->group('productos', static function ($routes) {
    $routes->get('', 'Website\Products::index', ['as' => 'website.products.index']);
    $routes->get('(:segment)', 'Website\Products::show/$1', ['as' => 'website.products.show']);
});

// Definición de rutas de las marcas.
$routes->group('marcas-dulces', static function ($routes) {
    $routes->get('', 'Website\Brands::index', ['as' => 'website.brands.index']);
    $routes->get('(:segment)', 'Website\Brands::products/$1', ['as' => 'website.brands.products']);
});

// Definición de rutas de todas las categorías.
$routes->get('venta-chocolates', 'Website\Categories::products', ['as' => 'website.categories.chocolates']);
$routes->get('venta-paletas', 'Website\Categories::products', ['as' => 'website.categories.paletas']);
$routes->get('venta-caramelos', 'Website\Categories::products', ['as' => 'website.categories.caramelos']);
$routes->get('venta-galletas', 'Website\Categories::products', ['as' => 'website.categories.galletas']);
$routes->get('surtidos-dulces', 'Website\Categories::products', ['as' => 'website.categories.surtidos']);
$routes->get('bombones-mayoreo', 'Website\Categories::products', ['as' => 'website.categories.bombones']);
$routes->get('dulces-tipicos', 'Website\Categories::products', ['as' => 'website.categories.tipicos']);
$routes->get('articulos-fiesta', 'Website\Categories::products', ['as' => 'website.categories.fiestas']);
$routes->get('venta-gomitas', 'Website\Categories::products', ['as' => 'website.categories.gomitas']);
$routes->get('venta-botanas', 'Website\Categories::products', ['as' => 'website.categories.botanas']);
$routes->get('venta-dulces-enchilados', 'Website\Categories::products', ['as' => 'website.categories.enchilados']);
$routes->get('venta-chicles', 'Website\Categories::products', ['as' => 'website.categories.chicles']);

// Definición de rutas de todas las temporadas.
$routes->get('dulces-dia-muertos', 'Website\Seasons::products', ['as' => 'website.seasons.muertos']);
$routes->get('dulces-mexicanos', 'Website\Seasons::products', ['as' => 'website.seasons.patrias']);
$routes->get('dulces-san-valentin', 'Website\Seasons::products', ['as' => 'website.seasons.valentin']);
$routes->get('dulces-dia-nino', 'Website\Seasons::products', ['as' => 'website.seasons.nino']);
$routes->get('dulces-dia-madres', 'Website\Seasons::products', ['as' => 'website.seasons.madres']);
$routes->get('dulces-navidad', 'Website\Seasons::products', ['as' => 'website.seasons.navidad']);
$routes->get('dulces-cumpleanos', 'Website\Seasons::products', ['as' => 'website.seasons.cumpleanos']);
$routes->get('mesas-dulces', 'Website\Seasons::products', ['as' => 'website.seasons.mesas']);
$routes->get('dulces-dia-madre', 'Website\Seasons::products', ['as' => 'website.seasons.madres']);

// Definición de rutas del backend.
$routes->group('backend', static function ($routes) {
    // Definición de rutas de inicio de sesión.
    $routes->group('login', static function ($routes) {
        $routes->get('', 'Backend\Auth::login', ['as' => 'backend.auth.login']);
        $routes->post('', 'Backend\Auth::login', ['as' => 'backend.auth.login']);
        $routes->get('olvidado', 'Backend\Auth::forgotten', ['as' => 'backend.auth.forgotten']);
        $routes->post('olvidado', 'Backend\Auth::forgotten', ['as' => 'backend.auth.forgotten']);
        $routes->get('recuperacion/(:num)/(:hash)', 'Backend\Auth::recovery/$1/$2', ['as' => 'backend.auth.recovery']);
        $routes->post('recuperacion/(:num)/(:hash)', 'Backend\Auth::recovery/$1/$2', ['as' => 'backend.auth.recovery']);
    });

    // Ruta de cierre de sesión
    $routes->get('logout', 'Backend\Auth::logout', ['as' => 'backend.auth.logout']);

    // Definición de rutas de la cuenta del usuario de sesión.
    $routes->group('cuenta', static function ($routes) {
        $routes->get('', 'Backend\Account::update', ['as' => 'backend.account.update']);
        $routes->post('', 'Backend\Account::update', ['as' => 'backend.account.update']);
    });

    // Definición de rutas de configuraciones del backend.
    $routes->group('configuraciones', static function ($routes) {
        $routes->get('', 'Backend\Settings::index', ['as' => 'backend.settings.index']);
        $routes->get('modificar', 'Backend\Settings::update', ['as' => 'backend.settings.update']);
        $routes->post('modificar', 'Backend\Settings::update', ['as' => 'backend.settings.update']);
    });

    // Definición de rutas de administración de usuarios al backend.
    $routes->group('usuarios', static function ($routes) {
        $routes->get('nuevo', 'Backend\Users::create', ['as' => 'backend.users.create']);
        $routes->post('nuevo', 'Backend\Users::create', ['as' => 'backend.users.create']);
        $routes->get('', 'Backend\Users::index', ['as' => 'backend.users.index']);
        $routes->get('modificar/(:num)', 'Backend\Users::update/$1', ['as' => 'backend.users.update']);
        $routes->post('modificar/(:num)', 'Backend\Users::update/$1', ['as' => 'backend.users.update']);
        $routes->post('alternar-cuenta/(:num)', 'Backend\Users::toggleActive/$1', ['as' => 'backend.users.toggle-active']);
        $routes->post('eliminar/(:num)', 'Backend\Users::delete/$1', ['as' => 'backend.users.delete']);
    });

    // Definición de rutas de todos los módulos del backend.
    $routes->group('modulos', static function ($routes) {
        // Definición de rutas del módulo de prospectos.
        $routes->group('prospectos', static function ($routes) {
            $routes->get('', 'Backend\Modules\Prospects::index', ['as' => 'backend.modules.prospects.index']);
            $routes->get('(:num)', 'Backend\Modules\Prospects::show/$1', ['as' => 'backend.modules.prospects.show']);
            $routes->get('modificar/(:num)', 'Backend\Modules\Prospects::update/$1', ['as' => 'backend.modules.prospects.update']);
            $routes->post('modificar/(:num)', 'Backend\Modules\Prospects::update/$1', ['as' => 'backend.modules.prospects.update']);
            $routes->post('eliminar/(:num)', 'Backend\Modules\Prospects::delete/$1', ['as' => 'backend.modules.prospects.delete']);
        });

        // Definición de rutas del módulo del blog.
        $routes->group('blog', static function ($routes) {
            $routes->get('nuevo', 'Backend\Modules\Posts::create', ['as' => 'backend.modules.posts.create']);
            $routes->post('nuevo', 'Backend\Modules\Posts::create', ['as' => 'backend.modules.posts.create']);
            $routes->get('', 'Backend\Modules\Posts::index', ['as' => 'backend.modules.posts.index']);
            $routes->get('(:num)', 'Backend\Modules\Posts::show/$1', ['as' => 'backend.modules.posts.show']);
            $routes->get('modificar/(:num)', 'Backend\Modules\Posts::update/$1', ['as' => 'backend.modules.posts.update']);
            $routes->post('modificar/(:num)', 'Backend\Modules\Posts::update/$1', ['as' => 'backend.modules.posts.update']);
            $routes->post('eliminar/(:num)', 'Backend\Modules\Posts::delete/$1', ['as' => 'backend.modules.posts.delete']);
        });

        // Definición de rutas del módulo de redes sociales.
        $routes->group('redes-sociales', static function ($routes) {
            $routes->get('', 'Backend\Modules\SocialNetworks::index', ['as' => 'backend.modules.socialNetworks.index']);
            $routes->get('modificar/(:num)', 'Backend\Modules\SocialNetworks::update/$1', ['as' => 'backend.modules.socialNetworks.update']);
            $routes->post('modificar/(:num)', 'Backend\Modules\SocialNetworks::update/$1', ['as' => 'backend.modules.socialNetworks.update']);
        });

        // Definición de rutas del módulo de Pop Ups.
        $routes->group('popups', static function ($routes) {
            $routes->get('nuevo', 'Backend\Modules\PopUps::create', ['as' => 'backend.modules.popups.create']);
            $routes->post('nuevo', 'Backend\Modules\PopUps::create', ['as' => 'backend.modules.popups.create']);
            $routes->get('', 'Backend\Modules\PopUps::index', ['as' => 'backend.modules.popups.index']);
            $routes->get('modificar/(:num)', 'Backend\Modules\PopUps::update/$1', ['as' => 'backend.modules.popups.update']);
            $routes->post('modificar/(:num)', 'Backend\Modules\PopUps::update/$1', ['as' => 'backend.modules.popups.update']);
            $routes->post('eliminar/(:num)', 'Backend\Modules\PopUps::delete/$1', ['as' => 'backend.modules.popups.delete']);
        });
    });

    // Ruta por defecto.
    $routes->addRedirect('', 'backend.modules.prospects.index', 301);
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
