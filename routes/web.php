<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/detalles', function () {
    return view('detalles');
});

Route::get('/carrito', function () {
    return view('carrito');
});