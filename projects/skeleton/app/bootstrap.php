<?php

ini_set( 'display_errors', 1 );

/*
 * Aplication Constants
 * --------------------
 *
 */

$baseDir = __DIR__;
$frontUrl = 'www.192.168.27.14.xip.io';
$backendUrl = 'http://www.192.168.27.14.xip.io/backend';

define( 'APP_DIR', $baseDir );
define( 'CORE_APP_DIR', "$baseDir/Core" );
define( 'FRONT_APP_DIR', "$baseDir/Front" );
define( 'BACKEND_APP_DIR', "$baseDir/Backend" );

define( 'FRONT_URL', "//$frontUrl" );
define( 'BACKEND_URL', "//$backendUrl" );

define( 'FRONT_PUBLIC_DIR', "$baseDir/public" );
define( 'BACKEND_PUBLIC_DIR', "$baseDir/public/backend" );

define( 'FRONT_RESOURCES_DIR', "$baseDir/resources" );
define( 'BACKEND_RESOURCES_DIR', "$baseDir/resources/backend" );

define( 'FRONT_VIEWS_DIR', "$baseDir/resources/views" );
define( 'BACKEND_VIEWS_DIR', "$baseDir/resources/backend/views" );

/*
 * SPL Autoloader
 * --------------
 *
 * @see https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
 *
 */

spl_autoload_register( function ( $className ) {

    $className = ltrim( $className, '\\' );
    $fileName = '';
    if ( $lastNsPos = strrpos( $className, '\\' ) ) {
        $namespace = substr( $className, 0, $lastNsPos );
        $className = substr( $className, $lastNsPos + 1 );
        $fileName = str_replace( '\\', DIRECTORY_SEPARATOR, $namespace ) . DIRECTORY_SEPARATOR;
    }

    $fileName .= str_replace( '_', DIRECTORY_SEPARATOR, $className ) . '.php';

    require "$fileName";

} );