<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/cv', function () {
    return view('cv');
});
Route::get('/projects', function () {
    return view('projects');
});
