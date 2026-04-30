@extends('layouts.app')

@section('titulo', 'Kit 4 camaras')

@section('contenido')

<div class="container mt-4">

    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/catalogo">Catálogo</a></li>
            <li class="breadcrumb-item"><a href="/catalogo-seguridad">Seguridad</a></li>
            <li class="breadcrumb-item active">Kit 4 camaras</li>
        </ol>
    </nav>

    <div class="row mb-5">

        <div class="col-md-5">
            <div class="card4 p-3 text-center">
                <img src="{{ asset('images/img-products/kit-camaras-e121.png') }}" class="img-fluid rounded imagen-contenida" alt="Cámara LUO E107">
            </div>
        </div>

        <div class="col-md-4">
            <span class="badge bg-success mb-2">MÁS VENDIDO</span>
            <h1 class="fs-4 fw-bold">Kit 4 camaras + DVR + Cables LUO e121</h1>

            <div class="d-flex align-items-center gap-2 mb-3">
                <span class="text-warning fs-5">★★★★☆</span>
                <span class="text-muted">(148 opiniones)</span>
            </div>

            <p class="text-muted text-decoration-line-through mb-0">$200.000</p>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="fs-2 fw-bold">$154.000</span>
                <span class="badge bg-success fs-6">22% OFF</span>
            </div>
            <p class="text-muted mb-3">6 cuotas de $25.666 sin interés</p>

            <ul class="list-unstyled mb-3">
                <li><i class="ti ti-check"></i>Resolucion: HD 4K.</li>
                <li><i class="ti ti-check"></i>Marca: LUO.</li>
                <li><i class="ti ti-check"></i>4 Camaras + DVR</li>
            </ul>

            <p class="text-success fw-bold"><i class="ti ti-circle-check"></i>Stock disponible</p>
        </div>

        <div class="col-md-3">
            <div class="card p-3">
                <p class="text-success fw-bold mb-1"><i class="ti ti-truck-delivery"></i>Envío gratis en Corrientes</p>
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
            <div class="cardP p-4">
                <h3 class="fw-bold mb-3">Descripción del producto</h3>
                <p>La <strong>Cámara de Seguridad WiFi LUO E121</strong> es la solución ideal para proteger tu hogar o negocio. Con resolución Full HD 1080p y visión nocturna de hasta 20 metros, podés monitorear todo desde tu celular en tiempo real.</p>
                <h5 class="mt-3">Especificaciones técnicas</h5>
                <table class="table table-bordered">
                    <tbody>
                        <tr><td><strong>Marca</strong></td><td>LUO</td></tr>
                        <tr><td><strong>Modelo</strong></td><td>E121</td></tr>
                        <tr><td><strong>Resolución</strong></td><td>1080p Full HD</td></tr>
                        <tr><td><strong>Conectividad</strong></td><td>WiFi 2.4GHz</td></tr>
                        <tr><td><strong>Visión nocturna</strong></td><td>Hasta 20 metros</td></tr>
                        <tr><td><strong>Resistencia</strong></td><td>IP66 (resistente al agua)</td></tr>
                        <tr><td><strong>Alimentación</strong></td><td>12V DC</td></tr>
                        <tr><td><strong>Garantía</strong></td><td>6 meses</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <div class="card4 p-4">
                <h3 class="fw-bold mb-4">Opiniones de clientes</h3>

                <div class="d-flex align-items-center gap-3 mb-4">
                    <span class="display-4 fw-bold">4.0</span>
                    <div>
                        <span class="text-warning fs-4">★★★★☆</span>
                        <p class="text-muted mb-0">128 opiniones</p>
                    </div>
                </div>

                <div class="border-bottom pb-3 mb-3">
                    <div class="d-flex justify-content-between">
                        <strong>María G.</strong>
                        <span class="text-muted small">Enero 2026</span>
                    </div>
                    <span class="text-warning">★★★★★</span>
                    <p class="mt-1 mb-0">Excelente Calidad.</p>
                </div>

                <div class="border-bottom pb-3 mb-3">
                    <div class="d-flex justify-content-between">
                        <strong>Carlos R.</strong>
                        <span class="text-muted small">Febrero 2026</span>
                    </div>
                    <span class="text-warning">★★★★☆</span>
                    <p class="mt-1 mb-0">Muy buena relación precio-calidad.</p>
                </div>


                <div class="border-bottom pb-3 mb-3">
                    <div class="d-flex justify-content-between">
                        <strong>Laura M.</strong>
                        <span class="text-muted small">Marzo 2026</span>
                    </div>
                    <span class="text-warning">★★★☆☆</span>
                    <p class="mt-1 mb-0">Buena Estufa, me mantiene caliente.</p>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection