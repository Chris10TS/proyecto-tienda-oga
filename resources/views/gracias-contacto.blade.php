@extends('layouts.app')

@section('titulo', 'Gracias por tu contacto')

@section('contenido')

<div class="container my-5 shadow-sm p-5 bg-white rounded text-center" style="max-width: 600px;">
    <div class="mb-4">
        <i class="ti ti-circle-check text-success" style="font-size: 5rem;"></i>
    </div>

    <h1 class="fw-bold mb-3">¡Muchas gracias, {{ $nombre }}!</h1>
    
    <p class="fs-5 text-muted">
        Hemos recibido tu consulta correctamente. En breve te enviaremos una respuesta al correo: 
        <br>
        <span class="fw-bold text-dark">{{ $email }}</span>
    </p>

    <hr class="my-4">

    <p class="small text-secondary mb-4">
        Tu número de gestión es: <span class="fw-bold">#{{ rand(1000, 9999) }}</span>
    </p>

    <div class="d-grid gap-2 d-md-block">
        <a href="/inicio" class="btn btn-primary btn-lg px-4 me-md-2">Volver al Inicio</a>
        <a href="/catalogo" class="btn btn-outline-secondary btn-lg px-4">Ver Ofertas</a>
    </div>
</div>

@endsection 