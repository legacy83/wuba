<?php

ini_set( 'display_errors', 1 );

/*
 * Turn on the lights
 * ... and run the application
 */

require __DIR__ . '/../app/bootstrap.php';

( new \Core\Route( array_merge(
    require APP_DIR . '/App/Http/routes.php',
    require APP_DIR . '/Scaffold/Http/routes.php'
) ) )->apply();