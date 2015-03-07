<?php

/*
 * Backend Routes
 * --------------
 *
 */

$routes = [ ];

/*
 * Dashboard Routes
 * ----------------
 */

$routes[ 'dashboard' ] = function () {

    echo "Dashboard OK!";

};

$routes[ 'dashboard/index' ] = $routes[ 'dashboard' ];

/*
 * Apply Routing
 * -------------
 *
 */

$r = new \Core\Routing\Route( 'dashboard', $routes );
$r->apply();
