@extends('layouts.app')

@section('titulo', 'Mis Pedidos')

@section('contenido')
<div class="container-fluid bg-light-profile py-5">
    <div class="container container-profile">
        <div class="row g-4">
            
            <div class="col-md-4 col-lg-3">
                <div class="d-flex align-items-center gap-3 mb-4 ps-2">
                    <div class="avatar-circle">
                        <i class="ti ti-user fs-2 text-secondary"></i>
                    </div>
                    <h5 class="mb-0 fw-normal text-dark">Hola!</h5>
                </div>

                <div class="d-flex flex-column sidebar-profile-menu gap-1">
                    <a href="/perfil" class="sidebar-link">Perfil</a>
                    <a href="/historial" class="sidebar-link active">Pedidos</a>
                    <a href="/favoritos" class="sidebar-link">Lista de deseos</a>
                    
                    <a href="{{ route('logout') }}" class="sidebar-link text-muted mt-2"
                       onclick="event.preventDefault(); document.getElementById('logout-form-global').submit();">
                        Salir
                    </a>
                </div>
            </div>

            <div class="col-md-8 col-lg-9">
                <h2 class="fw-bold text-dark mb-4 profile-main-title">Pedidos</h2>

                @if($pedidos->isEmpty())
                    <div class="text-center py-5 bg-white rounded-4 shadow-sm">
                        <i class="ti ti-receipt fs-1 text-muted mb-3 d-block"></i>
                        <p class="text-muted mb-0">Aún no realizaste ninguna compra.</p>
                    </div>
                @else
                    @foreach($pedidos as $pedido)
                        <div class="card border-0 shadow-sm rounded-4 bg-white p-4 mb-4">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center border-bottom pb-3 mb-3">
                                <div>
                                   <span class="fw-bold text-success fs-5">
                                         {{ $pedido->status == 'entregado' ? 'Llegó el ' : 'Realizado el ' }} 
                                         {{ \Carbon\Carbon::parse($pedido->created_at)->locale('es')->isoFormat('D [de] MMMM [de] YYYY') }}
                                    </span>
                                    <span class="d-block text-muted small mt-1">Pedido #{{ $pedido->id }} · {{ $pedido->productos->count() }} producto(s)</span>
                                </div>
                                <span class="fw-bold text-dark fs-5 mt-2 mt-md-0">Total: ${{ number_format($pedido->total, 2, ',', '.') }}</span>
                            </div>

                            @foreach($pedido->productos as $prod)
                                <a href="{{ route('productos.detalle', $prod->id) }}" class="text-decoration-none d-flex align-items-center gap-3 mb-3 p-2 rounded-3 product-history-item">
                                    
                                    <div class="border rounded-3 p-1 bg-light d-flex align-items-center justify-content-center" style="width: 75px; height: 75px; min-width: 75px; overflow: hidden;">
                                        @php
                                            $rutaImagen = (strpos($prod->imagen, 'images/') === 0) ? $prod->imagen : 'images/img-products/' . $prod->imagen;
                                        @endphp
                                        <img src="{{ asset($rutaImagen) }}" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;" alt="{{ $prod->nombre }}">
                                    </div>
                                    
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1 fw-bold text-dark text-truncate-2 product-title-hover" style="font-size: 0.95rem; line-height: 1.3;">
                                            {{ $prod->nombre }}
                                        </h6>
                                        <span class="text-muted small d-block">Cantidad: {{ $prod->pivot->cantidad ?? 1 }}</span>
                                    </div>
                                    
                                    <div class="pe-2 text-secondary d-none d-md-block">
                                        <i class="ti ti-chevron-right fs-4"></i>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>
</div>
@endsection