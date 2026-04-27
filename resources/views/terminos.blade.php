@extends('layouts.app')

@section('titulo', 'Términos y Usos')

@section('contenido')

<div class="row mb-4">
    <div class="col-12">
        <h1 class="fw-bold">Términos y Usos</h1>
        <p class="text-muted">Última actualización: Enero 2026</p>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8">

        <div class="card p-4 mb-4">
            <h4 class="fw-bold">1. Aceptación de los Términos</h4>
            <p>Al acceder y utilizar el sitio web de Tienda OGA, el usuario acepta cumplir con los presentes términos y condiciones. Si no está de acuerdo con alguno de estos términos, le pedimos que no utilice nuestro sitio.</p>
        </div>

        <div class="card p-4 mb-4">
            <h4 class="fw-bold">2. Servicios Ofrecidos</h4>
            <p>Tienda OGA es una tienda multirrubro que ofrece productos de tecnología, hogar, mascotas y más. Nos reservamos el derecho de modificar, suspender o discontinuar cualquier producto o servicio en cualquier momento.</p>
        </div>

        <div class="card p-4 mb-4">
            <h4 class="fw-bold">3. Garantías</h4>
            <p>Todos nuestros productos cuentan con garantía según las siguientes condiciones:</p>
            <ul>
                <li>Productos de tecnología: <strong>6 meses</strong> de garantía contra defectos de fábrica.</li>
                <li>Productos de hogar: <strong>3 meses</strong> de garantía.</li>
                <li>Accesorios y otros productos: <strong>30 días</strong> de garantía.</li>
            </ul>
            <p>La garantía no cubre daños causados por mal uso, accidentes o modificaciones no autorizadas.</p>
        </div>

        <div class="card p-4 mb-4">
            <h4 class="fw-bold">4. Devoluciones y Cambios</h4>
            <p>Aceptamos devoluciones dentro de los <strong>30 días</strong> posteriores a la recepción del producto, siempre que:</p>
            <ul>
                <li>El producto esté en su estado original, sin uso.</li>
                <li>Conserve su embalaje original.</li>
                <li>Se presente el comprobante de compra.</li>
            </ul>
            <p>Para iniciar una devolución contactanos por WhatsApp al <strong>3794-055431</strong> o por email a <strong>tiendaOGA@gmail.com</strong>.</p>
        </div>

        <div class="card p-4 mb-4">
            <h4 class="fw-bold">5. Envíos</h4>
            <p>Los envíos se realizan a todo el país. Los tiempos de entrega son estimativos y pueden variar según la ubicación y disponibilidad del producto. Tienda OGA no se responsabiliza por demoras causadas por el servicio de correo o causas de fuerza mayor.</p>
        </div>

        <div class="card p-4 mb-4">
            <h4 class="fw-bold">6. Privacidad de Datos</h4>
            <p>Tienda OGA se compromete a proteger la privacidad de sus clientes. Los datos personales recopilados serán utilizados únicamente para procesar pedidos y mejorar la experiencia de compra. No compartimos información personal con terceros sin consentimiento previo.</p>
        </div>

        <div class="card p-4 mb-4">
            <h4 class="fw-bold">7. Modificaciones</h4>
            <p>Tienda OGA se reserva el derecho de modificar estos términos y condiciones en cualquier momento. Los cambios serán publicados en esta página y entrarán en vigor inmediatamente después de su publicación.</p>
        </div>

    </div>

    <div class="col-md-4">
        <div class="card bg-dark text-white p-4 mb-4">
            <h5 class="fw-bold">¿Tenés dudas?</h5>
            <p>Contactanos y te respondemos en el momento.</p>
            <a href="/contacto-oga" class="btn btn-warning">Ir a Contacto</a>
        </div>
        <div class="card p-4">
            <h5 class="fw-bold">Resumen</h5>
            <ul class="list-unstyled">
                <li><i class="ti ti-check"></i>Garantía en todos los productos</li>
                <li><i class="ti ti-check"></i>Devoluciones hasta 30 días</li>
                <li><i class="ti ti-check"></i>Envíos a todo el país</li>
                <li><i class="ti ti-check"></i>Datos protegidos</li>
                <li><i class="ti ti-check"></i>Atención 24/7</li>
            </ul>
        </div>
    </div>
</div>

@endsection