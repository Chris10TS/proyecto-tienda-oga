<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactoOgaController;

Route::get('/sobre-mi', function () {
return view('sobre-mi');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::get('/comercializacion', function () {
    return view('comercializacion');
});

Route::get('/contacto-oga', function () {
    return view('contacto-oga');
});

Route::get('/terminos', function () {
    return view('terminos');
});

Route::get('/catalogo-invierno', function () {
    return view('catalogo-invierno');
});

Route::get('/catalogo-seguridad', function () {
    return view('catalogo-seguridad');
});


Route::get('/catalogo-televisores', function () {
    return view('catalogo-televisores');
});

Route::get('/productos/camara-seguridade107', function () {
    return view('productos.camara-seguridade107');
});

Route::get('/productos/camara-seguridade126', function () {
    return view('productos.camara-seguridade126');
});

Route::get('/productos/camara-e121', function () {
    return view('productos.camara-e121');
});

Route::get('/productos/camara-e122', function () {
    return view('productos.camara-e122');
});

Route::get('/productos/televisor-32', function () {
    return view('productos.televisor-32');
});

Route::get('/productos/televisor-50', function () {
    return view('productos.televisor-50');
});

Route::get('/productos/televisor-55', function () {
    return view('productos.televisor-55');
});

Route::get('/productos/estufa-bionica', function () {
    return view('productos.estufa-bionica');
});

Route::get('/productos/estufa-infrarroja', function () {
    return view('productos.estufa-infrarroja');
});

Route::get('/productos/manta-river', function () {
    return view('productos.manta-river');
});

Route::get('/productos/manta-magica', function () {
    return view('productos.manta-magica');
});

Route::get('/consultas', function () {
    return view('consultas');
});

use App\Http\Controllers\CarritoController;

Route::get('/carrito', [CarritoController::class, 'ver'])->name('carrito');
Route::post('/compra-exitosa', [CarritoController::class, 'confirmar'])->name('carrito.confirmar');

Route::get('/ofertas', function () {
    return view('ofertas');
});

Route::get('/catalogo-hogar', function () {
    return view('catalogo-hogar');
});