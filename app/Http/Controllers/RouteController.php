<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class RouteController extends Controller
{
    public function index($route = ""): View{
        switch(strtolower($route)){
            case 'cv':
                return view('cv');
            case 'projects':
                return view('projects');
            default:
                return view('welcome');
        }
    }
}
