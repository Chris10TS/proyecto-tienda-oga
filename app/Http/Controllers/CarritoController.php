<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    public function ver()
    {
        $carrito = session()->get('carrito', []);
        
        foreach ($carrito as $id => $detalles) {
            $productoBD = Producto::find($id);
            
            if (!$productoBD || $productoBD->stock <= 0) {
                unset($carrito[$id]); 
            } elseif ($carrito[$id]['cantidad'] > $productoBD->stock) {
                $carrito[$id]['cantidad'] = $productoBD->stock; 
            }
        }
        session()->put('carrito', $carrito);

        return view('carrito', compact('carrito'));
    }

    // Cambiamos a Request para capturar la cantidad seleccionada
public function agregar(Request $request, $id) 
{
    $producto = Producto::findOrFail($id);
    
    // Capturamos la cantidad que viene del select (si no viene nada, por defecto es 1)
    $cantidadA_Agregar = $request->input('cantidad', 1);

    if ($producto->stock <= 0) {
        return redirect()->back()->with('error', 'Lo sentimos, este producto se quedó sin stock.');
    }

    $carrito = session()->get('carrito', []);

    if (isset($carrito[$id])) {
        // Validamos que la cantidad actual en el carrito + la nueva no supere el stock
        if ($carrito[$id]['cantidad'] + $cantidadA_Agregar > $producto->stock) {
            return redirect()->route('carrito')->with('error', 'No podés agregar esa cantidad. Supera el límite de stock disponible.');
        }
        $carrito[$id]['cantidad'] += $cantidadA_Agregar;
    } else {
        // Validamos que la cantidad inicial no supere el stock
        if ($cantidadA_Agregar > $producto->stock) {
            return redirect()->route('carrito')->with('error', 'No podés agregar esa cantidad. Supera el límite de stock disponible.');
        }
        
        $carrito[$id] = [
            "nombre" => $producto->nombre,
            "cantidad" => $cantidadA_Agregar,
            "precio" => $producto->precio,
            "imagen" => $producto->imagen
        ];
    }

    session()->put('carrito', $carrito);
    return redirect()->route('carrito')->with('success', '¡Producto agregado al carrito!');
    }

    public function eliminar($id)
    {
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$id])) {
            unset($carrito[$id]);
            session()->put('carrito', $carrito);
        }

        return redirect()->route('carrito')->with('success', 'Producto removido del carrito.');
    }

    public function vaciar()
    {
        session()->forget('carrito');
        return redirect()->route('carrito')->with('success', 'Carrito vaciado con éxito.');
    }

    public function confirmar(Request $request)
{
    $carrito = session()->get('carrito', []);
    
    if (empty($carrito)) {
        return redirect()->route('carrito')->with('error', 'El carrito está vacío.');
    }

    $total = 0;
    foreach($carrito as $item) {
        $total += $item['precio'] * $item['cantidad'];
    }

    $pedido = new \App\Models\Pedido();
    $pedido->user_id = auth()->id();
    $pedido->total = $total;
    $pedido->metodo_pago = $request->input('metodo_pago', 'tarjeta');
    $pedido->estado = 'pagado';
    $pedido->save(); 

    foreach ($carrito as $id => $item) {
        $pedido->productos()->attach($id, [
            'cantidad' => $item['cantidad'],
            'precio_unitario' => $item['precio']
        ]);

        $producto = Producto::find($id);
        if ($producto) {
            $producto->stock -= $item['cantidad'];
            $producto->save();
        }
    }

    session()->forget('carrito');

    return view('compra-exitosa', compact('pedido'));
}

    public function actualizarCantidad(Request $request, $id)
{
    $productoBD = Producto::findOrFail($id);
    $carrito = session()->get('carrito', []);

    if(isset($carrito[$id])) {
        $nuevaCantidad = $request->input('cantidad');

        if ($nuevaCantidad > $productoBD->stock) {
            return redirect()->back()->with('error', 'Alcanzaste el límite de stock para este artículo.');
        }

        if ($nuevaCantidad <= 0) {
            unset($carrito[$id]);
        } else {
            $carrito[$id]['cantidad'] = $nuevaCantidad;
        }

        session()->put('carrito', $carrito);
    }

    return redirect()->route('carrito')->with('success', 'Carrito actualizado con éxito.');
}

public function checkout()
{
    $carrito = session()->get('carrito', []);

    if (empty($carrito)) {
        return redirect()->route('carrito')->with('error', 'El carrito está vacío.');
    }

    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para finalizar la compra.');
    }

    return view('checkout', compact('carrito'));
}

public function comprarAhora(Request $request, $id)
{
    $producto = \App\Models\Producto::findOrFail($id);
    $cantidad = $request->input('cantidad', 1);

    if ($cantidad > $producto->stock) {
        return redirect()->back()->with('error', 'Lo sentimos, no hay suficiente stock disponible. Solo quedan ' . $producto->stock . ' unidades.');
    }

    session()->forget('carrito');

    $carrito = [
        $producto->id => [
            "nombre" => $producto->nombre,
            "cantidad" => $cantidad,
            "precio" => $producto->precio,
            "imagen" => $producto->imagen
        ]
    ];

    session()->put('carrito', $carrito);

    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para finalizar tu compra.');
    }

    return redirect()->route('carrito.checkout');
}

}