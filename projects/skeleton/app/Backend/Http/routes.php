<?php

use \Core\View\View;

/*
 * Backend Routes
 * --------------
 *
 */

$routes = [ ];

/*
 * Dashboard Routes
 * ----------------
 *
 */

$routes[ 'dashboard' ] = function () {

    View::backend()->make( 'dashboard/index' );

};

$routes[ 'dashboard/index' ] = $routes[ 'dashboard' ];

/*
 * Debug Routes
 * ------------
 *
 */

$routes[ '@todo' ] = function () {

    View::backend()->layout( 'header' );
    View::core()->partials( 'fake/todo' );
    View::backend()->layout( 'footer' );

};

$routes[ '@debug' ] = function () {

    View::backend()->layout( 'header' );
    View::core()->partials( 'fake/debug' );
    View::core()->partials( 'debug/request' );
    View::backend()->layout( 'footer' );

};

/*
 * Apply Routing
 * -------------
 *
 */

$r = new \Core\Routing\Route( 'dashboard', $routes );
$r->apply();
