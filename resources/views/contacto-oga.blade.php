@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')

<div class="row mb-4">
    <div class="col-12">
        <h1 class="fw-bold">Información de Contacto</h1>
        <hr>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-4 mb-3">
        <div class="card h-100 text-center p-3">
            <div class="card-body">
                <h2>📞</h2>
                <h4 class="card-title">Teléfono / WhatsApp</h4>
                <p class="card-text">3794-055431</p>
                <a href="https://wa.me/543794055431" class="btn btn-success" target="_blank">Escribinos por WhatsApp</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100 text-center p-3">
            <div class="card-body">
                <h2>📧</h2>
                <h4 class="card-title">Email</h4>
                <p class="card-text">tiendaOGA@gmail.com</p>
                <a href="mailto:tiendaOGA@gmail.com" class="btn btn-dark">Envianos un email</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100 text-center p-3">
            <div class="card-body">
                <h2>🕐</h2>
                <h4 class="card-title">Horario de Atención</h4>
                <p class="card-text">Atendemos <strong>las 24 horas del día, los 7 días de la semana</strong>.</p>
                <p class="card-text text-success fw-bold">¡Siempre disponibles para vos!</p>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-6">
        <h2 class="mb-4">Envianos un mensaje</h2>
        <div class="card p-4">
            <form action="{{ url('/contacto-oga') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Tu nombre" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Tu email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" placeholder="Tu teléfono" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mensaje</label>
                    <textarea name="mensaje" class="form-control" rows="4" placeholder="¿En qué podemos ayudarte?"></textarea>
                </div>
                <button type="submit" class="btn btn-dark w-100">Enviar mensaje</button>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <h2 class="mb-4">Dónde Estamos</h2>
        <p><strong>Pasaje Los Ángeles 4431, Corrientes, Argentina</strong></p>
        <iframe
            src="https://www.google.com/maps?q=Pasaje+Los+Angeles+4431+Corrientes+Argentina&output=embed"
            width="100%"
            height="350"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>
</div>

@endsection