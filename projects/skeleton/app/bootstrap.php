<?php

ini_set( 'display_errors', 1 );

/*
 * Aplication Constants
 * --------------------
 *
 */

$appDir = __DIR__;
$frontUrl = 'www.192.168.27.14.xip.io';
$backendUrl = 'http://www.192.168.27.14.xip.io/backend';

define( 'APP_DIR', $appDir );
define( 'CORE_APP_DIR', "$appDir/Core" );
define( 'FRONT_APP_DIR', "$appDir/Front" );
define( 'BACKEND_APP_DIR', "$appDir/Backend" );

define( 'FRONT_URL', "//$frontUrl" );
define( 'BACKEND_URL', "//$backendUrl" );

define( 'FRONT_PUBLIC_DIR', "$appDir/../public" );
define( 'BACKEND_PUBLIC_DIR', "$appDir/../public/backend" );

define( 'FRONT_RESOURCES_DIR', "$appDir/../resources" );
define( 'BACKEND_RESOURCES_DIR', "$appDir/../resources/backend" );

define( 'FRONT_VIEWS_DIR', "$appDir/../resources/front/views" );
define( 'BACKEND_VIEWS_DIR', "$appDir/../resources/backend/views" );

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