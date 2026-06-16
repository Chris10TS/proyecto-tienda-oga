@extends('layouts.app')

@section('titulo', 'Panel de Pedidos - Tienda OGA')

@section('contenido')
<div class="container-fluid bg-light-profile py-5">
    <div class="container container-profile">
        <div class="row g-4">
            
            <!-- COLUMNA IZQUIERDA: Menú Lateral del Administrador -->
            <div class="col-md-4 col-lg-3">
                <div class="d-flex align-items-center gap-3 mb-4 ps-2">
                    <div class="avatar-circle bg-danger-subtle">
                        <i class="ti ti-shield fs-2 text-danger"></i>
                    </div>
                    <h5 class="mb-0 fw-bold text-dark">Admin</h5>
                </div>

                <div class="d-flex flex-column sidebar-profile-menu gap-1">
                    <a href="{{ route('admin.consultas') }}" class="sidebar-link">Ver Consultas</a>
                    <a href="{{ route('admin.productos.create') }}" class="sidebar-link">Gestionar Productos</a>
                    <a href="/admin/usuarios" class="sidebar-link">Ver Usuarios</a>
                    <a href="{{ route('admin.pedidos') }}" class="sidebar-link active">Ver Ventas</a>
                    <a href="{{ route('admin.productos.bajas') }}" class="sidebar-link">Productos de Baja</a>
                    <hr class="my-2 text-muted">
                    <a href="{{ route('logout') }}" class="sidebar-link text-muted"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Salir
                    </a>
                </div>
            </div>

            <!-- COLUMNA DERECHA: Tabla de Ventas e Historial Desplegable -->
            <div class="col-md-8 col-lg-9">
                <h2 class="fw-bold text-dark mb-4 profile-main-title">Panel de Compras Realizadas</h2>

                @if($pedidos->isEmpty())
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-5 text-center">
                        <i class="ti ti-info-circle fs-1 text-muted mb-2"></i>
                        <p class="mb-0 fw-bold text-muted">Todavía no se registraron compras en la plataforma.</p>
                    </div>
                @else
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-3 border-0 small fw-bold text-secondary"># PEDIDO</th>
                                        <th class="border-0 small fw-bold text-secondary">CLIENTE</th>
                                        <th class="border-0 small fw-bold text-secondary">FECHA Y HORA</th>
                                        <th class="border-0 small fw-bold text-secondary">PAGO</th>
                                        <th class="border-0 small fw-bold text-secondary">MONTO</th>
                                        <th class="border-0 small fw-bold text-secondary text-center">ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pedidos as $pedido)
                                        <tr>
                                            <td class="ps-3 fw-bold text-secondary" style="font-size: 0.9rem;">
                                                #{{ str_pad($pedido->id, 5, '0', STR_PAD_LEFT) }}
                                            </td>
                                            <td>
                                                <span class="fw-semibold text-dark d-block" style="font-size: 0.92rem;">{{ $pedido->user->name }}</span>
                                                <span class="text-muted small d-block">{{ $pedido->user->email }}</span>
                                            </td>
                                            <td class="text-muted small">
                                                {{ $pedido->created_at->locale('es')->isoFormat('D MMM YYYY HH:mm') }} hs
                                            </td>
                                            <td>
                                                <span class="badge {{ $pedido->metodo_pago === 'tarjeta' ? 'bg-primary-subtle text-primary' : 'bg-warning-subtle text-warning-dominant' }} px-2 py-1.5 rounded-3 text-uppercase small fw-bold">
                                                    {{ $pedido->metodo_pago === 'tarjeta' ? 'Tarjeta' : 'Efectivo' }}
                                                </span>
                                            </td>
                                            <td class="fw-bold text-dark">${{ number_format($pedido->total, 0, ',', '.') }}</td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-dark rounded-pill fw-bold px-3 shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#detalle-{{ $pedido->id }}">
                                                    <i class="ti ti-eye me-1"></i> Detalle
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- Desplegable interno adaptado prolijo -->
                                        <tr class="collapse" id="detalle-{{ $pedido->id }}">
                                            <td colspan="6" class="p-3 bg-light-profile">
                                                <div class="card card-body border-0 shadow-sm rounded-3 bg-white p-3">
                                                    <h6 class="fw-bold text-secondary mb-3"><i class="ti ti-list-check text-dark"></i> Artículos del Pedido #{{ $pedido->id }}</h6>
                                                    
                                                    <div class="table-responsive">
                                                        <table class="table table-sm table-bordered align-middle text-center mb-0 small">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th>Imagen</th>
                                                                    <th class="text-start">Producto</th>
                                                                    <th>Precio Unitario</th>
                                                                    <th>Cantidad</th>
                                                                    <th>Subtotal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($pedido->productos as $prod)
                                                                    <tr>
                                                                        <td style="width: 60px;">
                                                                            @php
                                                                                $rutaImagen = (strpos($prod->imagen, 'images/') === 0) ? $prod->imagen : 'images/img-products/' . $prod->imagen;
                                                                            @endphp
                                                                            <img src="{{ asset($rutaImagen) }}" class="img-fluid rounded" style="max-height: 40px; object-fit: contain;">
                                                                        </td>
                                                                        <td class="text-start fw-bold text-dark">{{ $prod->nombre }}</td>
                                                                        <td>${{ number_format($prod->pivot->precio_unitario, 0, ',', '.') }}</td>
                                                                        <td class="fw-bold text-secondary">{{ $prod->pivot->cantidad }}</td>
                                                                        <td class="fw-bold text-dark">${{ number_format($prod->pivot->precio_unitario * $prod->pivot->cantidad, 0, ',', '.') }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>
@endsection