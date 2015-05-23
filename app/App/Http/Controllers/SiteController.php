<?php

namespace App\Http\Controllers;

use App\Core\Controller;
use App\Core\View;

class SiteController extends Controller
{
    function index()
    {
        echo View::make( 'site/index' );
    }
}