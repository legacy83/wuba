<?php

namespace App\Http\Controllers;

use Core\Controller;
use Core\View;

class SiteController extends Controller
{
    function index()
    {
        echo View::make( 'site/index' );
    }
}