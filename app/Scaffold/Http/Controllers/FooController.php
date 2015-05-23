<?php

namespace Scaffold\Http\Controllers;

use Core\Controller;
use Core\View;

class FooController extends Controller
{
    function index()
    {
        echo View::make( 'foo/index' );
    }
}