<?php

namespace Core;

class Route
{
    private $routes;
    private $default;

    function __construct( array $routes = [ ], $default = 'site' )
    {
        $this->routes = $routes;
        $this->default = $default;
    }

    function apply()
    {
        if ( $r = static::current() ) {

            $this->routes[ $r ]();

        } else {

            $this->routes[ $this->default ]();

        }
    }

    static function current()
    {
        return isset( $_REQUEST[ 'r' ] ) ? $_REQUEST[ 'r' ] : NULL;
    }

    function __invoke()
    {
        $this->apply();
    }
}