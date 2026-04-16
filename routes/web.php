<?php

use Illuminate\Support\Facades\Route;

Route::get('/sobre-mi', function () {
return view('sobre-mi');
});

use App\Http\Controllers\ContactoController;

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', [ContactoController::class, 'procesar']);

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});