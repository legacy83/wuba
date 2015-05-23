<?php

/*
 * Routes
 */

$routes = [ ];

/*
 * Site Routes
 */

$routes[ 'site' ] = function () {

    echo 'routes::site';

};

$routes[ 'site/index' ] = $routes[ 'site' ];

/*
 * Just apply the routing
 */

( new \Core\Routing\Route( $routes ) )->apply();
