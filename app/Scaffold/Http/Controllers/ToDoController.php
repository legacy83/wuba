<?php

namespace Scaffold\Http\Controllers;

use App\Core\Controller;
use App\Core\View;

class ToDoController extends Controller
{
    function index()
    {
        echo View::make( 'to-do/index' );
    }
}