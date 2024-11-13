<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\RouteController;

Route::get('/{route?}', [RouteController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/CV', function () {
    return view('cv');
});
Route::get('/projects', function () {
    return view('projects');
});
