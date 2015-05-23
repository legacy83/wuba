<?php

/*
 * Routes
 */

$routes = [ ];

/*
 * Site Routes
 */

$routes[ 'site' ] = function () {

    echo \Core\View\View::make( 'site/index', [
        'hello' => 'Hello Wuba!!!',
    ] );

};

$routes[ 'site/index' ] = $routes[ 'site' ];

/*
 * Just apply the routing
 */

( new \Core\Routing\Route( $routes ) )->apply();
