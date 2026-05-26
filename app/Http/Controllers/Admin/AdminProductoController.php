<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class AdminProductoController extends Controller
{
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:150',
            'descripcion' => 'nullable',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categoria_id' => 'required|exists:categorias,id',
            'imagen' => 'required' // Nombre del archivo (ej: camara.png)
        ]);

        Producto::create($request->all());

        return redirect()->route('inicio')->with('success', '¡Producto subido con éxito!');
    }
}
