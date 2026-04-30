@extends('layouts.app')

@section('titulo', 'Smart TV 50" 4K UHD Ultra Slim')

@section('contenido')

<div class="container mt-4">

    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/catalogo">Catálogo</a></li>
            <li class="breadcrumb-item"><a href="/catalogo-televisores">Televisores</a></li>
            <li class="breadcrumb-item active">Smart TV 50" 4K UHD Ultra Slim</li>
        </ol>
    </nav>

    <div class="row mb-5">

        <div class="col-md-5">
            <div class="card4 p-3 text-center">
                <img src="{{ asset('images/img-products/television-43.png') }}" class="img-fluid rounded imagen-contenida" alt="Smart TV 50 4K UHD Ultra Slim">
            </div>
        </div>

        <div class="col-md-4">
            <span class="badge bg-success mb-2">MÁS VENDIDO</span>
            <h1 class="fs-4 fw-bold">Smart TV 50" 4K UHD Ultra Slim</h1>

            <div class="d-flex align-items-center gap-2 mb-3">
                <span class="text-warning fs-5">★★★★☆</span>
                <span class="text-muted">(148 opiniones)</span>
            </div>

            <p class="text-muted text-decoration-line-through mb-0">$575.000</p>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="fs-2 fw-bold">$500.000</span>
                <span class="badge bg-success fs-6">15% OFF</span>
            </div>

            <ul class="list-unstyled mb-3">
                <li><i class="ti ti-check"></i>Resolucion: 4K HD.</li>
                <li><i class="ti ti-check"></i>Smart</li>
                <li><i class="ti ti-check"></i>Pack de futbol incluido</li>
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
                <p>La <strong>Television Samsung</strong> es la solución ideal para el MUNDIAL.</p>
                <h5 class="mt-3">Especificaciones técnicas</h5>
                <table class="table table-bordered">
                    <tbody>
                        <tr><td><strong>Marca</strong></td><td>Samsung</td></tr>
                        <tr><td><strong>Sistema operativo</strong></td><td>Android</td></tr>
                        <tr><td><strong>Tipo de pantalla</strong></td><td>QLED</td></tr>
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
                    <p class="mt-1 mb-0">Buena.</p>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection