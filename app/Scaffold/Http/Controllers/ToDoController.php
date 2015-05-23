<?php

namespace Scaffold\Http\Controllers;

use Core\Routing\Controller;
use Core\View\View;

class ToDoController extends Controller
{
    function index()
    {
        echo View::make( 'to-do/index' );
    }
}