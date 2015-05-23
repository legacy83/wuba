<?php

namespace Scaffold\Http\Controllers;

use App\Core\Controller;
use App\Core\View;

class FooController extends Controller
{
    function index()
    {
        echo View::make( 'foo/index' );
    }
}