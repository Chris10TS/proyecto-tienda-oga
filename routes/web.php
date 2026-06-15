<?php

use Illuminate\Support\Facades\Route;

// CONTROLADORES
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\Admin\AdminProductoController;

// =======================================================================
// 1. RUTAS PÚBLICAS Y CATÁLOGOS
// =======================================================================
Route::get('/inicio', [ProductoController::class, 'index'])->name('inicio');
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('productos.detalle');

Route::get('/quienes-somos', function () { return view('quienes-somos'); });
Route::get('/comercializacion', function () { return view('comercializacion'); });
Route::get('/contacto-oga', function () { return view('contacto-oga'); });
Route::get('/terminos', function () { return view('terminos'); });
Route::get('/consultas', function () { return view('consultas'); });
Route::get('/ofertas', [ProductoController::class, 'ofertas'])->name('productos.ofertas');Route::get('/catalogo', [ProductoController::class, 'catalogo'])->name('productos.catalogo');
Route::get('/catalogo/categoria/{id}', [ProductoController::class, 'categoria'])->name('productos.categoria');


// =======================================================================
// 2. CIRCUITO DINÁMICO DEL CARRITO DE COMPRAS
// =======================================================================
Route::get('/carrito', [CarritoController::class, 'ver'])->name('carrito');
Route::post('/checkout', [CarritoController::class, 'checkout'])->name('carrito.checkout');
Route::post('/carrito/agregar/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
Route::get('/carrito/vaciar', [CarritoController::class, 'vaciar'])->name('carrito.vaciar');
Route::put('/carrito/actualizar/{id}', [CarritoController::class, 'actualizarCantidad'])->name('carrito.actualizar');
Route::post('/compra-confirmar', [CarritoController::class, 'confirmar'])->name('carrito.confirmar');


// =======================================================================
// 3. AUTENTICACIÓN Y CONSULTAS DE USUARIOS
// =======================================================================
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/enviar-consulta', [ConsultaController::class, 'store_contact'])->name('consultas.guardar');


// =======================================================================
// 4. PANEL DE ADMINISTRACIÓN (CRUD PRODUCTOS Y PANEL CONSULTAS)
// =======================================================================
Route::get('/admin/consultas', [ConsultaController::class, 'index'])->name('admin.consultas');
Route::get('/admin/pedidos', [AdminProductoController::class, 'listarPedidos'])->name('admin.pedidos');

// CRUD de productos con carga de imágenes y bajas lógicas
Route::get('/admin/productos/crear', [AdminProductoController::class, 'create'])->name('admin.productos.create');
Route::post('/admin/productos', [AdminProductoController::class, 'store'])->name('admin.productos.store');
Route::get('/admin/productos/{id}/editar', [AdminProductoController::class, 'edit'])->name('admin.productos.edit');
Route::put('/admin/productos/{id}', [AdminProductoController::class, 'update'])->name('admin.productos.update');
Route::delete('/admin/productos/{id}', [AdminProductoController::class, 'destroy'])->name('admin.productos.destroy');