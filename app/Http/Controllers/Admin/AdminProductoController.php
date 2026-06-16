<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Pedido;
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
            'imagen' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048' 
        ]);

        $datosProducto = $request->except('imagen');

        if ($request->hasFile('imagen')) {
            $imagenFile = $request->file('imagen');
            
            $nombreImagen = time() . '_' . $imagenFile->getClientOriginalName();
            
            $imagenFile->move(public_path('images/img-products'), $nombreImagen);
            
            $datosProducto['imagen'] = $nombreImagen;
        }

        Producto::create($datosProducto);

        return redirect()->route('inicio')->with('success', '¡Producto e imagen subidos con éxito!');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        return view('admin.productos.edit', compact('producto', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $request->validate([
            'nombre' => 'required|max:150',
            'descripcion' => 'nullable',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categoria_id' => 'required|exists:categorias,id',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:10240' 
        ]);

        $datosProducto = $request->except('imagen');

        if ($request->hasFile('imagen')) {
            $imagenFile = $request->file('imagen');
            $nombreImagen = time() . '_' . $imagenFile->getClientOriginalName();
            $imagenFile->move(public_path('images/img-products'), $nombreImagen);
            
            $datosProducto['imagen'] = $nombreImagen;
        }

        $producto->update($datosProducto);

        return redirect()->route('inicio')->with('success', '¡Producto actualizado!');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete(); 

        return redirect()->route('inicio')->with('success', '¡Producto dado de baja con éxito!');
    }

    public function listarPedidos()
    {
        $pedidos = Pedido::with(['user', 'productos'])->orderBy('created_at', 'desc')->get();
        return view('admin.pedidos', compact('pedidos'));
    }

    public function usuariosIndex()
    {
        if (auth()->user()->rol !== 'admin') {
            return redirect()->route('inicio')->with('error', 'No tienes permisos para acceder a esta sección.');
        }
        
        // Retornamos la vista correspondiente para este método
        return redirect()->route('admin.usuarios.index');
    }

    public function listarUsuarios()
    {
        $usuarios = User::where('rol', '!=', 'admin')->orWhereNull('rol')->orderBy('created_at', 'desc')->get();
        return view('admin.usuarios', compact('usuarios'));
    }
}