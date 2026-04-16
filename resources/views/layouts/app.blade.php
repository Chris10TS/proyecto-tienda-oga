<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda OGA - @yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/inicio">Tienda OGA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-link" href="/inicio">Inicio</a>
                <a class="nav-link" href="/quienes-somos">Quiénes Somos</a>
                <a class="nav-link" href="/catalogo">Catálogo</a>
                <a class="nav-link" href="/comercializacion">Comercialización</a>
                <a class="nav-link" href="/consultas">Consultas</a>
                <a class="nav-link" href="/contacto-oga">Contacto</a>
                <a class="nav-link" href="/terminos">Términos y Usos</a>
            </div>
        </div>
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