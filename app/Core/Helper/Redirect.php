<?php

namespace Core\Helper;

abstract class Redirect
{
    static function to( $r, $params = [ ] )
    {
        $url = PUBLIC_URL;
        $query = http_build_query( array_merge( [ 'r' => $r ], $params ) );

        header( "location:$url?$query" );
        die();
    }
}