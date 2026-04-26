@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

<div id="carouselPromociones" class="carousel slide mb-5 shadow rounded" data-bs-ride="carousel">
    
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselPromociones" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselPromociones" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselPromociones" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner rounded">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="{{ asset('images/img-descounts/img-descuento-mundial.png') }}" class="d-block w-100" alt="Promoción Zapatillas">
        </div>

        <div class="carousel-item" data-bs-interval="3000">
            <img src="{{ asset('images/banner2.png') }}" class="d-block w-100" alt="Promoción Tecnología">
        </div>

        <div class="carousel-item" data-bs-interval="3000">
            <img src="{{ asset('images/banner3.png') }}" class="d-block w-100" alt="Promoción Hogar">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromociones" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselPromociones" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>
<h2 class="mb-4">Nuestras Categorías</h2>

<div class="row">
    <div class="col-md-4 mb-3">
        <a href="/catalogo" class="text-decoration-none text-dark">
        <div class="card h-100">
            <img src="{{ asset('images/img-products/estufa-bionica.png') }}" class="card-img-top" alt="tecnología">
            <div class="card-body">
                <h5 class="card-title">Invierno</h5>
            </div>
        </div>
        </a>
    </div>


    <div class="col-md-4 mb-3">
        <a href="/catalogo" class="text-decoration-none text-dark">
        <div class="card h-100">
            <img src="{{ asset('images/img-products/seguridad.png') }}" class="card-img-top" alt="seguridad">
            <div class="card-body">
                <h5 class="card-title">Seguridad</h5>
            </div>
        </div>
        </a>
    </div>


    <div class="col-md-4 mb-3">
        <a href="/catalogo" class="text-decoration-none text-dark">
        <div class="card h-100">
            <img src="{{ asset('images/img-products/hogar.png') }}" class="card-img-top" alt="hogar">
            <div class="card-body">
                <h5 class="card-title">Hogar</h5>
            </div>
        </div>
        </a>
    </div>
</div>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-baseline mb-3">
        <h3 class="fw-light">Ofertas de Invierno en <span class="fw-bold">Estufas y Mantas</span></h3>
        <a href="/catalogo" class="text-decoration-none">Ver todas</a>
    </div>

    <div class="d-flex overflow-auto pb-3 gap-3" style="scrollbar-width: thin;">
        
        <div class="card border-0 shadow-sm" style="min-width: 220px; max-width: 220px;">
            <img src="{{ asset('images/img-products/estufa-bionica.png') }}" class="card-img-top p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1" style="font-size: 0.9rem;">Calefactor Eléctrico Convector 1500w</p>
                <span class="text-muted text-decoration-line-through small">$33.538</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$25.799</h4>
                    <span class="text-success small fw-bold">30% OFF</span>
                </div>
                <p class="text-primary small mb-1">6 cuotas de $4.799</p>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>

        <div class="card border-0 shadow-sm" style="min-width: 220px; max-width: 220px;">
            <img src="{{ asset('images/img-products/estufa-infrarroja-lilliana.png') }}" class="card-img-top p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1" style="font-size: 0.9rem;">Estufa Halógena Vitta 1200w</p>
                <span class="text-muted text-decoration-line-through small">$48.999</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$46.059</h4>
                    <span class="text-success small fw-bold">6% OFF</span>
                </div>
                <p class="text-primary small mb-1">6 cuotas de $10.509</p>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>

        <div class="card border-0 shadow-sm" style="min-width: 220px; max-width: 220px;">
            <img src="{{ asset('images/img-products/manta-riverplate.png') }}" class="card-img-top p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1" style="font-size: 0.9rem;">Manta Magica River Plate Estampado</p>
                <span class="text-muted text-decoration-line-through small">$15.898</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$14.999</h4>
                    <span class="text-success small fw-bold">6% OFF</span>
                </div>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>

        <div class="card border-0 shadow-sm" style="min-width: 220px; max-width: 220px;">
            <img src="{{ asset('images/img-products/manta-infantil.png') }}" class="card-img-top p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1" style="font-size: 0.9rem;">Manta Magica Brillante Infantil Estampado</p>
                <span class="text-muted text-decoration-line-through small">$15.898</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$14.999</h4>
                    <span class="text-success small fw-bold">6% OFF</span>
                </div>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>

    </div>
</div>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-baseline mb-3">
        <h3 class="fw-light">Todo Para La <span class="fw-bold">Seguridad De Tu Hogar</span></h3>
        <a href="/catalogo" class="text-decoration-none">Ver todas</a>
    </div>

    <div class="d-flex overflow-auto pb-3 gap-3" style="scrollbar-width: thin;">
        
        <a href="/productos/camara-seguridade107" class="text-decoration-none text-dark">
        <div class="card border-0 shadow-sm" style="min-width: 220px; max-width: 220px;">
            <img src="{{ asset('images/img-products/camaraseguridade107.png') }}" class="card-img-top p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1" style="font-size: 0.9rem;">Camara Seguridad Exterior Wifi Doble Visor LUO e107</p>
                <span class="text-muted text-decoration-line-through small">$33.538</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$50.000</h4>
                    <span class="text-success small fw-bold">30% OFF</span>
                </div>
                <p class="text-primary small mb-1">6 cuotas de $8.600</p>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>
        </a>

        <a href="/productos/camara-seguridade126" class="text-decoration-none text-dark">
        <div class="card border-0 shadow-sm" style="min-width: 220px; max-width: 220px;">
            <img src="{{ asset('images/img-products/camara-luo-e126.png') }}" class="card-img-top p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1" style="font-size: 0.9rem;">Camara Seguridad Exterior Wifi Triple Visor LUO</p>
                <span class="text-muted text-decoration-line-through small">$89.999</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$60.000</h4>
                    <span class="text-success small fw-bold">33% OFF</span>
                </div>
                <p class="text-primary small mb-1">6 cuotas <span class="fw-bold">sin interes</span> de $10.000</p>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>
        </a>

        <div class="card border-0 shadow-sm" style="min-width: 220px; max-width: 220px;">
            <img src="{{ asset('images/img-products/kit-camaras-e121.png') }}" class="card-img-top p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1" style="font-size: 0.9rem;">Kit 4 camaras + DVR + Cables LUO e121</p>
                <span class="text-muted text-decoration-line-through small">$200.000</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$154.000</h4>
                    <span class="text-success small fw-bold">23% OFF</span>
                </div>
                <p class="text-primary small mb-1">6 cuotas <span class="fw-bold">sin interes</span> de $25.666</p>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>

        <div class="card border-0 shadow-sm" style="min-width: 220px; max-width: 220px;">
            <img src="{{ asset('images/img-products/kit-camaras-e122.png') }}" class="card-img-top p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1" style="font-size: 0.9rem;">Kit 4 camaras + DVR + Cables LUO e121</p>
                <span class="text-muted text-decoration-line-through small">$300.000</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$231.000</h4>
                    <span class="text-success small fw-bold">23% OFF</span>
                </div>
                <p class="text-primary small mb-1">6 cuotas <span class="fw-bold">sin interes</span> de $38.500</p>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid py-5 mb-5" style="background-color: #74ACDF;"> 
    <div class="container">
        <div class="d-flex justify-content-between align-items-baseline mb-3">
            <h3 class="fw-light text-white">Especial Mundial: <span class="fw-bold">Televisores y Sonido</span></h3>
            <a href="/catalogo" class="text-white text-decoration-none fw-bold">Ver todas las ofertas</a>
        </div>

        <div class="d-flex justify-content-center pb-3 gap-3 flex-wrap">
            
            <div class="card border-0 shadow" style="min-width: 240px; max-width: 240px;">
                <img src="{{ asset('images/img-products/televisor-43.png') }}" class="card-img-top p-3" alt="TV">
                <div class="card-body border-top">
                    <p class="text-truncate mb-1" style="font-size: 0.9rem;">Smart TV 50" 4K UHD Ultra Slim</p>
                    <span class="text-muted text-decoration-line-through small">$450.000</span>
                    <div class="d-flex align-items-center gap-2">
                        <h4 class="mb-0">$380.000</h4>
                        <span class="text-success small fw-bold">15% OFF</span>
                    </div>
                    <p class="text-primary small mb-1">12 cuotas <span class="fw-bold">sin interés</span></p>
                    <p class="text-success fw-bold small mb-0">Envío gratis <i class="ti ti-truck-delivery"></i></p>
                </div>
            </div>

            <div class="card border-0 shadow" style="min-width: 240px; max-width: 240px;">
                <img src="{{ asset('images/img-products/tv-32.png') }}" class="card-img-top p-3" alt="TV">
                <div class="card-body border-top">
                    <p class="text-truncate mb-1" style="font-size: 0.9rem;">Smart TV 32" 4K UHD Ultra Slim</p>
                    <span class="text-muted text-decoration-line-through small">$450.000</span>
                    <div class="d-flex align-items-center gap-2">
                        <h4 class="mb-0">$380.000</h4>
                        <span class="text-success small fw-bold">15% OFF</span>
                    </div>
                    <p class="text-primary small mb-1">12 cuotas <span class="fw-bold">sin interés</span></p>
                    <p class="text-success fw-bold small mb-0">Envío gratis <i class="ti ti-truck-delivery"></i></p>
                </div>
            </div>

            <div class="card border-0 shadow" style="min-width: 240px; max-width: 240px;">
                <img src="{{ asset('images/img-products/tv-55.png') }}" class="card-img-top p-3" alt="TV">
                <div class="card-body border-top">
                    <p class="text-truncate mb-1" style="font-size: 0.9rem;">Smart TV 32" 4K UHD Ultra Slim</p>
                    <span class="text-muted text-decoration-line-through small">$650.000</span>
                    <div class="d-flex align-items-center gap-2">
                        <h4 class="mb-0">$550.000</h4>
                        <span class="text-success small fw-bold">15% OFF</span>
                    </div>
                    <p class="text-primary small mb-1">12 cuotas <span class="fw-bold">sin interés</span></p>
                    <p class="text-success fw-bold small mb-0">Envío gratis <i class="ti ti-truck-delivery"></i></p>
                </div>
            </div>

        </div>
    </div>
</div>

<hr class="my-5">
<div class="row text-center mb-5">
    <div class="col-md-4 px-4 border-end border-md-end-0">
        <i class="ti ti-credit-card fs-1 text-primary mb-3"></i>
        <h5>Elegí cómo pagar</h5>
        <p class="text-muted small">Podés pagar con tarjeta, débito, efectivo o transferencia bancaria.</p>
        <a href="/consultas" class="text-decoration-none">Cómo pagar tus compras</a>
    </div>

    <div class="col-md-4 px-4 border-end border-md-end-0">
        <i class="ti ti-package fs-1 text-primary mb-3"></i>
        <h5>Envío rápido y seguro</h5>
        <p class="text-muted small">Recibí tus productos en la puerta de tu casa con la mejor logística.</p>
        <p class="text-muted small">Aprovechá beneficios en miles de productos.</p>
    </div>

    <div class="col-md-4 px-4">
        <i class="ti ti-shield-check fs-1 text-primary mb-3"></i>
        <h5>Seguridad, de principio a fin</h5>
        <p class="text-muted small">¿No te gusta? ¡Devolvelo! En Tienda OGA estás siempre protegido.</p>
        <a href="/terminos" class="text-decoration-none">Cómo te protegemos</a>
    </div>
</div>

@endsection