@extends('layouts.app')

@section('titulo', 'Comercialización')

@section('contenido')

<div class="row mb-4">
    <div class="col-12">
        <h1 class="fw-bold">Comercialización</h1>
        <hr>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-4 mb-3">
        <div class="card h-100 text-center p-3">
            <div class="card-body">
                <i class="ti ti-truck"></i>
                <h4 class="card-title">Envíos</h4>
                <p class="card-text">Realizamos envíos a todo el país. Los envíos dentro de Corrientes son <strong>completamente gratis</strong>.</p>
                <p class="card-text">Envío gratis a partir de <strong>$100.000</strong> en todo el país.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100 text-center p-3">
            <div class="card-body">
                <i class="ti ti-credit-card"></i>  
                <h4 class="card-title">Medios de Pago</h4>
                <p class="card-text">Aceptamos los siguientes medios de pago:</p>
                <ul class="list-unstyled">
                    <li><i class="ti ti-check"></i> Efectivo</li>
                    <li><i class="ti ti-check"></i> Transferencia bancaria</li>
                    <li><i class="ti ti-check"></i> Tarjeta de crédito</li>
                    <li><i class="ti ti-check"></i> Tarjeta de débito</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100 text-center p-3">
            <div class="card-body">
                <i class="ti ti-package"></i>  
                <h4 class="card-title">Tiempos de Entrega</h4>
                <p class="card-text">Corrientes capital: <strong>24 a 48hs</strong></p>
                <p class="card-text">Interior de Corrientes: <strong>2 a 5 días hábiles</strong></p>
                <p class="card-text">Resto del país: <strong>5 a 10 días hábiles</strong></p>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-12">
        <div class="card bg-warning p-4">
            <h4 class="fw-bold"><i class="ti ti-truck-delivery"></i> Promoción de envío gratis</h4>
            <p class="mb-0">Realizá tu compra por un monto igual o superior a <strong>$100.000</strong> y recibí tu pedido sin costo de envío a cualquier punto del país.</p>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-12">
        <h2 class="mb-4">Preguntas Frecuentes</h2>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card p-3">
            <h5>¿Puedo retirar mi pedido en el local?</h5>
            <p class="mb-0">Sí, podés retirar tu pedido en nuestro local ubicado en Pasaje Los Ángeles 4431, Corrientes.</p>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card p-3">
            <h5>¿Cómo hago el seguimiento de mi envío?</h5>
            <p class="mb-0">Una vez despachado tu pedido te enviamos el número de seguimiento por WhatsApp o email.</p>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card p-3">
            <h5>¿Tienen garantía los productos?</h5>
            <p class="mb-0">Sí, todos nuestros productos tienen garantía. Consultá los términos según el producto en nuestra sección de Términos y Usos.</p>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card p-3">
            <h5>¿Puedo devolver un producto?</h5>
            <p class="mb-0">Sí, aceptamos devoluciones dentro de los 30 días de recibido el producto, siempre que esté en condiciones originales.</p>
        </div>
    </div>
</div>

@endsection