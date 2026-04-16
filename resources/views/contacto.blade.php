<!DOCTYPE html>
<html>
<head>
    <title>Contacto</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Mi Sitio</a>
        <div class="navbar-nav">
            <a class="nav-link" href="/">Inicio</a>
            <a class="nav-link" href="/sobre-mi">Sobre mí</a>
            <a class="nav-link active" href="/contacto">Contacto</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h2>Contacto</h2>
            <form action="{{ url('/contacto') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Ingrese su email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mensaje</label>
                    <textarea name="mensaje" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Enviar mensaje</button>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>