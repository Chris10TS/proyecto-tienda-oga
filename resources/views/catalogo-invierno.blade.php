@extends('layouts.app')

@section('titulo', 'Productos de Invierno')

@section('contenido')

<div class="row mb-4">
    <div class="col-12">
        <h1 class="fw-bold">Productos de invierno</h1>
        <hr>
    </div>
</div>

<div class="row mb-5">
    
    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/estufa-bionica" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/estufa-bionica.png') }}" class="card-img-top" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Estufa De Cuarzo Bionica Infrarroja</h5>
                    <p class="card-text text-muted">Estufa bionica ideal para el invierno</p>
                    <p class="fw-bold text-dark">$25.799</p>
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
                    <p class="fw-bold text-dark">$20.977</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/manta-river" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/manta-riverplate.png') }}" class="card-img-top" alt="Manta">
                <div class="card-body">
                    <h5 class="card-title">Manta Luminosa Flannel River Plate 1 1/2 Plaza</h5>
                    <p class="card-text text-muted"> Frazada Flannel Magica Luminosa River Plate Oficial! Brilla por la noche y en la oscuridad.</p>
                    <p class="fw-bold text-dark">$9.121,8</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/manta-magica" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/manta.png') }}" class="card-img-top" alt="Manta">
                <div class="card-body">
                    <h5 class="card-title">Manta Infantil 2 plazas Astronauta Efecto Luminoso Polar Soft</h5>
                    <p class="card-text text-muted">FRAZADA MÁGICA LUMINOSA GIGANTE - 2 PLAZAS SOFT  </p>
                    <p class="fw-bold text-dark">$22.590</p>
                </div>
            </div>
        </a>
    </div>

</div>

@endsection