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

    /*
     * Route Functionality
     * -------------------
     *
     */

    function apply()
    {
        if ( $r = static::current() ) {

            $this->routes[ $r ]();

        } else {

            $this->routes[ $this->default ]();

        }
    }

    /*
     * Route Static Functionality
     * --------------------------
     *
     */

    static function current()
    {
        return isset( $_REQUEST[ 'r' ] ) ? $_REQUEST[ 'r' ] : NULL;
    }

    /*
     * Route Magic Methods
     * -------------------
     *
     */

    function __invoke()
    {
        $this->apply();
    }

}