@extends('layouts.app')

@section('titulo', 'Consultas')

@section('contenido')

<div class="container my-5">
    <div class="row mb-4 text-center">
        <div class="col-12">
            <h1 class="fw-bold">Realizá tu Consulta</h1>
            <p class="text-muted">Completá el formulario y un asesor de Tienda OGA se pondrá en contacto con vos a la brevedad.</p>
            <hr>
        </div>
    </div>

    
    <div class="bg-white p-4 p-md-5 rounded shadow-sm border border-dark">
        <div class="row">
            

            <div class="col-12 mb-5">
                <form action="#" method="GET">                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold small">Nombre Completo</label>
                            <input type="text" name="nombre" class="form-control bg-light" placeholder="Ej: Lionel Messi" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold small">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control bg-light" placeholder="nombre@ejemplo.com" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">Teléfono / WhatsApp</label>
                        <input type="number" name="telefono" class="form-control bg-light" placeholder="Ej: 3794123456" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">¿En qué podemos ayudarte?</label>
                        <textarea name="mensaje" class="form-control bg-light" rows="4" placeholder="Escribí tu consulta aquí..." required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-especial px-5 py-2 fw-bold shadow-sm">
                            <i class="ti ti-send me-2"></i>Enviar Consulta
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection