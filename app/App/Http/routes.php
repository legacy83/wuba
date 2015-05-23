<?php

/*
 * routes
 */

$routes = [ ];

/*
 * site routes
 */

$routes[ 'site' ] = function () {

    echo \Core\View\View::make( 'site/index' );

};

$routes[ 'site/index' ] = $routes[ 'site' ];

/*
 * @todo_ routes
 */

$routes[ '@todo' ] = function () {

    echo 'routes::@todo';

};

/*
 * @foo_ routes
 */

$routes[ '@foo' ] = function () {

    echo 'routes::@foo';

};


/*
 * just apply the routing
 */

( new \Core\Routing\Route( $routes ) )->apply();
