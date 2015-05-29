<?php

/*
 * Application Constants
 */

$appDir = __DIR__;
$appUrl = "{$_SERVER[ 'SERVER_NAME' ]}{$_SERVER[ 'SCRIPT_NAME' ]}";

define( 'APP_DIR', $appDir );
define( 'CONFIG_DIR', "$appDir/../config" );
define( 'PUBLIC_DIR', "$appDir/../public" );
define( 'RESOURCES_DIR', "$appDir/../resources" );
define( 'VENDOR_DIR', "$appDir/../vendor" );

define( 'PUBLIC_URL', htmlentities( dirname( "//$appUrl" ) ) );

/*
 * Start the session
 */

session_start();

/*
 * The Composer Autoloader
 */

if ( file_exists( VENDOR_DIR . '/autoload.php' ) ) {
    include VENDOR_DIR . '/autoload.php';
}

/*
 * The SPL Autoloader
 * @see https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
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
