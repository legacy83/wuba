<?php

namespace Core\Helper;

abstract class Url
{
    static function to( $r, $params = [ ] )
    {
        $url = PUBLIC_URL;
        $query = http_build_query( array_merge( [ 'r' => $r ], $params ) );

        return "$url?$query";
    }

    static function home()
    {
        return PUBLIC_URL;
    }
}