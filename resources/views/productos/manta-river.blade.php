@extends('layouts.app')

@section('titulo', 'Cámara de Seguridad LUO E107')

@section('contenido')

{{-- Sección principal del producto --}}
<div class="container mt-4">

    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/catalogo">Catálogo</a></li>
            <li class="breadcrumb-item"><a href="/catalogo-invierno">Invierno</a></li>
            <li class="breadcrumb-item active">Manta Luminosa River Plate</li>
        </ol>
    </nav>

    <div class="row mb-5">

        {{-- Columna izquierda: imágenes --}}
        <div class="col-md-5">
            <div class="card4 p-3 text-center">
                <img src="{{ asset('images/img-products/manta-riverplate.png') }}" class="img-fluid rounded" alt="Cámara LUO E107" style="max-height: 350px; object-fit: contain;">
            </div>
        </div>

        {{-- Columna central: info del producto --}}
        <div class="col-md-4">
            <span class="badge bg-success mb-2">MÁS VENDIDO</span>
            <h1 class="fs-4 fw-bold">Manta Luminosa Flannel River Plate 1 1/2 Plaza</h1>

            {{-- Estrellas --}}
            <div class="d-flex align-items-center gap-2 mb-3">
                <span class="text-warning fs-5">★★★★☆</span>
                <span class="text-muted">(16 opiniones)</span>
            </div>

            {{-- Precio --}}
            <p class="text-muted text-decoration-line-through mb-0">$15.000</p>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="fs-2 fw-bold">$9.121,8</span>
                <span class="badge bg-success fs-6">60% OFF</span>
            </div>

            {{-- Características rápidas --}}
            <ul class="list-unstyled mb-3">
                <li><i class="ti ti-check"></i>Ancho: 160 cm</li>
                <li><i class="ti ti-check"></i>Largo: 220 cm</li>
                <li><i class="ti ti-check"></i>Unidades por pack: 1</li>
                <li><i class="ti ti-check"></i>Tamaño del colchón: 1 1/2 plazas</li>
                <li><i class="ti ti-check"></i>Confeccionada en microfibra.</li>
                <li><i class="ti ti-check"></i>Diseño de la tela: River Plate.</li>
            </ul>

            {{-- Stock --}}
            <p class="text-success fw-bold"><i class="ti ti-circle-check"></i>Stock disponible</p>
        </div>

        {{-- Columna derecha: compra --}}
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
                <p>Frazada Flannel Magica Luminosa River Plate Oficial! Brilla por la noche y en la oscuridad. Debe tomar luz durante el dia. Medida 150x220 / Licencia Oficial</p>
                <h5 class="mt-3">Especificaciones técnicas</h5>
                <table class="table table-bordered">
                    <tbody>
                        <tr><td><strong>Modelo</strong></td><td>Manta Luminosa</td></tr>
                        <tr><td><strong>Diseño de la tela</strong></td><td>River Plate</td></tr>
                        <tr><td><strong>Tamaño del colchón</strong></td><td>1 1/2 plazas</td></tr>
                        <tr><td><strong>Linea</strong></td><td>Invierno</td></tr>
                        <tr><td><strong>Largo</strong></td><td>220 cm</td></tr>
                        <tr><td><strong>Ancho</strong></td><td>160 cm</td></tr>
                        <tr><td><strong>Composición</strong></td><td>100% poliéster</td></tr>
                        <tr><td><strong>Garantía</strong></td><td>10 días</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Opiniones --}}
    <div class="row mb-5">
        <div class="col-12">
            <div class="card4 p-4">
                <h3 class="fw-bold mb-4">Opiniones de clientes</h3>

                <div class="d-flex align-items-center gap-3 mb-4">
                    <span class="display-4 fw-bold">4.0</span>
                    <div>
                        <span class="text-warning fs-4">★★★★☆</span>
                        <p class="text-muted mb-0">16 opiniones</p>
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
                        <strong>Jose F.</strong>
                        <span class="text-muted small">Marzo 2026</span>
                    </div>
                    <span class="text-warning">★★★☆☆</span>
                    <p class="mt-1 mb-0">La manta perfecta para los dias de calor jajaja.</p>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection