<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // 1. "Más Vendidos" o destacados (Podemos traer los primeros 3 o meter un filtro)
        $masVendidos = Producto::take(3)->get();

        // 2. Traer productos filtrados por su ID de categoría
        // (Asegurate de que los IDs coincidan con los que creaste en HeidiSQL)
        $climatizacion = Producto::where('categoria_id', 3)->get(); 
        $hogar         = Producto::where('categoria_id', 2)->get(); 
        $seguridad     = Producto::where('categoria_id', 1)->get(); 
        $televisores   = Producto::where('categoria_id', 4)->get(); 

        // Mandamos todas las secciones separadas al inicio
        return view('inicio', compact('masVendidos', 'climatizacion', 'hogar', 'seguridad', 'televisores'));
    }

    public function show($id)
    {
        $producto = Producto::with('categoria')->findOrFail($id);
        return view('productos.detalle', compact('producto'));
    }
}