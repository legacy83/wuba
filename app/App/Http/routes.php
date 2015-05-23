<?php

$routes = [ ];
$controller = NULL;

/*
 * site routing
 */

$controller = new \App\Http\Controllers\SiteController();
$routes[ 'site' ] = $controller;
$routes[ 'site/index' ] = $controller;

return $routes;
