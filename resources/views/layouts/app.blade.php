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


<div class="bg-dark py-1">
    <div class="container d-flex justify-content-center gap-4">
        <a class="nav-link text-white menu-link" href="/inicio">Inicio</a>
        <a class="nav-link text-white menu-link" href="/quienes-somos">Quiénes Somos</a>
        <a class="nav-link text-white menu-link" href="/catalogo">Catálogo</a>
        <a class="nav-link text-white menu-link" href="/comercializacion">Comercialización</a>
        <a class="nav-link text-white menu-link" href="/consultas">Consultas</a>
        <a class="nav-link text-white menu-link" href="/contacto-oga">Contacto</a>
        <a class="nav-link text-white menu-link" href="/terminos">Términos y Usos</a>
    </div>
</div>


<nav class="navbar navbar-light border-bottom shadow-sm" style="background-color: #F5793A;">
    <div class="container">

        
        <a class="navbar-brand" href="/inicio">
        <img src="{{ asset('images/img-products/logos.png') }}" alt="Logo Oga" height="70">
        </a>

       
        <form class="d-flex flex-grow-1 mx-4">
            <div class="input-group buscador">
                <input class="form-control" type="search" placeholder="Buscar productos, marcas y más..." aria-label="Buscar">
                <button type="submit">
                    <i class="ti ti-search"></i>
                </button>
            </div>
        </form>

        
        <a href="#" class="btn btn-outline-dark position-relative">
            <img src="/images/carrito.png" class="icono-carrito" alt="carrito">
    
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                0
            </span>
        </a>        

    </div>
</nav>

<main class="py-0">
    @yield('contenido')
</main>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">© 2026 Tienda OGA - Todos los derechos reservados</p>
</footer>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>