@extends('layouts.app')

@section('titulo', $producto->nombre)

@section('contenido')

<div class="container mt-4">

    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/catalogo">Catálogo</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $producto->nombre }}</li>
        </ol>
    </nav>

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show fw-bold mb-4 shadow-sm" role="alert">
            <i class="ti ti-circle-x-filled"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row mb-5">

        <div class="col-md-5">
            <div class="card p-3 text-center">
                <img src="{{ asset('images/img-products/' . $producto->imagen) }}" class="img-fluid rounded imagen-contenida" alt="{{ $producto->nombre }}">
            </div>
        </div>

        <div class="col-md-4">
            <span class="badge bg-success mb-2">MÁS VENDIDO</span>
            <h1 class="fs-4 fw-bold">{{ $producto->nombre }}</h1>

            <div class="d-flex align-items-center gap-2 mb-3">
                <span class="text-warning fs-5">★★★★☆</span>
                <span class="text-muted">(128 opiniones)</span>
            </div>

            <p class="text-muted text-decoration-line-through mb-0">${{ number_format($producto->precio * 1.3, 0, ',', '.') }}</p>
            
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="fs-2 fw-bold">${{ number_format($producto->precio, 0, ',', '.') }}</span>
                <span class="badge bg-success fs-6">30% OFF</span>
            </div>
            
            <p class="text-muted mb-3">6 cuotas de ${{ number_format($producto->precio / 6, 0, ',', '.') }} sin interés</p>

            <ul class="list-unstyled mb-3">
                <li><i class="ti ti-check"></i> Alta calidad y rendimiento garantizado</li>
                <li><i class="ti ti-check"></i> Componentes Premium Tienda OGA</li>
                <li><i class="ti ti-check"></i> Conectividad y facilidad de uso</li>
                <li><i class="ti ti-check"></i> Diseño ergonómico y resistente</li>
            </ul>

            @if($producto->stock > 0)
                <p class="text-success fw-bold"><i class="ti ti-circle-check"></i> Stock disponible ({{ $producto->stock }} unidades)</p>
            @else
                <p class="text-danger fw-bold"><i class="ti ti-circle-x"></i> Sin stock de momento</p>
            @endif
        </div>

        <div class="col-md-3">
            <div class="card p-3 contenedor-estatico">
                <p class="text-success fw-bold mb-1"><i class="ti ti-truck-delivery"></i> Envío gratis en Corrientes</p>
                <p class="text-muted small mb-3">Envío gratis a partir de $100.000 al resto del país</p>

                <form action="{{ route('carrito.agregar', $producto->id) }}" method="POST">
                    @csrf

                    <label class="form-label fw-bold">Cantidad</label>
                    <select name="cantidad" class="form-select mb-3">
                        <option value="1">1 unidad</option>
                        <option value="2">2 unidades</option>
                        <option value="3">3 unidades</option>
                        <option value="4">4 unidades</option>
                        <option value="5">5 unidades</option>
                    </select>

                    @if($producto->stock > 0)
                        <button type="submit" formaction="{{ route('carrito.comprarAhora', $producto->id) }}" class="btn btn-warning w-100 mb-2 fw-bold text-dark shadow-sm">
                            Comprar ahora
                        </button>
        
                        <button type="submit" class="btn btn-outline-dark w-100 mb-3 fw-bold">
                            <i class="ti ti-shopping-cart"></i> Agregar al carrito
                        </button>
        
                        <p class="text-muted small mb-0">Disponibles: <span class="fw-bold">{{ $producto->stock }} unidades</span></p>
                    @else
                        <button class="btn btn-secondary w-100 mb-3" disabled>
                            <i class="ti ti-shopping-cart-off"></i> Sin Stock Disponible
                        </button>
                    @endif
                </form>

                <div class="border-top pt-3 mt-3">
                    <p class="small mb-1"> Devoluciones hasta 30 días</p>
                    <p class="small mb-1"> Garantía 6 meses</p>
                    <p class="small mb-0"> Compra segura</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row mb-5">
        <div class="col-12">
            <div class="cardP p-4 bg-white rounded shadow-sm">
                <h3 class="fw-bold mb-3">Descripción del producto</h3>
                <p>{{ $producto->descripcion }}</p>
                
                <h5 class="mt-4">Especificaciones técnicas</h5>
                <table class="table table-bordered mt-2">
                    <tbody>
                        <tr><td><strong>Producto</strong></td><td>{{ $producto->nombre }}</td></tr>
                        <tr><td><strong>Categoría</strong></td><td>{{ $producto->categoria->nombre }}</td></tr>
                        <tr><td><strong>Código de Identificación</strong></td><td>OGA-#00{{ $producto->id }}</td></tr>
                        <tr><td><strong>Garantía oficial</strong></td><td>6 meses</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row mb-5">
    <div class="col-12">
        <div class="card4 p-4 bg-white rounded shadow-sm">
            <h3 class="fw-bold mb-4">Opiniones de clientes</h3>
            
            @forelse($producto->reseñas as $reseña)
                <div class="border-bottom pb-3 mb-3">
                    <div class="d-flex justify-content-between">
                        <strong>{{ $reseña->user->name }}</strong>
                        <span class="text-muted small">{{ $reseña->created_at->format('d/m/Y') }}</span>
                    </div>
                    <span class="text-warning">
                        {{ str_repeat('★', $reseña->estrellas) }}{{ str_repeat('☆', 5 - $reseña->estrellas) }}
                    </span>
                    <p class="mt-1 mb-0">{{ $reseña->comentario }}</p>
                </div>
            @empty
                <p class="text-muted small mb-4">Este producto todavía no tiene opiniones escritas.</p>
            @endforelse

            {{-- 2. FILTRO ESTRICTO: Solo clientes registrados, que no sean admin y que HAGAN COMPRADO este producto --}}
            @if(Auth::check() && Auth::user()->rol !== 'admin')
                @php
                    // Buscamos si el usuario actual tiene algún pedido finalizado ("pagado") que contenga este producto_id
                    $haComprado = \App\Models\Pedido::where('user_id', Auth::id())
                        ->where('estado', 'pagado')
                        ->whereHas('productos', function($query) use ($producto) {
                            $query->where('producto_id', $producto->id);
                        })->exists();
                @endphp

                @if($haComprado)
                    <div class="bg-light p-3 rounded border mt-4">
                        <h5 class="fw-bold text-dark mb-3"><i class="ti ti-message-2"></i> Dejanos tu opinión sobre el producto</h5>
                        
                        <form action="{{ route('productos.opinor', $producto->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Calificación (Estrellas)</label>
                                <select name="estrellas" class="form-select bg-white" style="max-width: 150px;" required>
                                    <option value="5">★★★★★ (5)</option>
                                    <option value="4">★★★★☆ (4)</option>
                                    <option value="3">★★★☆☆ (3)</option>
                                    <option value="2">★★☆☆☆ (2)</option>
                                    <option value="1">★☆☆☆☆ (1)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Tu comentario</label>
                                <textarea name="comentario" class="form-control bg-white" rows="3" placeholder="Contanos qué te pareció el artículo..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary fw-bold btn-sm px-4 shadow-sm">Publicar Reseña</button>
                        </form>
                    </div>
                @endif
            @endif

        </div>
    </div>
    </div>

</div>

@endsection