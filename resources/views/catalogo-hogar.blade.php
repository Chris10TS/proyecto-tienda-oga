@extends('layouts.app')

@section('titulo', 'Hogar - Mantas')

@section('contenido')
<div class="container my-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold">Hogar: Mantas Mágicas</h1>
            <p class="text-muted">Encontrá el confort que necesitás para tu casa.</p>
            <hr>
        </div>
    </div>

    <div class="row">
        {{-- Manta River --}}
        <div class="col-md-4 mb-4">
            <a href="/productos/manta-river" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/img-products/manta-riverplate.png') }}" class="card-img-top p-3" alt="Manta River">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Manta Mágica River Plate</h5>
                        <p class="card-text text-muted small">Ideal para los fanáticos del Millonario.</p>
                        <h4 class="fw-bold">$14.999</h4>
                        <p class="text-success small fw-bold">Envío gratis</p>
                    </div>
                </div>
            </a>
        </div>

        {{-- Manta Infantil --}}
        <div class="col-md-4 mb-4">
            <a href="/productos/manta-magica" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/img-products/manta.png') }}" class="card-img-top p-3" alt="Manta Infantil">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Manta Mágica Infantil</h5>
                        <p class="card-text text-muted small">Brilla en la oscuridad, ideal para niños.</p>
                        <h4 class="fw-bold">$14.999</h4>
                        <p class="text-success small fw-bold">Envío gratis</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection