<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/eventos', function () {
    return view('eventos');
});

Route::get('/registro', function () {
    return view('registro'); 
});