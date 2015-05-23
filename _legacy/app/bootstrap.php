<?php

ini_set( 'display_errors', 1 );

/*
 * Aplication Constants
 * --------------------
 *
 */

$appDir = __DIR__;
$frontUrl = 'www.192.168.27.14.xip.io';
$backendUrl = 'admin.192.168.27.14.xip.io';

define( 'APP_DIR', $appDir );
define( 'CONFIG_DIR', "$appDir/../config" );
define( 'PUBLIC_DIR', "$appDir/../public" );
define( 'RESOURCES_DIR', "$appDir/../resources" );

define( 'PUBLIC_URL', "//$frontUrl" );
define( 'BACKEND_URL', "//$backendUrl" );

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