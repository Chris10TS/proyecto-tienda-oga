@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

<div class="p-5 mb-4 bg-dark text-white rounded-3">
    <div class="container py-3">
        <h1 class="display-5 fw-bold">Bienvenido a Tienda OGA</h1>
        <p class="col-md-8 fs-4">Tu tienda multirrubro de confianza. Encontrá todo lo que necesitás en un solo lugar.</p>
        <a href="/catalogo" class="btn btn-warning btn-lg">Ver Catálogo</a>
    </div>
</div>

<h2 class="mb-4">Nuestras Categorías</h2>
<div class="row">


    <div class="col-md-4 mb-3">
        <a href="/catalogo" class="text-decoration-none text-dark">
        <div class="card h-100">
            <img src="{{ asset('images/tecnologia.png') }}" class="card-img-top" alt="tecnología">
            <div class="card-body">
                <h5 class="card-title">Tecnología</h5>
            </div>
        </div>
        </a>
    </div>


    <div class="col-md-4 mb-3">
        <a href="/catalogo" class="text-decoration-none text-dark">
        <div class="card h-100">
            <img src="{{ asset('images/seguridad.png') }}" class="card-img-top" alt="seguridad">
            <div class="card-body">
                <h5 class="card-title">Seguridad</h5>
            </div>
        </div>
        </a>
    </div>


    <div class="col-md-4 mb-3">
        <a href="/catalogo" class="text-decoration-none text-dark">
        <div class="card h-100">
            <img src="{{ asset('images/hogar.png') }}" class="card-img-top" alt="hogar">
            <div class="card-body">
                <h5 class="card-title">Hogar</h5>
            </div>
        </div>
        </a>
    </div>


</div>

@endsection