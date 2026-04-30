@extends('layouts.app')

@section('titulo', 'Ofertas')

@section('contenido')

<div class="container my-5">
    <div class="row mb-4">
        <div class="col-12 text-center text-md-start">
            <h1 class="fw-bold text-dark"><i class="ti ti-flame"></i>Súper Ofertas</h1>
            <p class="text-muted">Aprovechá los descuentos exclusivos de la semana en Tienda OGA.</p>
            <hr>
        </div>
    </div>

    <div class="bg-white p-4 p-md-5 rounded shadow-sm">
        <div class="row g-4">

            <div class="col-6 col-md-4 col-lg-3">
                <a href="/productos/camara-seguridade107" class="text-decoration-none text-dark">
                    <div class="card h-100 border shadow-none hover-shadow">
                        <div class="position-absolute p-2">
                            <span class="badge bg-success">30% OFF</span>
                        </div>
                        <img src="{{ asset('images/img-products/camaraseguridade107.png') }}" class="card-img-top imagen-producto p-3" alt="Cámara">
                        <div class="card-body border-top">
                            <p class="text-truncate mb-1 small">Cámara Exterior Wifi LUO e107</p>
                            <span class="text-muted text-decoration-line-through small">$65.000</span>
                            <h4 class="fw-bold mb-1">$50.000</h4>
                            <p class="text-success small fw-bold mb-0">Envío gratis</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a href="/productos/estufa-bionica" class="text-decoration-none text-dark">
                    <div class="card h-100 border shadow-none hover-shadow">
                        <div class="position-absolute p-2">
                            <span class="badge bg-success">30% OFF</span>
                        </div>
                        <img src="{{ asset('images/img-products/estufa-bionica.png') }}" class="card-img-top imagen-producto p-3" alt="Estufa">
                        <div class="card-body border-top">
                            <p class="text-truncate mb-1 small">Calefactor Convector 1500w</p>
                            <span class="text-muted text-decoration-line-through small">$33.538</span>
                            <h4 class="fw-bold mb-1">$25.799</h4>
                            <p class="text-success small fw-bold mb-0">Envío gratis</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a href="/productos/televisor-50" class="text-decoration-none text-dark">
                    <div class="card h-100 border shadow-none hover-shadow">
                        <div class="position-absolute p-2">
                            <span class="badge bg-success">15% OFF</span>
                        </div>
                        <img src="{{ asset('images/img-products/television-43.png') }}" class="card-img-top imagen-producto p-3" alt="TV">
                        <div class="card-body border-top">
                            <p class="text-truncate mb-1 small">Smart TV 50" 4K UHD Slim</p>
                            <span class="text-muted text-decoration-line-through small">$575.000</span>
                            <h4 class="fw-bold mb-1">$500.000</h4>
                            <p class="text-primary small mb-0 fw-bold">12 cuotas sin interés</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a href="/productos/manta-river" class="text-decoration-none text-dark">
                    <div class="card h-100 border shadow-none hover-shadow">
                        <div class="position-absolute p-2">
                            <span class="badge bg-success">6% OFF</span>
                        </div>
                        <img src="{{ asset('images/img-products/manta-riverplate.png') }}" class="card-img-top imagen-producto p-3" alt="Manta">
                        <div class="card-body border-top">
                            <p class="text-truncate mb-1 small">Manta Mágica River Plate</p>
                            <span class="text-muted text-decoration-line-through small">$15.898</span>
                            <h4 class="fw-bold mb-1">$9.121,8</h4>
                            <p class="text-success small fw-bold mb-0">Envío gratis</p>
                        </div>
                    </div>
                </a>
            </div>

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