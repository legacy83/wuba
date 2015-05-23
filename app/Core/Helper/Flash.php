<?php

namespace Core\Helper;

final class Flash
{
    private $key;

    public function __construct( $key )
    {
        $this->key = $key;
    }

    /*
     * the functionality
     */

    public function has()
    {
        return !empty( $_SESSION[ $this->key ] );
    }

    public function get( $keep = FALSE )
    {
        $messages = unserialize( serialize( $_SESSION[ $this->key ] ) );
        $_SESSION[ $this->key ] = $keep ? $_SESSION[ $this->key ] : [ ];

        return $messages;
    }

    public function add( $message )
    {
        if ( strlen( $message ) > 0 ) {
            $_SESSION[ $this->key ][ ] = $message;
        }
    }

    /*
     * the static functionality
     */

    static function success()
    {
        static $flash;
        if ( !isset( $flash ) ) {
            $called = get_called_class();
            $flash = new Flash( "$called::success" );
        }

        return $flash;
    }
}