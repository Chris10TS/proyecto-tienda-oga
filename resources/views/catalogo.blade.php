@extends('layouts.app')

@section('titulo', $titulo)

@section('contenido')

<div class="container my-5">
    
    @if(session('success'))
        <div class="alert alert-success p-2 small shadow-sm">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger p-2 small shadow-sm">{{ session('error') }}</div>
    @endif

    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold">{{ $titulo }}</h1>
            <p class="text-muted">Explorá nuestros artículos seleccionados con la mejor tecnología y calidad de Tienda OGA.</p>
            <hr>
        </div>
    </div>

    <div class="row">
        
        @forelse($productos as $prod)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                
                <a href="{{ route('productos.detalle', $prod->id) }}" class="text-decoration-none text-dark">
                    <div class="card h-100 shadow-sm border-0 position-relative content-tarjeta">
                        
                        @if($prod->porcentaje_descuento > 0)
                            <span class="badge bg-danger position-absolute top-0 start-0 m-3 fs-6 shadow-sm">
                                {{ $prod->porcentaje_descuento }}% OFF
                            </span>
                        @endif

                        <img src="{{ asset('images/img-products/' . $prod->imagen) }}" class="card-img-top p-3 imagen-catalogo-ajustada" alt="{{ $prod->nombre }}" style="height: 200px; object-fit: contain;">
                        
                        <div class="card-body border-top d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title fw-bold text-truncate mb-1" title="{{ $prod->nombre }}">{{ $prod->nombre }}</h5>
                                <p class="card-text text-muted small">{{ Str::limit($prod->descripcion, 50) }}</p>
                            </div>

                            <div class="mt-2">
                                @if($prod->porcentaje_descuento > 0)
                                    <span class="text-muted text-decoration-line-through small d-block">
                                        ${{ number_format($prod->precio * 1.3, 0, ',', '.') }}
                                    </span>
                                @endif
                                
                                <h4 class="fw-bold text-success mb-0">${{ number_format($prod->precio, 0, ',', '.') }}</h4>
                            </div>
                        </div>
                    </div>
                </a>
                
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <i class="ti ti-box-off display-3 text-muted mb-3"></i>
                <h4 class="text-muted">No se encontraron artículos en esta sección por el momento.</h4>
                <a href="{{ route('inicio') }}" class="btn btn-outline-primary mt-3 fw-bold">Volver a la Portada</a>
            </div>
        @endforelse

    </div>
</div>

@endsection