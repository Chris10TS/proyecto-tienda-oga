<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactoOgaController;

use App\Http\Controllers\ConsultaController;

use App\Http\Controllers\ProductoController;

Route::get('/inicio', [ProductoController::class, 'index'])->name('inicio');

Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('productos.detalle');

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

Route::get('/productos/camara-e121', function() {
    return view('productos.camara-e121');
});

Route::get('/productos/camara-e122',function () {
    return view('productos.camara-e122');
});

Route::get('/productos/televisor-32', function () {
    return view('productos.televisor-32');
});

Route::get('/productos/televisor-50', function() {
    return view('productos.televisor-50');
});

Route::get('/productos/televisor-55',function() {
    return view('productos.televisor-55');
});

Route::get('/productos/estufa-bionica', function () {
    return view('productos.estufa-bionica');
});

Route::get('/productos/estufa-infrarroja', function() {
    return view('productos.estufa-infrarroja');
});

Route::get('/productos/manta-river', function () {
    return view('productos.manta-river');
});

Route::get('/productos/manta-magica', function() {
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

Route::get('/catalogo-hogar', function() {
    return view('catalogo-hogar');
});

route::get('/catalogo', function() {
    return view('catalogo');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/enviar-consulta', [ConsultaController::class, 'store_contact'])->name('consultas.guardar');
Auth::routes();

Route::get('/admin/consultas', [ConsultaController::class, 'index'])->name('admin.consultas');

use App\Http\Controllers\Admin\AdminProductoController;

Route::get('/admin/productos/crear', [AdminProductoController::class, 'create'])->name('admin.productos.create');

Route::post('/admin/productos', [AdminProductoController::class, 'store'])->name('admin.productos.store');

Route::get('/admin/productos/{id}/editar', [AdminProductoController::class, 'edit'])->name('admin.productos.edit');

Route::put('/admin/productos/{id}', [AdminProductoController::class, 'update'])->name('admin.productos.update');

Route::delete('/admin/productos/{id}', [AdminProductoController::class, 'destroy'])->name('admin.productos.destroy');