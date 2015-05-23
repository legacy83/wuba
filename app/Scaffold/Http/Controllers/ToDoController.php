<?php

namespace Scaffold\Http\Controllers;

use Core\Controller;
use Core\View;

class ToDoController extends Controller
{
    function index()
    {
        echo View::make( 'to-do/index' );
    }
}