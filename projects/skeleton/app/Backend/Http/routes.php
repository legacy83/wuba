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
 * Foo Routes
 * ----------
 *
 */

$routes[ 'foo' ] = function () {

    View::backend()->make( 'foo/index' );

};

$routes[ 'foo/index' ] = $routes[ 'foo' ];

$routes[ 'foo/create' ] = function () {

    View::backend()->make( 'foo/create' );

};

$routes[ 'foo/show' ] = function () {

    View::backend()->make( 'foo/show' );

};

$routes[ 'foo/edit' ] = function () {

    View::backend()->make( 'foo/edit' );

};

$routes[ 'foo/destroy' ] = function () {

    View::backend()->make( 'foo/destroy' );

};

/*
 * Bar Routes
 * ----------
 *
 */

$routes[ 'bar' ] = function () {

    View::backend()->make( 'bar/index' );

};

$routes[ 'bar/index' ] = $routes[ 'bar' ];

$routes[ 'bar/create' ] = function () {

    View::backend()->make( 'bar/create' );

};

$routes[ 'bar/show' ] = function () {

    View::backend()->make( 'bar/show' );

};

$routes[ 'bar/edit' ] = function () {

    View::backend()->make( 'bar/edit' );

};

$routes[ 'bar/destroy' ] = function () {

    View::backend()->make( 'bar/destroy' );

};

/*
 * Debug Routes
 * ------------
 *
 */

$routes[ '@empty' ] = function () {

    View::backend()->layout( 'header' );
    View::core()->partials( 'fake/empty' );
    View::backend()->layout( 'footer' );

};

$routes[ '@todo' ] = function () {

    View::backend()->layout( 'header' );
    View::core()->partials( 'fake/todo' );
    View::backend()->layout( 'footer' );

};

/*
 * Apply Routing
 * -------------
 *
 */

$r = new \Core\Routing\Route( 'dashboard', $routes );
$r->apply();
