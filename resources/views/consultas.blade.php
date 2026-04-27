@extends('layouts.app')

@section('titulo', 'Consultas')

@section('contenido')

<div class="container my-5">
    {{-- Título de la página --}}
    <div class="row mb-4 text-center">
        <div class="col-12">
            <h1 class="fw-bold">Realizá tu Consulta</h1>
            <p class="text-muted">Completá el formulario y un asesor de Tienda OGA se pondrá en contacto con vos a la brevedad.</p>
            <hr>
        </div>
    </div>

    {{-- Bloque Blanco Principal --}}
    <div class="bg-white p-4 p-md-5 rounded shadow-sm">
        <div class="row">
            
            {{-- Formulario Arriba (Ocupa todo el ancho) --}}
            <div class="col-12 mb-5">
                <form action="{{ url('/contacto-oga') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold small">Nombre Completo</label>
                            <input type="text" name="nombre" class="form-control bg-light border-0" placeholder="Ej: Juan Pérez" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold small">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control bg-light border-0" placeholder="nombre@ejemplo.com" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">Teléfono / WhatsApp</label>
                        <input type="text" name="telefono" class="form-control bg-light border-0" placeholder="Ej: 3794123456" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">¿En qué podemos ayudarte?</label>
                        <textarea name="mensaje" class="form-control bg-light border-0" rows="4" placeholder="Escribí tu consulta aquí..." required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5 py-2 fw-bold shadow-sm">
                            <i class="ti ti-send me-2"></i>Enviar Consulta
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection