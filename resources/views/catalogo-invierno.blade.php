@extends('layouts.app')

@section('titulo', 'Catálogo')

@section('contenido')

<div class="row mb-4">
    <div class="col-12">
        <h1 class="fw-bold">Catálogo de Productos</h1>
        <hr>
    </div>
</div>

<div class="row mb-5">
    
    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/estufa-bionica" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/estufa-bionica.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Estufa Bionica</h5>
                    <p class="card-text text-muted">Estufa bionica ideal para el invierno</p>
                    <p class="fw-bold text-dark">$23.000</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/estufa-infrarroja" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/estufa-infrarroja-lilliana.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Estufa Infrarroja Lilliana</h5>
                    <p class="card-text text-muted"> Estufa Infrarroja Lilliana de primer nivel.</p>
                    <p class="fw-bold text-dark">$46.059</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/manta-river" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/manta-riverplate.png') }}" class="card-img-top" alt="Manta">
                <div class="card-body">
                    <h5 class="card-title">Manta River Plate</h5>
                    <p class="card-text text-muted"> Manta de River ideal para el frío.</p>
                    <p class="fw-bold text-dark">$14.999</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/manta-magica" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/manta-infantil.png') }}" class="card-img-top" alt="Manta">
                <div class="card-body">
                    <h5 class="card-title">Manta Magica Luminosa Infantil</h5>
                    <p class="card-text text-muted"> Manta de River ideal para el frío.</p>
                    <p class="fw-bold text-dark">$14.999</p>
                </div>
            </div>
        </a>
    </div>

</div>

@endsection