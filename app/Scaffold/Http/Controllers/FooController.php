<?php

namespace Scaffold\Http\Controllers;

use Core\Routing\Controller;
use Core\View\View;

class FooController extends Controller
{
    function index()
    {
        echo View::make( 'foo/index' );
    }
}