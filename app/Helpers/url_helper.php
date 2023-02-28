<?php

/**
 * Valida si la URL actual es hijo de la URL del nombre de una ruta.
 */
function url_is_child(string $routeName)
{
    $path = single_service('uri', url_to($routeName))->getPath();

    return url_is($path . '*');
}
