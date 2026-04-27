@extends('layouts.app')

@section('titulo', 'Televisores')

@section('contenido')

<div class="row mb-4">
    <div class="col-12">
        <h1 class="fw-bold">Televisores</h1>
        <hr>
    </div>
</div>

<div class="row mb-5">
    
    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/televisor-55" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/television-43.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Smart TV 50" 4K UHD Ultra Slim</h5>
                    <p class="card-text text-muted">Consegui tu clima ideal para el mundial</p>
                    <p class="fw-bold text-dark">$500.000</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/televisor-43" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/tv-32.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Smart TV 32" 4K UHD Ultra Slim</h5>
                    <p class="card-text text-muted">Consegui tu clima ideal para el mundial</p>
                    <p class="fw-bold text-dark">$380.000</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/televisor-55" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/tv-55.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Smart TV 55" 4K UHD Ultra Slim</h5>
                    <p class="card-text text-muted">Consegui tu clima ideal para el mundial</p>
                    <p class="fw-bold text-dark">$550.000</p>
                </div>
            </div>
        </a>
    </div>

</div>

@endsection