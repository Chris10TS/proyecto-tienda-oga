@extends('layouts.app')

@section('titulo', 'Manta Infantil')

@section('contenido')

<div class="container mt-4">

    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/catalogo">Catálogo</a></li>
            <li class="breadcrumb-item"><a href="/catalogo-invierno">Invierno</a></li>
            <li class="breadcrumb-item active">Manta Infantil</li>
        </ol>
    </nav>

    <div class="row mb-5">

        <div class="col-md-5">
            <div class="card4 p-3 text-center">
                <img src="{{ asset('images/img-products/manta.png') }}" class="img-fluid rounded" alt="Cámara LUO E107" style="max-height: 350px; object-fit: contain;">
            </div>
        </div>

        <div class="col-md-4">
            <span class="badge bg-success mb-2">MÁS VENDIDO</span>
            <h1 class="fs-4 fw-bold">Manta Infantil 2 plazas Astronauta Efecto Luminoso Polar Soft </h1>

            <div class="d-flex align-items-center gap-2 mb-3">
                <span class="text-warning fs-5">★★★★☆</span>
                <span class="text-muted">(18 opiniones)</span>
            </div>

            <p class="text-muted text-decoration-line-through mb-0">$25.100</p>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="fs-2 fw-bold">$22.590</span>
                <span class="badge bg-success fs-6">10% OFF</span>
            </div>

            <ul class="list-unstyled mb-3">
                <li><i class="ti ti-check"></i>Ancho: 190 cm</li>
                <li><i class="ti ti-check"></i>Largo: 210 cm</li>
                <li><i class="ti ti-check"></i>Peso: 700 g</li>
                <li><i class="ti ti-check"></i>Unidades por pack: 1</li>
                <li><i class="ti ti-check"></i>Tamaño del colchón: 2 plazas</li>
                <li><i class="ti ti-check"></i>Confeccionada en polar, soft.</li>
                <li><i class="ti ti-check"></i>Cálida y confortable.</li>
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
                    <p class="small mb-1"> Garantía 10 dias</p>
                    <p class="small mb-0"> Compra segura</p>
                </div>
            </div>
        </div>

    </div>


    <div class="row mb-5">
        <div class="col-12">
            <div class="cardP p-4">
                <h3 class="fw-bold mb-3">Descripción del producto</h3>
                <p>FRAZADA MÁGICA LUMINOSA GIGANTE - 2 PLAZAS SOFT Transformá el momento de ir a dormir en una aventura llena de luz. Esta frazada gigante de 2 plazas está diseñada para convertir la habitación en un espacio de juegos y sueños gracias a su tejido especial que brilla en la oscuridad.</p>
                <h5 class="mt-3">Especificaciones técnicas</h5>
                <table class="table table-bordered">
                    <tbody>
                        <tr><td><strong>Modelo</strong></td><td>Flannel Frazada Manta Luminosa</td></tr>
                        <tr><td><strong>Diseño de la tela</strong></td><td>Liso</td></tr>
                        <tr><td><strong>Tamaño del colchón</strong></td><td>2 plazas</td></tr>
                        <tr><td><strong>Color</strong></td><td>Azul</td></tr>
                        <tr><td><strong>Largo</strong></td><td>190 cm</td></tr>
                        <tr><td><strong>Ancho</strong></td><td>210 cm</td></tr>
                        <tr><td><strong>Peso</strong></td><td>700 g</td></tr>
                        <tr><td><strong>Garantía</strong></td><td>10 días</td></tr>
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
                        <p class="text-muted mb-0">18 opiniones</p>
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
                    <p class="mt-1 mb-0">Una compra perfecta para el frio de mi ciudad, me encanto.</p>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection