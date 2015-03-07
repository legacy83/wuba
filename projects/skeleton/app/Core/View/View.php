<?php

namespace Core\View;

final class View
{
    private $viewsDir;

    private function __construct( $viewsDir )
    {
        $this->viewsDir = $viewsDir;
    }

    /*
     * View Functionality
     * ------------------
     *
     */

    function make( $view, $models = array() )
    {
        extract( $models );
        include( $this->viewsDir . "/$view.php" );
    }

    function layout( $layout, $models = array() )
    {
        $this->make( "/_layout/$layout", $models );
    }

    function partials( $partial, $models = array() )
    {
        $this->make( "/_partials/$partial", $models );
    }

    /*
     * View Static Factories
     * ---------------------
     *
     */

    static function core()
    {
        return new View( CORE_VIEWS_DIR );
    }

    static function front()
    {
        return new View( FRONT_VIEWS_DIR );
    }

    static function backend()
    {
        return new View( BACKEND_VIEWS_DIR );
    }

}