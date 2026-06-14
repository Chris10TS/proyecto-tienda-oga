@extends('layouts.app')

@section('titulo', 'Mi Carrito')

@section('contenido')
<div class="container my-5">
    <h2 class="mb-4 fw-bold">Tu Carrito de Compras</h2>

    @if(session('success'))
        <div class="alert alert-success p-2 small">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger p-2 small">{{ session('error') }}</div>
    @endif

    @if(count($carrito) > 0)
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 p-3 bg-white">
                    @php $total = 0; @endphp
                    @foreach($carrito as $id => $detalles)
                        @php $total += $detalles['precio'] * $detalles['cantidad']; @endphp
                        
                        <div class="d-flex align-items-center justify-content-between border-bottom py-3">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('images/img-products/' . $detalles['imagen']) }}" style="width: 65px; height: 65px; object-fit: contain;">
                                <div>
                                    <h6 class="fw-bold mb-0">{{ $detalles['nombre'] }}</h6>
                                    <small class="text-muted">Precio unitario: ${{ number_format($detalles['precio'], 0, ',', '.') }}</small><br>
<div class="d-flex align-items-center gap-2 mt-1">
    <span class="small text-muted me-1">Cantidad:</span>
    
    <form action="{{ route('carrito.actualizar', $id) }}" method="POST" class="m-0">
        @csrf
        @method('PUT')
        <input type="hidden" name="cantidad" value="{{ $detalles['cantidad'] - 1 }}">
        <button type="submit" class="btn btn-sm btn-outline-secondary py-0 px-2 fw-bold" style="line-height: 1;" @if($detalles['cantidad'] <= 1) disabled @endif>-</button>
    </form>

    <span class="fw-bold text-dark px-1">{{ $detalles['cantidad'] }}</span>

    <form action="{{ route('carrito.actualizar', $id) }}" method="POST" class="m-0">
        @csrf
        @method('PUT')
        <input type="hidden" name="cantidad" value="{{ $detalles['cantidad'] + 1 }}">
        <button type="submit" class="btn btn-sm btn-outline-secondary py-0 px-2 fw-bold" style="line-height: 1;">+</button>
    </form>
</div>                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center gap-4">
                                <h5 class="fw-bold mb-0">${{ number_format($detalles['precio'] * $detalles['cantidad'], 0, ',', '.') }}</h5>
                                
                                <form action="{{ route('carrito.eliminar', $id) }}" method="POST" class="m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger p-0"><i class="ti ti-trash fs-5"></i></button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    
                    <div class="text-start mt-3">
                        <a href="{{ route('carrito.vaciar') }}" class="btn btn-sm btn-outline-danger">Vaciar todo el carrito</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0 p-4 bg-white">
                    <h5 class="fw-bold mb-3">Resumen del pedido</h5>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Productos ({{ array_sum(array_column($carrito, 'cantidad')) }})</span>
                        <span class="fw-bold">${{ number_format($total, 0, ',', '.') }}</span>
                    </div>
                    <div class="d-flex justify-content-between text-success mb-3">
                        <span>Envío</span>
                        <span class="fw-bold">Gratis</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-4">
                        <span class="fs-5 fw-bold">Total a pagar</span>
                        <span class="fs-4 fw-bold text-success">${{ number_format($total, 0, ',', '.') }}</span>
                    </div>

                    <form action="{{ route('carrito.confirmar') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-warning w-100 fw-bold py-2 fs-5 text-dark shadow-sm">
                            Confirmar Compra
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="text-center py-5">
            <i class="ti ti-shopping-cart-off display-1 text-muted mb-3"></i>
            <h4>Tu carrito está vacío</h4>
            <p class="text-muted">Navegá por las ofertas del inicio para cargar tus productos.</p>
            <a href="{{ route('inicio') }}" class="btn btn-primary fw-bold mt-2">Volver al Inicio</a>
        </div>
    @endif    
</div>


@endsection
