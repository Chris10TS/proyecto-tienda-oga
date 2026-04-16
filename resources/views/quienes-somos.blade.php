@extends('layouts.app')

@section('titulo', 'Quiénes Somos')

@section('contenido')

<div class="row mb-5">
    <div class="col-12">
        <h1 class="fw-bold">Quiénes Somos</h1>
        <hr>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-6">
        <h2>Nuestra Historia</h2>
        <p>Tienda OGA nació en el año 2020, en plena pandemia, con la idea de ofrecer productos de calidad a precios accesibles. Lo que comenzó como un emprendimiento familiar se convirtió en una tienda multirrubro de confianza para cientos de clientes.</p>
        <p>Con 6 años de experiencia, hoy ofrecemos desde tecnología como TV Box y proyectores, hasta artículos para mascotas, hogar y mucho más.</p>
    </div>
    <div class="col-md-6">
        <h2>Nuestra Misión</h2>
        <p>Brindar a nuestros clientes la mejor experiencia de compra, con productos de calidad, atención personalizada y envíos a todo el país.</p>
        <h2 class="mt-4">Nuestra Visión</h2>
        <p>Convertirnos en la tienda multirrubro de referencia de la región, creciendo junto a nuestros clientes y adaptándonos siempre a sus necesidades.</p>
    </div>
</div>

<div class="row mb-5">
    <div class="col-12">
        <h2 class="mb-4">Nuestro Equipo</h2>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card h-100 text-center p-3">
            <div class="card-body">
                <h4 class="card-title">Christian Gomez</h4>
                <p class="text-muted">Fundador</p>
                <p class="card-text">Emprendedor correntino que fundó Tienda OGA en 2020 con la visión de crear una tienda multirrubro accesible para todos.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card h-100 text-center p-3">
            <div class="card-body">
                <h4 class="card-title">Agustina Gomez</h4>
                <p class="text-muted">Programadora</p>
                <p class="card-text">Responsable del desarrollo y mantenimiento de la plataforma digital de Tienda OGA.</p>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-12">
        <h2 class="mb-4">Dónde Estamos</h2>
        <p>Nos encontramos en <strong>Pasaje Los Ángeles 4431, Corrientes, Argentina</strong>.</p>
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