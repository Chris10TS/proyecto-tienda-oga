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
        <a href="/productos/televisor-32" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/tv-32.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Estufa Bionica</h5>
                    <p class="card-text text-muted">Estufa bionica ideal para el invierno</p>
                    <p class="fw-bold text-dark">$23.000</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/televisor-43" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/television-43.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Estufa Infrarroja Lilliana</h5>
                    <p class="card-text text-muted"> Estufa Infrarroja Lilliana de primer nivel.</p>
                    <p class="fw-bold text-dark">$46.059</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/televisor-55" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/tv-55.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Estufa Infrarroja Lilliana</h5>
                    <p class="card-text text-muted"> Estufa Infrarroja Lilliana de primer nivel.</p>
                    <p class="fw-bold text-dark">$46.059</p>
                </div>
            </div>
        </a>
    </div>

</div>

@endsection