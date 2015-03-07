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
    View::backend()->partials( 'debug/todo' );
    View::backend()->layout( 'footer' );

};

$routes[ '@postSubmit' ] = function () {

    View::backend()->layout( 'header' );
    View::backend()->partials( 'debug/postSubmit' );
    View::backend()->layout( 'footer' );

};

/*
 * Apply Routing
 * -------------
 *
 */

$r = new \Core\Routing\Route( 'dashboard', $routes );
$r->apply();
