<?php

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

    echo "Site OK!";

};

$routes[ 'site/index' ] = $routes[ 'site' ];

/*
 * Apply Routing
 * -------------
 *
 */

$r = new \Core\Routing\Route( 'site', $routes );
$r->apply();
