<?php

namespace Core;

final class View
{
    private $view;
    private $models;
    private $viewsDir;

    private function __construct( $view, $models = [ ] )
    {
        $this->view = $view;
        $this->models = $models;
        $this->viewsDir = RESOURCES_DIR . '/views';
    }

    private function render()
    {
        ob_start();

        extract( $this->models );
        include( $this->viewsDir . "/{$this->view}.php" );

        return trim( ob_get_clean() );
    }

    /*
     * static functionality
     */

    static function make( $view, $models = array() )
    {
        $view = new View( $view, $models );
        $view->viewsDir = RESOURCES_DIR . '/views';

        return $view->render();
    }

    static function layout( $view, $models = array() )
    {
        $view = new View( $view, $models );
        $view->viewsDir = RESOURCES_DIR . '/views/_layout';

        return $view->render();
    }

    static function partials( $view, $models = array() )
    {
        $view = new View( $view, $models );
        $view->viewsDir = RESOURCES_DIR . '/views/_layout';

        return $view->render();
    }

}