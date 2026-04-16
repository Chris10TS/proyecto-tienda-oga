@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')

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

@endsection