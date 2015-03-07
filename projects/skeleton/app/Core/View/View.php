<?php

namespace Core\View;

final class View
{
    private $viewsDir;

    /*
     * View Construct
     * --------------
     *
     */

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

    /*
     * Static Factories
     * ----------------
     *
     */

    static function front()
    {
        return new View( FRONT_VIEWS_DIR );
    }

    static function backend()
    {
        return new View( BACKEND_VIEWS_DIR );
    }

}