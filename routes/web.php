<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

// Route::get('/{route?}', [RouteController::class, 'index']);
Route::get('/' ,function(){
    return view('welcome');
});
