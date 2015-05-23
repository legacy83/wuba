<?php

ini_set( 'display_errors', 1 );

/*
 * Turn on the lights
 * ... and run the application
 */

require __DIR__ . '/../app/bootstrap.php';
require_once APP_DIR . '/App/Http/routes.php';

die( 'hey' );