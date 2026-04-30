@extends('layouts.app')

@section('titulo', 'Calefaccion')

@section('contenido')
<div class="container my-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold">Calefacción</h1>
            <p class="text-muted">Encontrá la temperatura ideal para cada rincón de tu casa.</p>
            <hr>
        </div>
    </div>

    <div class="row">
        
        <div class="col-md-4 mb-4">
            <a href="/productos/estufa-bionica" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/img-products/estufa-bionica.png') }}" class="card-img-top imagen-producto p-3" alt="Manta River">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Estufa De Cuarzo Bionica Infrarroja</h5>
                        <h4 class="fw-bold">$25.799</h4>
                        <p class="text-success small fw-bold">Envío gratis</p>
                    </div>
                </div>
            </a>
        </div>

       
        <div class="col-md-4 mb-4">
            <a href="/productos/estufa-infrarroja" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/img-products/estufa-infrarroja-lilliana.png') }}" class="card-img-top imagen-producto p-3" alt="Manta Infantil">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Estufa infrarroja lilliana</h5>
                        <h4 class="fw-bold">$20.977</h4>
                        <p class="text-success small fw-bold">Envío gratis</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection