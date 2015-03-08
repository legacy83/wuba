<?php

use \Core\View\View;

/*
 * Routes
 * ------
 *
 */

$routes = [ ];

/*
 * Site Routes
 * -----------
 *
 */

$routes[ 'site' ] = function () {

    View::front()->make( 'site/index' );

};

$routes[ 'site/index' ] = $routes[ 'site' ];

/*
 * Debug Routes
 * ------------
 *
 */

$routes[ '@empty' ] = function () {

    View::front()->layout( 'header' );
    View::core()->partials( 'fake/empty' );
    View::front()->layout( 'footer' );

};

$routes[ '@todo' ] = function () {

    View::front()->layout( 'header' );
    View::core()->partials( 'fake/todo' );
    View::front()->layout( 'footer' );

};

/*
 * Apply Routing
 * -------------
 *
 */

$r = new \Core\Routing\Route( 'site', $routes );
$r->apply();
