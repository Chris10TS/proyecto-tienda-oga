@extends('layouts.app')

@section('titulo', '¡Compra Exitosa!')

@section('contenido')
<div class="container my-5 text-center py-5">
    <div class="card p-5 shadow border-0 max-width-md mx-auto bg-white" style="max-width: 600px;">
        <i class="ti ti-circle-check display-1 text-success mb-3"></i>
        <h2 class="fw-bold text-dark">¡Muchas gracias por tu compra!</h2>
        <p class="text-muted fs-5">Tu pedido en <span class="fw-bold text-primary">Tienda OGA</span> fue procesado de forma correcta.</p>
        <p class="small text-muted">El stock ha sido descontado automáticamente y tu carrito se encuentra limpio.</p>
        <div class="mt-4">
            <a href="{{ route('inicio') }}" class="btn btn-primary btn-lg fw-bold px-5">Seguir Navegando</a>
        </div>
    </div>
</div>
@endsection