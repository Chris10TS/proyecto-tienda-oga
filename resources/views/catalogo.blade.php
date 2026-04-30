@extends('layouts.app')

@section('titulo', 'Catalogo-completo')

@section('contenido')

<div class="row mb-4">
    <div class="col-12">
        <h2 class="fw-bold titulo">Catalogo Completo</h2>
        <hr>
    </div>
</div>

<div class="row mb-5">
    
    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/televisor-50" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/television-43.png') }}" class="card-img-top imagen-producto" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Smart TV 50" 4K UHD Ultra Slim</h5>
                    <p class="card-text text-muted">Consegui tu clima ideal para el mundial</p>
                    <p class="fw-bold text-dark">$500.000</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/televisor-32" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/tv-32.png') }}" class="card-img-top imagen-producto" alt="Estufa">
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
                <img src="{{ asset('images/img-products/tv-55.png') }}" class="card-img-top imagen-producto" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Smart TV 55" 4K UHD Ultra Slim</h5>
                    <p class="card-text text-muted">Consegui tu clima ideal para el mundial</p>
                    <p class="fw-bold text-dark">$550.000</p>
                </div>
            </div>
        </a>
    </div>

</div>

<div class="row mb-5">
    
    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/camara-seguridade107" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/camaraseguridade107.png') }}" class="card-img-top imagen-producto" alt="Estufa">
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
                <img src="{{ asset('images/img-products/camara-luo-e126.png') }}" class="card-img-top imagen-producto" alt="Estufa">
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
                <img src="{{ asset('images/img-products/kit-camaras-e121.png') }}" class="card-img-top imagen-producto" alt="Estufa">
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
                <img src="{{ asset('images/img-products/kit-camaras-e122.png') }}" class="card-img-top imagen-producto" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Kit 8 camaras + DVR + Cables LUO e122</h5>
                    <p class="card-text text-muted">Kit 8 camaras</p>
                    <p class="fw-bold text-dark">$231.000</p>
                </div>
            </div>
        </a>
    </div>

</div>

<div class="row mb-5">
    
    <div class="col-md-4 col-sm-6 mb-3">
        <a href="/productos/estufa-bionica" class="text-decoration-none text-dark">
            <div class="card h-100">
                <img src="{{ asset('images/img-products/estufa-bionica.png') }}" class="card-img-top imagen-producto" alt="Estufa">
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
                <img src="{{ asset('images/img-products/estufa-infrarroja-lilliana.png') }}" class="card-img-top imagen-producto" alt="Estufa">
                <div class="card-body">
                    <h5 class="card-title">Estufa Infrarroja Lilliana</h5>
                    <p class="card-text text-muted"> Estufa Infrarroja Lilliana de primer nivel.</p>
                    <p class="fw-bold text-dark">$20.977</p>
                </div>
            </div>
        </a>
    </div>

</div>

<div class="row">
        <div class="col-md-4 mb-4">
            <a href="/productos/manta-river" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/img-products/manta-riverplate.png') }}" class="card-img-top imagen-producto p-3" alt="Manta River">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Manta Mágica River Plate</h5>
                        <p class="card-text text-muted small">Ideal para los fanáticos del Millonario.</p>
                        <h4 class="fw-bold">$9.121,8</h4>
                        <p class="text-success small fw-bold">Envío gratis</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-4">
            <a href="/productos/manta-magica" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/img-products/manta.png') }}" class="card-img-top imagen-producto p-3" alt="Manta Infantil">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Manta Mágica Infantil</h5>
                        <p class="card-text text-muted small">Brilla en la oscuridad, ideal para niños.</p>
                        <h4 class="fw-bold">$22.590</h4>
                        <p class="text-success small fw-bold">Envío gratis</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection