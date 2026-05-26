<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $masVendidos = Producto::take(3)->get();

        
        $climatizacion = Producto::where('categoria_id', 3)->get(); 
        $hogar         = Producto::where('categoria_id', 2)->get(); 
        $seguridad     = Producto::where('categoria_id', 1)->get(); 
        $televisores   = Producto::where('categoria_id', 4)->get(); 

        return view('inicio', compact('masVendidos', 'climatizacion', 'hogar', 'seguridad', 'televisores'));
    }

    public function show($id)
    {
        $producto = Producto::with('categoria')->findOrFail($id);
        return view('productos.detalle', compact('producto'));
    }
}