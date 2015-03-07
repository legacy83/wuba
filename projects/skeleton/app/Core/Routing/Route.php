<?php

namespace Core\Routing;

class Route
{
    private $routes;
    private $default;

    function __construct( $default = 'site', array $routes = [ ] )
    {
        $this->routes = $routes;
        $this->default = $default;
    }

    function apply()
    {
        if ( isset( $_REQUEST[ 'r' ] ) ) {

            $router = $_REQUEST[ 'r' ];
            $this->routes[ $router ]();

        } else {

            $this->routes[ $this->default ]();

        }
    }

}