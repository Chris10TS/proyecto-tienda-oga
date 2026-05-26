@extends('layouts.app')

@section('titulo', $producto->nombre)

@section('contenido')

<div class="container mt-4">

    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/catalogo">Catálogo</a></li>
            <li class="breadcrumb-item"><a href="/categoria/{{ $producto->categoria->id }}">{{ $producto->categoria->nombre }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $producto->nombre }}</li>
        </ol>
    </nav>

    <div class="row mb-5">

        <div class="col-md-5">
            <div class="card p-3 text-center">
                <img src="{{ asset('images/img-products/' . $producto->imagen) }}" class="img-fluid rounded imagen-contenida" alt="{{ $producto->nombre }}">
            </div>
        </div>

        <div class="col-md-4">
            <span class="badge bg-success mb-2">MÁS VENDIDO</span>
            <h1 class="fs-4 fw-bold">{{ $producto->nombre }}</h1>

            <div class="d-flex align-items-center gap-2 mb-3">
                <span class="text-warning fs-5">★★★★☆</span>
                <span class="text-muted">(128 opiniones)</span>
            </div>

            <p class="text-muted text-decoration-line-through mb-0">${{ number_format($producto->precio * 1.3, 0, ',', '.') }}</p>
            
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="fs-2 fw-bold">${{ number_format($producto->precio, 0, ',', '.') }}</span>
                <span class="badge bg-success fs-6">30% OFF</span>
            </div>
            
            <p class="text-muted mb-3">6 cuotas de ${{ number_format($producto->precio / 6, 0, ',', '.') }} sin interés</p>

            <ul class="list-unstyled mb-3">
                <li><i class="ti ti-check"></i> Alta calidad y rendimiento garantizado</li>
                <li><i class="ti ti-check"></i> Componentes Premium Tienda OGA</li>
                <li><i class="ti ti-check"></i> Conectividad y facilidad de uso</li>
                <li><i class="ti ti-check"></i> Diseño ergonómico y resistente</li>
            </ul>

            @if($producto->stock > 0)
                <p class="text-success fw-bold"><i class="ti ti-circle-check"></i> Stock disponible ({{ $producto->stock }} unidades)</p>
            @else
                <p class="text-danger fw-bold"><i class="ti ti-circle-x"></i> Sin stock de momento</p>
            @endif
        </div>

        <div class="col-md-3">
            <div class="card p-3">
                <p class="text-success fw-bold mb-1"><i class="ti ti-truck-delivery"></i> Envío gratis en Corrientes</p>
                <p class="text-muted small mb-3">Envío gratis a partir de $100.000 al resto del país</p>

                <label class="form-label fw-bold">Cantidad</label>
                <select class="form-select mb-3">
                    <option>1 unidad</option>
                    <option>2 unidades</option>
                    <option>3 unidades</option>
                </select>

                <a href="#" class="btn btn-warning w-100 mb-2 fw-bold">Comprar ahora</a>
                <a href="#" class="btn btn-outline-dark w-100 mb-3">
                    <i class="ti ti-shopping-cart"></i> Agregar al carrito
                </a>

                <div class="border-top pt-3">
                    <p class="small mb-1"> Devoluciones hasta 30 días</p>
                    <p class="small mb-1"> Garantía 6 meses</p>
                    <p class="small mb-0"> Compra segura</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row mb-5">
        <div class="col-12">
            <div class="cardP p-4 bg-white rounded shadow-sm">
                <h3 class="fw-bold mb-3">Descripción del producto</h3>
                <p>{{ $producto->descripcion }}</p>
                
                <h5 class="mt-4">Especificaciones técnicas</h5>
                <table class="table table-bordered mt-2">
                    <tbody>
                        <tr><td><strong>Producto</strong></td><td>{{ $producto->nombre }}</td></tr>
                        <tr><td><strong>Categoría</strong></td><td>{{ $producto->categoria->nombre }}</td></tr>
                        <tr><td><strong>Código de Identificación</strong></td><td>OGA-#00{{ $producto->id }}</td></tr>
                        <tr><td><strong>Garantía oficial</strong></td><td>6 meses</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <div class="card4 p-4 bg-white rounded shadow-sm">
                <h3 class="fw-bold mb-4">Opiniones de clientes</h3>
                <div class="d-flex align-items-center gap-3 mb-4">
                    <span class="display-4 fw-bold">4.0</span>
                    <div>
                        <span class="text-warning fs-4">★★★★☆</span>
                        <p class="text-muted mb-0">128 opiniones</p>
                    </div>
                </div>
                <div class="border-bottom pb-3 mb-3">
                    <div class="d-flex justify-content-between"><strong>María G.</strong><span class="text-muted small">Enero 2026</span></div>
                    <span class="text-warning">★★★★★</span>
                    <p class="mt-1 mb-0">Excelente producto, cumple con todo lo prometido y la atención de Tienda OGA impecable.</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection