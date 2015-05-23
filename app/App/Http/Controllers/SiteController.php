<?php

namespace App\Http\Controllers;

use Core\Routing\Controller;
use Core\View\View;

class SiteController extends Controller
{
    function index()
    {
        echo View::make( 'site/index' );
    }
}