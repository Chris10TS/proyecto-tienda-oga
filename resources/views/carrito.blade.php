@extends('layouts.app')

@section('titulo', 'Mi Carrito')

@section('contenido')
<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <div class="bg-white p-4 rounded shadow-sm mb-4">
                <h4 class="fw-bold mb-4">Tu carrito</h4>
                
                <div class="d-flex align-items-center gap-3 border-bottom pb-3 mb-3">
                    <img src="{{ asset('images/img-products/television-43.png') }}" class="tarjeta-carrito" alt="TV" >
                    <div class="flex-grow-1">
                        <h6 class="mb-0 fw-bold">Smart TV 50" 4K UHD Ultra Slim</h6>
                        <small class="text-muted">Cantidad: 1</small>
                    </div>
                    <div class="text-end">
                        <p class="fw-bold mb-0">$500.000</p>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3">
                    <img src="{{ asset('images/img-products/estufa-bionica.png') }}" class="tarjeta-carrito" alt="Estufa">
                    <div class="flex-grow-1">
                        <h6 class="mb-0 fw-bold">Estufa De Cuarzo Bionica Infrarroja</h6>
                        <small class="text-muted">Cantidad: 1</small>
                    </div>
                    <div class="text-end">
                        <p class="fw-bold mb-0">$25.799</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="bg-white p-4 rounded shadow-sm">
                <h5 class="fw-bold mb-3">Resumen de compra</h5>
                <div class="d-flex justify-content-between mb-2">
                    <span>Productos (2)</span>
                    <span>$525.799</span>
                </div>
                <div class="d-flex justify-content-between mb-3 text-success">
                    <span>Envío</span>
                    <span class="fw-bold">Gratis</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between mb-4">
                    <span class="fw-bold fs-5">Total</span>
                    <span class="fw-bold fs-4 text-dark">$525.799</span>
                </div>

                <form action="{{ route('carrito.confirmar') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Nombre para el comprobante</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Tu nombre completo" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold shadow-sm">
                        Confirmar Compra
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection