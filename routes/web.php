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
Route::post('/producto/{id}/opinar', [ProductoController::class, 'guardarReseña'])->name('productos.opinor')->middleware('auth');


// =======================================================================
// 2. CIRCUITO DINÁMICO DEL CARRITO DE COMPRAS
// =======================================================================
Route::get('/carrito', [CarritoController::class, 'ver'])->name('carrito');
Route::any('/checkout', [CarritoController::class, 'checkout'])->name('carrito.checkout');
Route::post('/carrito/agregar/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
Route::get('/carrito/vaciar', [CarritoController::class, 'vaciar'])->name('carrito.vaciar');
Route::put('/carrito/actualizar/{id}', [CarritoController::class, 'actualizarCantidad'])->name('carrito.actualizar');
Route::post('/compra-confirmar', [CarritoController::class, 'confirmar'])->name('carrito.confirmar');
Route::post('/carrito/comprar-ya/{id}', [CarritoController::class, 'comprarAhora'])->name('carrito.comprarAhora');


// =======================================================================
// 3. AUTENTICACIÓN Y CONSULTAS DE USUARIOS
// =======================================================================
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/enviar-consulta', [ConsultaController::class, 'store_contact'])->name('consultas.guardar');
Route::get('/perfil', function () {
    return view('perfil');
})->middleware('auth')->name('perfil');

use App\Models\Pedido;

// Historial de compras real
Route::get('/historial', function () {
    // Trae los pedidos del usuario logueado junto con sus productos asociados
    $pedidos = Auth::user()->pedidos()->with('productos')->get();
    return view('historial', compact('pedidos'));
})->middleware('auth')->name('historial');

// Lista de favoritos real
Route::get('/favoritos', function () {
    // Trae los productos que el usuario marcó como favoritos
    $productosFavoritos = Auth::user()->favoritos;
    return view('favoritos', compact('productosFavoritos'));
})->middleware('auth')->name('favoritos');

// =======================================================================
// 4. PANEL DE ADMINISTRACIÓN (CRUD PRODUCTOS Y PANEL CONSULTAS)
// =======================================================================
Route::get('/admin/consultas', [ConsultaController::class, 'index'])->name('admin.consultas');
Route::get('/admin/pedidos', [AdminProductoController::class, 'listarPedidos'])->name('admin.pedidos');
Route::get('/admin/usuarios', [AdminProductoController::class, 'listarUsuarios'])->name('admin.usuarios');

// CRUD de productos con carga de imágenes y bajas lógicas
Route::get('/admin/productos/crear', [AdminProductoController::class, 'create'])->name('admin.productos.create');
Route::post('/admin/productos', [AdminProductoController::class, 'store'])->name('admin.productos.store');
Route::get('/admin/productos/{id}/editar', [AdminProductoController::class, 'edit'])->name('admin.productos.edit');
Route::put('/admin/productos/{id}', [AdminProductoController::class, 'update'])->name('admin.productos.update');
Route::delete('/admin/productos/{id}', [AdminProductoController::class, 'destroy'])->name('admin.productos.destroy');