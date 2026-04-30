@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

<div id="carruselPromociones" class="carousel slide mb-5 shadow-sm" data-bs-ride="carousel">
    
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carruselPromociones" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#carruselPromociones" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carruselPromociones" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
        
        <div class="carousel-item active" data-bs-interval="3000">
            <a href="/catalogo-televisores">
                <img src="{{ asset('images/img-descounts/img-descuento-mundial.png') }}" class="d-block w-100 img-carrusel-responsive" alt="Mundial">
            </a>
        </div>

        
        <div class="carousel-item" data-bs-interval="3000">
            <a href="/catalogo-seguridad">
                <img src="{{ asset('images/img-descounts/img-descuento-seguridad.png') }}" class="d-block w-100 img-carrusel-responsive" alt="Seguridad">
            </a>
        </div>

       
        <div class="carousel-item" data-bs-interval="3000">
            <a href="/catalogo-invierno">
                <img src="{{ asset('images/img-descounts/img-descuento-invierno.png') }}" class="d-block w-100 img-carrusel-responsive" alt="Invierno">
            </a>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carruselPromociones" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carruselPromociones" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<div class="container">

<h2 class="mb-4"><span class="fw-bold">Más Vendidos</span></h2>

<div class="container my-5">
    <div class="d-flex overflow-auto pb-3 gap-3" style="scrollbar-width: thin;">
        
        <a href="/productos/camara-e121" class="text-decoration-none text-dark">
        <div class="card border-0 shadow-sm tarjeta-producto">
            <img src="{{ asset('images/img-products/kit-camaras-e121.png') }}" class="card-img-top imagen-producto p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1 texto-recortado">Kit 4 camaras + DVR + Cables LUO e121</p>
                <span class="text-muted text-decoration-line-through small">$200.000</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$154.000</h4>
                    <span class="text-success small fw-bold">23% OFF</span>
                </div>
                <p class="text-primary small mb-1">6 cuotas <span class="fw-bold">sin interes</span> de $25.666</p>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>
        </a>

        <a href="/productos/camara-seguridade107" class="text-decoration-none text-dark">
        <div class="card border-0 shadow-sm tarjeta-producto">
            <img src="{{ asset('images/img-products/camaraseguridade107.png') }}" class="card-img-top imagen-producto p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1 texto-recortado">Camara Seguridad Exterior Wifi Doble Visor LUO e107</p>
                <span class="text-muted text-decoration-line-through small">$65.000</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$50.000</h4>
                    <span class="text-success small fw-bold">30% OFF</span>
                </div>
                <p class="text-primary small mb-1">6 cuotas <span class="fw-bold">sin interes</span> de $8.333,33</p>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>
        </a>

        <a href="/productos/televisor-50" class="text-decoration-none text-dark">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('images/img-products/television-43.png') }}" class="card-img-top imagen-producto p-3" alt="TV">
                        <div class="card-body border-top">
                            <p class="text-truncate mb-1 texto-recortado">Smart TV 50" 4K UHD Ultra Slim</p>
                            <span class="text-muted text-decoration-line-through small">$575.000</span>
                            <div class="d-flex align-items-center gap-2">
                                <h4 class="mb-0">$500.000</h4>
                                <span class="text-success small fw-bold">15% OFF</span>
                            </div>
                            <p class="text-primary small mb-1">12 cuotas <span class="fw-bold">sin interés</span></p>
                            <p class="text-success fw-bold small mb-0">Envío gratis <i class="ti ti-truck-delivery"></i></p>
                        </div>
                    </div>
                </a>

    </div>
</div>

<div class="container my-5">
    <div class="d-flex gap-2 align-items-baseline mb-3">
        <h3 class="fw-light text-dark"><span class="fw-bold">Climatización</span></h3>
        <a href="/catalogo-invierno" class="text-decoration-none">Ver todas</a>
    </div>

    <div class="d-flex overflow-auto pb-3 gap-3" style="scrollbar-width: thin;">
        <a href="/productos/estufa-bionica" class="text-decoration-none text-dark">
            <div class="card border-0 shadow-sm tarjeta-producto">
                <img src="{{ asset('images/img-products/estufa-bionica.png') }}" class="card-img-top imagen-producto p-3" alt="Estufa">
                <div class="card-body border-top">
                    <p class="text-truncate mb-1 small">Estufa De Cuarzo Bionica Infrarroja</p>
                    <h4 class="mb-0 fw-bold">$25.799</h4>
                    <span class="text-success small fw-bold">22% OFF</span>
                </div>
            </div>
        </a>

        <a href="/productos/estufa-infrarroja" class="text-decoration-none text-dark">
            <div class="card border-0 shadow-sm tarjeta-producto">
                <img src="{{ asset('images/img-products/estufa-infrarroja-lilliana.png') }}" class="card-img-top imagen-producto p-3" alt="Estufa">
                <div class="card-body border-top">
                    <p class="text-truncate mb-1 small">Estufa Infrarroja Lilliana</p>
                    <h4 class="mb-0 fw-bold">$20.977</h4>
                    <span class="text-success small fw-bold">Envio gratis</span>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="container my-5">
    <div class="d-flex gap-2 align-items-baseline mb-3">
        <h3 class="fw-light text-dark"><span class="fw-bold">Hogar</span></h3>
        <a href="/catalogo-hogar" class="text-decoration-none">Ver todas</a>
    </div>

    <div class="d-flex overflow-auto pb-3 gap-3" style="scrollbar-width: thin;">
        
        <a href="/productos/manta-river" class="text-decoration-none text-dark">
            <div class="card border-0 shadow-sm tarjeta-producto">
                <img src="{{ asset('images/img-products/manta-riverplate.png') }}" class="card-img-top imagen-producto p-3" alt="Manta">
                <div class="card-body border-top">
                    <p class="text-truncate mb-1 small">Manta River Plate Estampado</p>
                    <h4 class="mb-0 fw-bold">$9.121,8</h4>
                    <p class="text-success small fw-bold">Envío gratis</p>
                </div>
            </div>
        </a>

        <a href="/productos/manta-magica" class="text-decoration-none text-dark">
            <div class="card border-0 shadow-sm tarjeta-producto">
                <img src="{{ asset('images/img-products/manta.png') }}" class="card-img-top imagen-producto p-3" alt="Manta">
                <div class="card-body border-top">
                    <p class="text-truncate mb-1 small">Manta Brillante Infantil</p>
                    <h4 class="mb-0 fw-bold">$22.590</h4>
                    <p class="text-success small fw-bold">Envío gratis</p>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="container my-5">
    <div class="d-flex gap-2 align-items-baseline mb-3">
        <h3 class="fw-light"><span class="fw-bold">Seguridad</span></h3>
        <a href="/catalogo-seguridad" class="text-decoration-none">Ver todas</a>
    </div>

    <div class="d-flex overflow-auto pb-3 gap-3" style="scrollbar-width: thin;">
        
        <a href="/productos/camara-seguridade107" class="text-decoration-none text-dark">
        <div class="card border-0 shadow-sm tarjeta-producto">
            <img src="{{ asset('images/img-products/camaraseguridade107.png') }}" class="card-img-top imagen-producto p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1 texto-recortado">Camara Seguridad Exterior Wifi Doble Visor LUO e107</p>
                <span class="text-muted text-decoration-line-through small">$65.000</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$50.000</h4>
                    <span class="text-success small fw-bold">30% OFF</span>
                </div>
                <p class="text-primary small mb-1">6 cuotas <span class="fw-bold">sin interes</span> de $8.333,33</p>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>
        </a>

        <a href="/productos/camara-seguridade126" class="text-decoration-none text-dark">
        <div class="card border-0 shadow-sm tarjeta-producto">
            <img src="{{ asset('images/img-products/camara-luo-e126.png') }}" class="card-img-top imagen-producto p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1 texto-recortado">Camara Seguridad Exterior Wifi Triple Visor LUO</p>
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

        <a href="/productos/camara-e121" class="text-decoration-none text-dark">
        <div class="card border-0 shadow-sm tarjeta-producto">
            <img src="{{ asset('images/img-products/kit-camaras-e121.png') }}" class="card-img-top imagen-producto p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1 texto-recortado">Kit 4 camaras + DVR + Cables LUO e121</p>
                <span class="text-muted text-decoration-line-through small">$200.000</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$154.000</h4>
                    <span class="text-success small fw-bold">23% OFF</span>
                </div>
                <p class="text-primary small mb-1">6 cuotas <span class="fw-bold">sin interes</span> de $25.666</p>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>
        </a>

        <a href="/productos/camara-e122" class="text-decoration-none text-dark">
        <div class="card border-0 shadow-sm tarjeta-producto">
            <img src="{{ asset('images/img-products/kit-camaras-e122.png') }}" class="card-img-top imagen-producto p-3" alt="Estufa">
            <div class="card-body border-top">
                <p class="text-truncate mb-1 texto-recortado">Kit 8 camaras + DVR + Cables LUO e121</p>
                <span class="text-muted text-decoration-line-through small">$300.000</span>
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">$231.000</h4>
                    <span class="text-success small fw-bold">23% OFF</span>
                </div>
                <p class="text-primary small mb-1">6 cuotas <span class="fw-bold">sin interes</span> de $38.500</p>
                <p class="text-success fw-bold small mb-0">Envío gratis</p>
            </div>
        </div>
    </a>

    </div>
</div>

<div class="container-fluid py-5 mb-5" style="background-color: #74ACDF;"> 
    <div class="container">
        <div class="d-flex gap-2 align-items-baseline mb-3">
            <h3 class="fw-light text-white"><span class="fw-bold">Especial Mundial: Televisores y Sonido</span></h3>
            <a href="/catalogo-televisores" class="text-white text-decoration-none fw-bold">Ver todas las ofertas</a>
        </div>

        <div class="d-flex justify-content-center pb-3 gap-3 flex-wrap">
            
            <div style="min-width: 240px; max-width: 240px;">
                <a href="/productos/televisor-50" class="text-decoration-none text-dark">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('images/img-products/television-43.png') }}" class="card-img-top imagen-producto p-3" alt="TV">
                        <div class="card-body border-top">
                            <p class="text-truncate mb-1 texto-recortado">Smart TV 50" 4K UHD Ultra Slim</p>
                            <span class="text-muted text-decoration-line-through small">$575.000</span>
                            <div class="d-flex align-items-center gap-2">
                                <h4 class="mb-0">$500.000</h4>
                                <span class="text-success small fw-bold">15% OFF</span>
                            </div>
                            <p class="text-primary small mb-1">12 cuotas <span class="fw-bold">sin interés</span></p>
                            <p class="text-success fw-bold small mb-0">Envío gratis <i class="ti ti-truck-delivery"></i></p>
                        </div>
                    </div>
                </a>
            </div>

            <div style="min-width: 240px; max-width: 240px;">
                <a href="/productos/televisor-32" class="text-decoration-none text-dark">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('images/img-products/tv-32.png') }}" class="card-img-top imagen-producto p-3" alt="TV">
                        <div class="card-body border-top">
                            <p class="text-truncate mb-1 texto-recortado">Smart TV 32" 4K UHD Ultra Slim</p>
                            <span class="text-muted text-decoration-line-through small">$450.000</span>
                            <div class="d-flex align-items-center gap-2">
                                <h4 class="mb-0">$380.000</h4>
                                <span class="text-success small fw-bold">15% OFF</span>
                            </div>
                            <p class="text-primary small mb-1">12 cuotas <span class="fw-bold">sin interés</span></p>
                            <p class="text-success fw-bold small mb-0">Envío gratis <i class="ti ti-truck-delivery"></i></p>
                        </div>
                    </div>
                </a>
            </div>

            <div style="min-width: 240px; max-width: 240px;">
                <a href="/productos/televisor-55" class="text-decoration-none text-dark">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('images/img-products/tv-55.png') }}" class="card-img-top imagen-producto p-3" alt="TV">
                        <div class="card-body border-top">
                            <p class="text-truncate mb-1 texto-recortado">Smart TV 55" 4K UHD Ultra Slim</p>
                            <span class="text-muted text-decoration-line-through small">$650.000</span>
                            <div class="d-flex align-items-center gap-2">
                                <h4 class="mb-0">$550.000</h4>
                                <span class="text-success small fw-bold">15% OFF</span>
                            </div>
                            <p class="text-primary small mb-1">12 cuotas <span class="fw-bold">sin interés</span></p>
                            <p class="text-success fw-bold small mb-0">Envío gratis <i class="ti ti-truck-delivery"></i></p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid p-0 mb-5">
    <img src="{{ asset('images/img-descounts/img-messi.png') }}" 
         class="img-fluid w-100 d-block img-promo-larga" 
         alt="Promo Messi">
</div>

<hr class="my-5">
<div class="row text-center mb-5">
    <div class="col-md-4 px-4 border-end border-md-end-0">
        <i class="ti ti-credit-card fs-1 text-primary mb-3"></i>
        <h5>Elegí cómo pagar</h5>
        <p class="text-muted small">Podés pagar con tarjeta, débito, efectivo o transferencia bancaria.</p>
        <a href="/comercializacion" class="text-decoration-none">Cómo pagar tus compras</a>
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

</div>
@endsection