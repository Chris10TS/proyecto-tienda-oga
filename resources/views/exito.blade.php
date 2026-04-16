@extends('layouts.app')

@section('titulo', 'Detalle del Producto')

@section('contenido')

<div class="container mt-4">
    <div class="card p-4">
        <div class="row">
            <div class="col-md-5 text-center">
                <img src="camaraseguridade107.jpg"  alt="Camara Seguridad E107">
            </div>

            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <small class="text-muted">Nuevo | +1000 vendidos</small>
                </nav>
                <h1 class="h4 fw-bold">Camara Seguridad LUO E107</h1>
                
                <div class="d-flex align-items-center mb-2">
                    <span class="text-primary me-2">4.9</span>
                    <span class="text-warning">★★★★★</span>
                    <small class="text-muted ms-1">(4790)</small>
                </div>

                <h2 class="display-6 fw-normal">$50.000,49</h2>
                <a href="#" class="d-block mb-3">Ver los medios de pago</a>

                <div class="mb-3">
                    <p class="mb-1">Color: <strong>Negro</strong></p>
                    <img src="color-selector.jpg" class="border rounded p-1" style="width: 40px;" alt="Gris">
                </div>

                <div class="mt-4">
                    <h6>Lo que tenés que saber de este producto</h6>
                    <ul>
                        <li>Funciona con WIFI.</li>
                        <li>Apta para exterior e interior.</li>
                        <li>Compatible con redes 5G.</li>
                        <li>Cuenta con doble visor, una estatica y una movil.</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2">
                <div class="border rounded p-3 bg-light">
                    <div class="mb-3">
                        <label class="form-label">Cantidad: 100 unidades</label>
                    </div>

                    <button class="btn btn-primary w-100 mb-2">Comprar ahora</button>
                    <button class="btn btn-outline-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection