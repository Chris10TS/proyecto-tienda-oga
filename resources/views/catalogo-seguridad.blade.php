@extends('layouts.app')

@section('titulo', 'Productos de Seguridad')

@section('contenido')

<div class="row mb-4">
    <div class="col-12">
        <h1 class="fw-bold">Productos de seguridad</h1>
        <hr>
    </div>
</div>

<div class="row mb-5">
    
    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/camara-seguridade107" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/camaraseguridade107.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Cámara de Seguridad WiFi LUO E107</h5>
                    <p class="card-text text-muted">Camara doble visor</p>
                    <p class="fw-bold text-dark">$50.000</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/camara-seguridade126" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/camara-luo-e126.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Cámara de Seguridad WiFi LUO E126</h5>
                    <p class="card-text text-muted">Camara triple visor</p>
                    <p class="fw-bold text-dark">$60.000</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/camara-e121" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/kit-camaras-e121.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Kit 4 camaras + DVR + Cables LUO e121</h5>
                    <p class="card-text text-muted">Kit 4 camaras</p>
                    <p class="fw-bold text-dark">$154.000</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/camara-e122" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/kit-camaras-e122.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Kit 8 camaras + DVR + Cables LUO e122</h5>
                    <p class="card-text text-muted">Kit 8 camaras</p>
                    <p class="fw-bold text-dark">$231.000</p>
                </div>
            </div>
        </a>
    </div>

</div>

@endsection