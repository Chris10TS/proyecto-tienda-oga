<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda OGA - Inicio</title>
    <link rel="icon" type="image/png" href="{{ asset('images/img-products/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">    
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
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


<nav class="navbar navbar-light bg-white border-bottom shadow-sm">
    <div class="container">

        
        <a class="navbar-brand" href="/inicio">
        <img src="{{ asset('images/img-products/logo.png') }}" alt="Logo Oga" height="40">
        </a>

       
        <form class="d-flex flex-grow-1 mx-4">
            <input class="form-control me-2" type="search" placeholder="Buscar productos, marcas y más...">
            <button class="btn btn-dark" type="submit">Buscar</button>
        </form>

        
        <a href="#" class="btn btn-outline-dark position-relative">
            <i class="ti ti-shopping-cart fs-5"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                0
            </span>
        </a>

    </div>
</nav>

<main class="container mt-4">
    @yield('contenido')
</main>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">© 2026 Tienda OGA - Todos los derechos reservados</p>
</footer>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>