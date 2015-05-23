<?php

namespace Core\Routing;

class Controller
{
    public function __invoke()
    {
        if ( $r = Route::current() ) {

            $r = explode( '/', $r );

            $action = $r[ sizeof( $r ) - 1 ];
            $action = sizeof( $r ) > 1 ? $action : 'index';

            if ( method_exists( $this, $action ) ) {
                $this->$action();
            }

        }
    }
}