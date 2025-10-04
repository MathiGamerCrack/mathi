<?php

use Illuminate\Support\Facades\Route;

Route::get('/saludos', function () {
    return view('bienvenidos');
});

