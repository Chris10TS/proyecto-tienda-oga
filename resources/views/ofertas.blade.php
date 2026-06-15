@extends('layouts.app')

@section('titulo', 'Ofertas')

@section('contenido')

<div class="container my-5">
    <div class="row mb-4">
        <div class="col-12 text-center text-md-start">
            <h1 class="fw-bold text-dark"><i class="ti ti-flame text-danger"></i> Súper Ofertas</h1>
            <p class="text-muted">Aprovechá los descuentos exclusivos de la semana en Tienda OGA.</p>
            <hr>
        </div>
    </div>

    <div class="bg-white p-4 p-md-5 rounded shadow-sm mb-5">
        <div class="row g-4">

            @forelse($productosEnOferta as $prod)
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ route('productos.detalle', $prod->id) }}" class="text-decoration-none text-dark">
                        <div class="card h-100 border shadow-none hover-shadow position-relative">
                            
                            <div class="position-absolute p-2">
                                <span class="badge bg-success">{{ $prod->porcentaje_descuento }}% OFF</span>
                            </div>
                            
                            <img src="{{ asset('images/img-products/' . $prod->imagen) }}" class="card-img-top imagen-producto p-3" alt="{{ $prod->nombre }}" style="height: 180px; object-fit: contain;">
                            
                            <div class="card-body border-top">
                                <p class="text-truncate mb-1 small" title="{{ $prod->nombre }}">{{ $prod->nombre }}</p>
                                
                                <span class="text-muted text-decoration-line-through small">
                                    ${{ number_format($prod->precio * 1.3, 0, ',', '.') }}
                                </span>
                                
                                <h4 class="fw-bold mb-1">${{ number_format($prod->precio, 0, ',', '.') }}</h4>
                                
                                @if($prod->precio >= 100000)
                                    <p class="text-primary small mb-0 fw-bold">12 cuotas sin interés</p>
                                @else
                                    <p class="text-success small fw-bold mb-0">Envío gratis</p>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12 text-center py-4">
                    <i class="ti ti-percentage display-4 text-muted mb-2"></i>
                    <p class="text-muted fw-bold">¡Por el momento no hay súper ofertas activas! Volvé a ingresar más tarde.</p>
                </div>
            @endforelse

        </div>
    </div>

    <div class="col-12 text-center">
        <img src="{{ asset('images/img-descounts/scaloneta-img.png') }}" 
            class="img-fluid rounded shadow-sm" 
            alt="Consulta en Tienda OGA"
            style="width: 100%; height: auto; object-fit: contain;">

        <div class="mt-3">
            <p class="small text-muted italic mb-0">"Tu confianza es nuestra prioridad."</p>
        </div>
    </div>

</div>

@endsection