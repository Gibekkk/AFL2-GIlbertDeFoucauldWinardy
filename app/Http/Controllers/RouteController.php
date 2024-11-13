<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index($route = ""){
        switch(strtolower($route)){
            case "cv":
                return view("cv");
            case "projects":
                return view("projects");
            default:
                return view("welcome");
        }
    }
}
