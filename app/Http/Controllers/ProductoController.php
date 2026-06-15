<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;


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

    public function catalogo(Request $request)
{
    $query = Producto::query();

    if ($request->has('filtro') && $request->input('filtro') === 'descuentos') {
        // Si es así, filtramos para traer solo los que tengan descuento mayor a 0
        $query->where('porcentaje_descuento', '>', 0);
        $titulo = "Productos en Oferta";
    } else {
        $titulo = "Nuestro Catálogo completo";
    }

    $productos = $query->get();

    return view('catalogo', compact('productos', 'titulo'));
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

}