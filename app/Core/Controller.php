<?php

namespace Core;

class Controller
{
    private $defaultAction = 'index';

    public function __invoke()
    {
        $action = $this->defaultAction;

        if ( $r = Route::current() ) {

            $r = explode( '/', $r );

            $action = $r[ sizeof( $r ) - 1 ];
            $action = sizeof( $r ) > 1 ? $action : $this->defaultAction;

        }

        if ( method_exists( $this, $action ) ) {
            $this->$action();
        }
    }
}