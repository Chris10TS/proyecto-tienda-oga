<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda OGA - Inicio</title>
    <link rel="icon" type="image/png" href="{{ asset('images/img-products/logos.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/img-products/logos.png') }}">    
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm sticky-top" style="background-color: #F5793A;">
    <div class="container">
        
        {{-- Logo --}}
        <a class="navbar-brand me-auto" href="/inicio">
            <img src="{{ asset('images/img-products/logos.png') }}" alt="Logo Oga" height="40">
        </a>

        {{-- Botón Lupa (para abrir el buscador en móvil) --}}
        <button class="navbar-toggler border-0 p-0 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido">
            <i class="ti ti-search text-white fs-1"></i>
        </button>

        {{-- CARRITO MÓVIL: Se oculta en pantallas grandes (d-lg-none) --}}
        <a href="/carrito" class="btn btn-link p-0 position-relative text-white d-lg-none">
            <img src="/images/carrito.png" alt="carrito" style="height: 30px;">
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span>
        </a>

        <div class="collapse navbar-collapse" id="navbarContenido">
            {{-- Buscador --}}
            <form class="d-flex flex-grow-1 mx-lg-4 my-3 my-lg-0">
                <div class="input-group buscador w-100">
                    <input class="form-control" type="search" placeholder="Buscar productos..." aria-label="Buscar">
                    <button class="btn btn-white bg-white border-start-0" type="submit" style="border: 1px solid #ced4da;">
                        <i class="ti ti-search text-muted"></i>
                    </button>
                </div>
            </form>

            {{-- CARRITO PC: Solo se ve en pantallas grandes (d-none d-lg-block) --}}
            <div class="ms-lg-3 d-none d-lg-block">
                <a href="/carrito" class="position-relative">
                    <img src="/images/carrito.png" class="icono-carrito" alt="carrito" style="height: 35px;">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span>
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- BARRA DE CATEGORÍAS (Ahora visible en móviles también) --}}
<div class="bg-white border-bottom">
    <div class="container">
        <div class="d-flex align-items-center py-2">
            
            <div class="dropdown position-static position-lg-relative">
                <button class="btn btn-link text-dark text-decoration-none fw-bold d-flex align-items-center gap-2 p-0 dropdown-toggle shadow-none" 
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-menu-2 fs-4"></i>
                    <span class="small fw-bold">CATEGORÍAS</span>
                </button>

                <ul class="dropdown-menu shadow border-0 py-3 w-100-mobile">
                    <li><h6 class="dropdown-header d-lg-none">CATEGORÍAS</h6></li>
                    <li><a class="dropdown-item py-2" href="/catalogo-seguridad">Seguridad</a></li>
                    <li><a class="dropdown-item py-2" href="/catalogo-televisores">Televisores</a></li>
                    <li><a class="dropdown-item py-2" href="/catalogo-invierno">Calefacción</a></li>
                    <li><a class="dropdown-item py-2" href="/catalogo-hogar">Hogar</a></li>
                    
                    <li><hr class="dropdown-divider d-lg-none"></li>
                    <li><h6 class="dropdown-header d-lg-none">MENÚ</h6></li>
                    <li><a class="dropdown-item py-2 d-lg-none" href="/ofertas">Ofertas</a></li>
                    <li><a class="dropdown-item py-2 d-lg-none" href="/consultas">Consultas</a></li>
                    <li><a class="dropdown-item py-2 d-lg-none" href="/contacto-oga">Contactos</a></li>
                    <li><a class="dropdown-item py-2 d-lg-none" href="/comercializacion">Comercialización</a></li>
                </ul>
            </div>

            <div class="d-none d-lg-flex gap-4 ms-4">
                <a href="/ofertas" class="text-decoration-none text-secondary small fw-bold">OFERTAS</a>
                <a href="/consultas" class="text-decoration-none text-secondary small fw-bold">CONSULTAS</a>
                <a href="/contacto-oga" class="text-decoration-none text-secondary small fw-bold">CONTACTOS</a>
                <a href="/comercializacion" class="text-decoration-none text-secondary small fw-bold">COMERCIALIZACIÓN</a>
            </div>

        </div>
    </div>
</div>

<main class="py-0">
    @yield('contenido')
</main>

<footer class="bg-light border-top mt-5 pt-4 pb-3 text-muted">
    <div class="container">
        <div class="text-center mb-4">
            <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#infoExtra" aria-expanded="false">
                Más información <i class="ti ti-chevron-down"></i>
            </button>
        </div>

        <div class="collapse mb-4" id="infoExtra">
            <div class="row g-4 text-center text-md-start">
                <div class="col-md-3">
                    <h6 class="text-dark fw-bold">Acerca de</h6>
                    <ul class="list-unstyled small">
                        <li><a href="/quienes-somos" class="text-muted text-decoration-none">Quiénes Somos</a></li>
                        <li><a href="/terminos" class="text-muted text-decoration-none">Términos y Condiciones</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="text-dark fw-bold">Ayuda</h6>
                    <ul class="list-unstyled small">
                        <li><a href="/comercializacion" class="text-muted text-decoration-none">Cómo comprar</a></li>
                        <li><a href="/contacto-oga" class="text-muted text-decoration-none">Centro de seguridad</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="text-dark fw-bold">Redes sociales</h6>
                    <ul class="list-unstyled small">
                        <li><a href="https://www.facebook.com/marketplace/profile/61565914446195/?ref=permalink&mibextid=6ojiHh" class="text-muted text-decoration-none"><i class="ti ti-brand-facebook"></i> Facebook</a></li>
                        <li><a href="https://www.instagram.com/tiendaogaarg?igsh=MWlncjZlYTdvcXRxaw%3D%3D&utm_source=qr" class="text-muted text-decoration-none"><i class="ti ti-brand-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="text-dark fw-bold">Contacto</h6>
                    <ul class="list-unstyled small">
                        <li><i class="ti ti-map-pin"></i> Corrientes, Argentina</li>
                        <li><i class="ti ti-mail"></i> tiendaOGA@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>

        <hr>

        <div class="row align-items-center small">
            <div class="col-md-8">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item pe-2 ps-2 border-start border-end"><a href="/terminos" class="text-muted text-decoration-none">Términos y condiciones</a></li>
                    <li class="list-inline-item"><a href="/consultas" class="text-muted text-decoration-none">Ayuda</a></li>
                </ul>
                <p class="mb-0">Copyright © 2020-2026 Tienda OGA S.R.L.</p>
                <p class="text-black-50" style="font-size: 0.75rem;">Pasaje Los Ángeles 4431, Piso 2, CP 3400, Corrientes, Arg.</p>
            </div>
            <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                <h5 class="fw-bold text-dark mb-0">Tienda OGA</h5>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<div class="offcanvas offcanvas-start" tabindex="-1" id="menuGlobal" aria-labelledby="menuGlobalLabel" style="width: 100vw;">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title fw-bold" id="menuGlobalLabel">TIENDA OGA</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
    <ul class="list-group list-group-flush">
      <li class="list-group-item bg-light small fw-bold text-muted">CATEGORÍAS</li>
      <a href="/catalogo-seguridad" class="list-group-item list-group-item-action py-3">Seguridad</a>
      <a href="/catalogo-televisores" class="list-group-item list-group-item-action py-3">Televisores</a>
      <a href="/catalogo-invierno" class="list-group-item list-group-item-action py-3">Calefacción</a>
      <a href="/catalogo-hogar" class="list-group-item list-group-item-action py-3">Hogar</a>

      <li class="list-group-item bg-light small fw-bold text-muted d-lg-none">MENÚ</li>
      <a href="/ofertas" class="list-group-item list-group-item-action py-3 d-lg-none">Ofertas</a>
      <a href="/consultas" class="list-group-item list-group-item-action py-3 d-lg-none">Consultas</a>
      <a href="/contacto-oga" class="list-group-item list-group-item-action py-3 d-lg-none">Contactos</a>
      <a href="/comercializacion" class="list-group-item list-group-item-action py-3 d-lg-none">Comercialización</a>
    </ul>
  </div>
</div>

</body>
</html>