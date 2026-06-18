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
            'nombre' => 'required|string|max:150',
            'descripcion' => 'required|string|min:10',
            'precio' => 'required|numeric|min:0.01',
            'stock' => 'required|integer|min:0',
            'categoria_id' => 'required|exists:categorias,id',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048' 
        ], [
            'nombre.required' => 'El nombre del artículo es obligatorio y no puede contener solo espacios vacíos.',
            'nombre.max' => 'El nombre no puede superar los 150 caracteres.',
            'descripcion.required' => 'La descripción técnica del producto es obligatoria.',
            'descripcion.min' => 'La descripción técnica debe tener al menos 10 caracteres.',
            'precio.required' => 'El precio de venta es obligatorio.',
            'precio.numeric' => 'El precio debe ser un número válido (utilice puntos para los decimales).',
            'precio.min' => 'El precio de venta debe ser mayor a 0.',
            'stock.required' => 'El stock disponible es obligatorio.',
            'stock.integer' => 'El stock debe ser un número entero.',
            'stock.min' => 'El stock disponible no puede ser un número negativo.',
            'categoria_id.required' => 'Debe seleccionar una categoría correspondiente.',
            'categoria_id.exists' => 'La categoría seleccionada no es válida.',
            'imagen.required' => 'Es obligatorio subir una imagen para el producto.',
            'imagen.image' => 'El archivo subido debe ser una imagen.',
            'imagen.mimes' => 'La imagen debe tener un formato válido: jpeg, png, jpg o webp.',
            'imagen.max' => 'La imagen es demasiado pesada. El tamaño máximo permitido es de 2 MB.'
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
            'nombre' => ['required', 'string', 'max:150', 'regex:/^(?!\s*$).+/'],
            'descripcion' => ['required', 'string', 'regex:/^(?!\s*$).+/'],
            'precio' => 'required|numeric|min:0.01',
            'stock' => 'required|integer|min:0',
            'categoria_id' => 'required|exists:categorias,id',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:10240' 
        ], [
            'nombre.required' => 'El nombre del artículo es obligatorio.',
            'nombre.regex' => 'El nombre no puede estar compuesto únicamente por espacios vacíos.',
            'nombre.max' => 'El nombre no puede superar los 150 caracteres.',
            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.regex' => 'La descripción técnica no puede contener solo espacios vacíos.',
            'precio.required' => 'El precio de venta es obligatorio.',
            'precio.numeric' => 'El precio debe ser un número válido.',
            'precio.min' => 'El precio de venta debe ser mayor a 0.',
            'stock.required' => 'El stock disponible es obligatorio.',
            'stock.integer' => 'El stock debe ser un número entero.',
            'stock.min' => 'El stock disponible no puede ser negativo.',
            'categoria_id.required' => 'Debe seleccionar una categoría.',
            'categoria_id.exists' => 'La categoría seleccionada no es válida.',
            'imagen.image' => 'El archivo debe ser una imagen.',
            'imagen.mimes' => 'Formatos permitidos para la imagen: jpeg, png, jpg, webp.',
            'imagen.max' => 'La imagen de actualización no puede superar los 10 MB.'
        ]);

        $datosProducto = $request->except('imagen');

        if ($request->hasFile('imagen')) {
            $imagenFile = $request->file('imagen');
            $nombreImagen = time() . '_' . $imagenFile->getClientOriginalName();
            $imagenFile->move(public_path('images/img-products'), $nombreImagen);
            $datosProducto['imagen'] = $nombreImagen;
        }

        $producto->update($datosProducto);

        return redirect()->route('inicio')->with('success', '¡Producto actualizado con éxito!');
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

    public function listarUsuarios()
    {
        $usuarios = User::where('rol', '!=', 'admin')->orWhereNull('rol')->orderBy('created_at', 'desc')->get();
        return view('admin.usuarios', compact('usuarios'));
    }

    public function usuariosIndex()
    {
        if (auth()->user()->rol !== 'admin') {
            return redirect()->route('inicio')->with('error', 'No tienes permisos para acceder a esta sección.');
        }
    }

    public function listarBajas()
    {
        if (auth()->user()->rol !== 'admin') {
            return redirect()->route('inicio')->with('error', 'No tienes permisos para acceder a esta sección.');
        }

        $eliminados = Producto::onlyTrashed()->get();
        return view('admin.bajas', compact('eliminados'));
    }

    public function reactivar($id)
    {
        $producto = \App\Models\Producto::withTrashed()->findOrFail($id);
        $producto->restore();

        return redirect()->route('admin.productos.bajas')->with('success', '¡El producto "' . $producto->nombre . '" fue dado de alta nuevamente!');
    }
}