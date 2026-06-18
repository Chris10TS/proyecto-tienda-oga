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
            <a href="/catalogo/categoria/4">
                <img src="{{ asset('images/img-descounts/img-descuento-mundial.png') }}" class="d-block w-100 img-carrusel-responsive" alt="Mundial">
            </a>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <a href="/catalogo/categoria/1">
                <img src="{{ asset('images/img-descounts/img-descuento-seguridad.png') }}" class="d-block w-100 img-carrusel-responsive" alt="Seguridad">
            </a>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <a href="/catalogo/categoria/3">
                <img src="{{ asset('images/img-descounts/img-descuento-invierno.png') }}" class="d-block w-100 img-carrusel-responsive" alt="Invierno">
            </a>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carruselPromociones" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carruselPromociones" data-bs-slide-next="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<div class="container">

    <h2 class="mb-4"><span class="fw-bold">Más Vendidos</span></h2>

    <div class="container my-5">
        <div class="d-flex justify-content-center overflow-auto pb-3 gap-3" style="scrollbar-width: thin;">
            
            @forelse($masVendidos as $prod)
                <div class="position-relative">
                    @if(Auth::check() && Auth::user()->rol === 'admin')
                        <div class="d-flex justify-content-end gap-1 p-2 bg-light border-bottom rounded-top">
                            <a href="{{ route('admin.productos.edit', $prod->id) }}" class="btn btn-xs btn-outline-primary py-0 px-2 small">Editar</a>
                            <form action="{{ route('admin.productos.destroy', $prod->id) }}" method="POST" onsubmit="return confirm('¿Seguro querés dar de baja este artículo?');" class="m-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-outline-danger py-0 px-2 small">Baja</button>
                            </form>
                        </div>
                    @endif

                    <a href="{{ route('productos.detalle', $prod->id) }}" class="text-decoration-none text-dark">
                        <div class="card border-0 shadow-sm tarjeta-producto" style="@if(Auth::check() && Auth::user()->rol === 'admin') border-top-left-radius: 0px !important; border-top-right-radius: 0px !important; @endif">
                            <img src="{{ asset('images/img-products/' . $prod->imagen) }}" class="card-img-top imagen-producto p-3" alt="{{ $prod->nombre }}">
                            <div class="card-body border-top">
                                <p class="text-truncate mb-1 texto-recortado" title="{{ $prod->nombre }}">{{ $prod->nombre }}</p>
                                <span class="text-muted text-decoration-line-through small">${{ number_format($prod->precio * 1.3, 0, ',', '.') }}</span>
                                <div class="d-flex align-items-center gap-2">
                                    <h4 class="mb-0">${{ number_format($prod->precio, 0, ',', '.') }}</h4>
                                    <span class="text-success small fw-bold">23% OFF</span>
                                </div>
                                <p class="text-primary small mb-1">6 cuotas <span class="fw-bold">sin interes</span> de ${{ number_format($prod->precio / 6, 0, ',', '.') }}</p>
                                <p class="text-success fw-bold small mb-0">Envío gratis</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p class="text-muted small">No hay productos cargados en Más Vendidos.</p>
            @endforelse

        </div>
    </div>

    <div class="container my-5">
        <div class="d-flex gap-2 align-items-baseline mb-3">
            <h3 class="fw-light text-dark"><span class="fw-bold">Climatización</span></h3>
            <a href="/catalogo/categoria/3" class="text-decoration-none">Ver todas</a>
        </div>

        <div class="d-flex overflow-auto pb-3 gap-3" style="scrollbar-width: thin;">
            
            @forelse($climatizacion as $prod)
                <div class="position-relative">
                    @if(Auth::check() && Auth::user()->rol === 'admin')
                        <div class="d-flex justify-content-end gap-1 p-2 bg-light border-bottom rounded-top">
                            <a href="{{ route('admin.productos.edit', $prod->id) }}" class="btn btn-xs btn-outline-primary py-0 px-2 small">Editar</a>
                            <form action="{{ route('admin.productos.destroy', $prod->id) }}" method="POST" onsubmit="return confirm('¿Seguro querés dar de baja este artículo?');" class="m-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-outline-danger py-0 px-2 small">Baja</button>
                            </form>
                        </div>
                    @endif

                    <a href="{{ route('productos.detalle', $prod->id) }}" class="text-decoration-none text-dark">
                        <div class="card border-0 shadow-sm tarjeta-producto" style="@if(Auth::check() && Auth::user()->rol === 'admin') border-top-left-radius: 0px !important; border-top-right-radius: 0px !important; @endif">
                            <img src="{{ asset('images/img-products/' . $prod->imagen) }}" class="card-img-top imagen-producto p-3" alt="{{ $prod->nombre }}">
                            <div class="card-body border-top">
                                <p class="text-truncate mb-1 small" title="{{ $prod->nombre }}">{{ $prod->nombre }}</p>
                                <h4 class="mb-0 fw-bold">${{ number_format($prod->precio, 0, ',', '.') }}</h4>
                                <span class="text-success small fw-bold">Envio gratis</span>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p class="text-muted small">Próximamente más productos de Climatización.</p>
            @endforelse

        </div>
    </div>

    <div class="container my-5">
        <div class="d-flex gap-2 align-items-baseline mb-3">
            <h3 class="fw-light text-dark"><span class="fw-bold">Hogar</span></h3>
            <a href="/catalogo/categoria/2" class="text-decoration-none">Ver todas</a>
        </div>

        <div class="d-flex overflow-auto pb-3 gap-3" style="scrollbar-width: thin;">
            
            @forelse($hogar as $prod)
                <div class="position-relative">
                    @if(Auth::check() && Auth::user()->rol === 'admin')
                        <div class="d-flex justify-content-end gap-1 p-2 bg-light border-bottom rounded-top">
                            <a href="{{ route('admin.productos.edit', $prod->id) }}" class="btn btn-xs btn-outline-primary py-0 px-2 small">Editar</a>
                            <form action="{{ route('admin.productos.destroy', $prod->id) }}" method="POST" onsubmit="return confirm('¿Seguro querés dar de baja este artículo?');" class="m-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-outline-danger py-0 px-2 small">Baja</button>
                            </form>
                        </div>
                    @endif

                    <a href="{{ route('productos.detalle', $prod->id) }}" class="text-decoration-none text-dark">
                        <div class="card border-0 shadow-sm tarjeta-producto" style="@if(Auth::check() && Auth::user()->rol === 'admin') border-top-left-radius: 0px !important; border-top-right-radius: 0px !important; @endif">
                            <img src="{{ asset('images/img-products/' . $prod->imagen) }}" class="card-img-top imagen-producto p-3" alt="{{ $prod->nombre }}">
                            <div class="card-body border-top">
                                <p class="text-truncate mb-1 small" title="{{ $prod->nombre }}">{{ $prod->nombre }}</p>
                                <h4 class="mb-0 fw-bold">${{ number_format($prod->precio, 0, ',', '.') }}</h4>
                                <p class="text-success small fw-bold">Envío gratis</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p class="text-muted small">Próximamente más productos de Hogar.</p>
            @endforelse

        </div>
    </div>

    <div class="container my-5">
        <div class="d-flex gap-2 align-items-baseline mb-3">
            <h3 class="fw-light"><span class="fw-bold">Seguridad</span></h3>
            <a href="/catalogo/categoria/1" class="text-decoration-none">Ver todas</a>
        </div>

        <div class="d-flex overflow-auto pb-3 gap-3" style="scrollbar-width: thin;">
            
            @forelse($seguridad as $prod)
                <div class="position-relative">
                    @if(Auth::check() && Auth::user()->rol === 'admin')
                        <div class="d-flex justify-content-end gap-1 p-2 bg-light border-bottom rounded-top">
                            <a href="{{ route('admin.productos.edit', $prod->id) }}" class="btn btn-xs btn-outline-primary py-0 px-2 small">Editar</a>
                            <form action="{{ route('admin.productos.destroy', $prod->id) }}" method="POST" onsubmit="return confirm('¿Seguro querés dar de baja este artículo?');" class="m-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-outline-danger py-0 px-2 small">Baja</button>
                            </form>
                        </div>
                    @endif

                    <a href="{{ route('productos.detalle', $prod->id) }}" class="text-decoration-none text-dark">
                        <div class="card border-0 shadow-sm tarjeta-producto" style="@if(Auth::check() && Auth::user()->rol === 'admin') border-top-left-radius: 0px !important; border-top-right-radius: 0px !important; @endif">
                            <img src="{{ asset('images/img-products/' . $prod->imagen) }}" class="card-img-top imagen-producto p-3" alt="{{ $prod->nombre }}">
                            <div class="card-body border-top">
                                <p class="text-truncate mb-1 texto-recortado" title="{{ $prod->nombre }}">{{ $prod->nombre }}</p>
                                <span class="text-muted text-decoration-line-through small">${{ number_format($prod->precio * 1.3, 0, ',', '.') }}</span>
                                <div class="d-flex align-items-center gap-2">
                                    <h4 class="mb-0">${{ number_format($prod->precio, 0, ',', '.') }}</h4>
                                    <span class="text-success small fw-bold">30% OFF</span>
                                </div>
                                <p class="text-primary small mb-1">6 cuotas <span class="fw-bold">sin interes</span> de ${{ number_format($prod->precio / 6, 0, ',', '.') }}</p>
                                <p class="text-success fw-bold small mb-0">Envío gratis</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p class="text-muted small">Próximamente más productos de Seguridad.</p>
            @endforelse

        </div>
    </div>

    <div class="container-fluid py-5 mb-5" style="background-color: #74ACDF;"> 
        <div class="container">
            <div class="d-flex gap-2 align-items-baseline mb-3">
                <h3 class="fw-light text-white"><span class="fw-bold">Especial Mundial: Televisores y Sonido</span></h3>
                <a href="/catalogo/categoria/4" class="text-white text-decoration-none fw-bold">Ver todas las ofertas</a>
            </div>

            <div class="d-flex justify-content-center pb-3 gap-3 flex-wrap">
                
                @forelse($televisores as $prod)
                    <div style="min-width: 240px; max-width: 240px;">
                        @if(Auth::check() && Auth::user()->rol === 'admin')
                            <div class="d-flex justify-content-end gap-1 p-2 bg-light border-bottom rounded-top">
                                <a href="{{ route('admin.productos.edit', $prod->id) }}" class="btn btn-xs btn-outline-primary py-0 px-2 small">Editar</a>
                                <form action="{{ route('admin.productos.destroy', $prod->id) }}" method="POST" onsubmit="return confirm('¿Seguro querés dar de baja este artículo?');" class="m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-outline-danger py-0 px-2 small">Baja</button>
                                </form>
                            </div>
                        @endif

                        <a href="{{ route('productos.detalle', $prod->id) }}" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow h-100" style="@if(Auth::check() && Auth::user()->rol === 'admin') border-top-left-radius: 0px !important; border-top-right-radius: 0px !important; @endif">
                                <img src="{{ asset('images/img-products/' . $prod->imagen) }}" class="card-img-top imagen-producto p-3" alt="{{ $prod->nombre }}">
                                <div class="card-body border-top">
                                    <p class="text-truncate mb-1 texto-recortado" title="{{ $prod->nombre }}">{{ $prod->nombre }}</p>
                                    <span class="text-muted text-decoration-line-through small">${{ number_format($prod->precio * 1.15, 0, ',', '.') }}</span>
                                    <div class="d-flex align-items-center gap-2">
                                        <h4 class="mb-0">${{ number_format($prod->precio, 0, ',', '.') }}</h4>
                                        <span class="text-success small fw-bold">15% OFF</span>
                                    </div>
                                    <p class="text-primary small mb-1">12 cuotas <span class="fw-bold">sin interés</span></p>
                                    <p class="text-success fw-bold small mb-0">Envío gratis <i class="ti ti-truck-delivery"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <p class="text-white small">Próximamente televisores disponibles.</p>
                @endforelse

            </div>
        </div>
    </div>

    <div class="container-fluid p-0 mb-5">
        <img src="{{ asset('images/img-descounts/img-messi.png') }}" class="img-fluid w-100 d-block img-promo-larga" alt="Promo Messi">
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