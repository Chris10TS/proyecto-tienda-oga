<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Reseña;
use App\Models\Pedido;

class ProductoController extends Controller
{
    public function index()
    {
        $masVendidos = Producto::take(4)->get();
        
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

    public function catalogo()
    {
        $productos = Producto::all();

        return view('catalogo', [
            'productos' => $productos,
            'titulo' => 'Nuestro Catálogo'
        ]);
    }

    public function ofertas()
    {
        $productosEnOferta = Producto::where('porcentaje_descuento', '>', 0)->get(); 

        return view('ofertas', compact('productosEnOferta'));
    }

    public function categoria($id)
    {
        $categoria = Categoria::findOrFail($id);
        $productos = Producto::where('categoria_id', $id)->get();
        $titulo = "Productos de " . $categoria->nombre;

        return view('catalogo', compact('productos', 'titulo'));
    }

    public function guardarReseña(Request $request, $id)
    {
        if (auth()->user()->rol === 'admin') {
            return redirect()->back()->with('error', 'Los administradores no pueden dejar reseñas.');
        }

        $haComprado = Pedido::where('user_id', auth()->id())
            ->where('estado', 'pagado')
            ->whereHas('productos', function($query) use ($id) {
                $query->where('producto_id', $id);
            })->exists();

        if (!$haComprado) {
            return redirect()->back()->with('error', 'Acción denegada: Solo podés opinar sobre artículos que compraste.');
        }

        Reseña::create([
            'producto_id' => $id,
            'user_id' => auth()->id(),
            'estrellas' => $request->input('estrellas'),
            'comentario' => $request->input('comentario'),
        ]);

        return redirect()->back()->with('success', '¡Muchas gracias! Tu opinión fue publicada con éxito.');
    }

    public function toggleFavorito($id)
    {
        $producto = Producto::findOrFail($id);
        $user = auth()->user();

        $user->favoritos()->toggle($producto->id);

        $esFavorito = $user->favoritos()->where('producto_id', $id)->exists();
        $mensaje = $esFavorito ? '¡Agregado a tus favoritos!' : 'Eliminado de tus favoritos.';
        
        return redirect()->back()->with('success', $mensaje);
    }

    public function reactivar($id)
    {
        $producto = Producto::withTrashed()->findOrFail($id);
        $producto->restore(); 

        return redirect()->back()->with('success', 'El producto ha sido reactivado y ya se muestra en el catálogo.');
    }

    public function buscar(Request $request)
    {
        $termino = $request->input('buscar');

        if (empty($termino) || trim($termino) === '') {
        return redirect()->route('inicio');
    }

        $productos = Producto::where('nombre', 'LIKE', '%' . $termino . '%')
            ->orWhere('descripcion', 'LIKE', '%' . $termino . '%')
            ->get();

        $titulo = 'Resultados para: "' . $termino . '"';

        return view('catalogo', compact('productos', 'titulo', 'termino'));
    }
}