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
 * Apply Routing
 * -------------
 *
 */

$r = new \Core\Routing\Route( 'dashboard', $routes );
$r->apply();
