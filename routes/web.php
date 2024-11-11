<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/CV', function () {
    return view('cv');
});
Route::get('/projects', function () {
    return view('projects');
});
