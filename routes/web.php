<?php

use Illuminate\Support\Facades\Route;

Route::get('/sobre-mi', function () {
return view('sobre-mi');
});

use App\Http\Controllers\ContactoController;

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::get('/producto/{id}', function ($id) {
    return view('producto', ['id' => $id]);
});

