@extends('layouts.app')

@section('titulo', 'Panel de Pedidos - Tienda OGA')

@section('contenido')
<div class="container my-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold"><i class="ti ti-report-money text-success"></i> Panel de Compras Realizadas</h1>
            <p class="text-muted">Monitoreá las órdenes de compra de tus clientes y sus estados de pago.</p>
            <hr>
        </div>
    </div>

    @if($pedidos->isEmpty())
        <div class="alert alert-info text-center py-4">
            <i class="ti ti-info-circle fs-2"></i>
            <p class="mb-0 mt-2 fw-bold">Todavía no se registraron compras en la plataforma.</p>
        </div>
    @else
        <div class="table-responsive bg-white p-3 rounded shadow-sm border">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th># Pedido</th>
                        <th>Cliente</th>
                        <th>Fecha y Hora</th>
                        <th>Método de Pago</th>
                        <th>Monto Total</th>
                        <th class="text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pedidos as $pedido)
                        <tr>
                            <td class="fw-bold">#{{ str_pad($pedido->id, 5, '0', STR_PAD_LEFT) }}</td>
                            <td>
                                <div class="fw-bold">{{ $pedido->user->name }}</div>
                                <div class="small text-muted">{{ $pedido->user->email }}</div>
                            </td>
                            <td>{{ $pedido->created_at->format('d/m/Y H:i') }} hs</td>
                            <td>
                                <span class="badge {{ $pedido->metodo_pago === 'tarjeta' ? 'bg-primary' : 'bg-warning text-dark' }} p-2 text-uppercase">
                                    <i class="ti {{ $pedido->metodo_pago === 'tarjeta' ? 'ti-credit-card' : 'ti-cash' }}"></i> 
                                    {{ $pedido->metodo_pago === 'tarjeta' ? 'Tarjeta' : 'Efectivo' }}
                                </span>
                            </td>
                            <td class="fw-bold text-success">${{ number_format($pedido->total, 0, ',', '.') }}</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-dark fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#detalle-{{ $pedido->id }}" aria-expanded="false">
                                    <i class="ti ti-eye"></i> Ver Detalle
                                </button>
                            </td>
                        </tr>

                        <tr class="collapse bg-light" id="detalle-{{ $pedido->id }}">
                            <td colspan="6" class="p-4">
                                <div class="card card-body border-0 shadow-sm bg-white">
                                    <h6 class="fw-bold text-muted mb-3"><i class="ti ti-list-check"></i> Artículos incluidos en el Pedido #{{ $pedido->id }}</h6>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-sm table-bordered align-middle text-center mb-0">
                                            <thead class="bg-dark text-white small">
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
                                                        <td style="width: 70px;">
                                                            <img src="{{ asset('images/img-products/' . $prod->imagen) }}" alt="" class="img-fluid rounded p-1" style="max-height: 40px; object-fit: contain;">
                                                        </td>
                                                        <td class="text-start fw-bold small">{{ $prod->nombre }}</td>
                                                        <td>${{ number_format($prod->pivot->precio_unitario, 0, ',', '.') }}</td>
                                                        <td class="fw-bold">{{ $prod->pivot->cantidad }}</td>
                                                        <td class="fw-bold text-dark">${{ number_format($prod->pivot->precio_unitario * $prod->pivot->cantidad, 0, ',', '.') }}</td>
                                                    </tr>
                                                @endforeach
                                                <tr class="table-active font-weight-bold">
                                                    <td colspan="4" class="text-end fw-bold">TOTAL ABONADO:</td>
                                                    <td class="fw-bold text-success fs-5">${{ number_format($pedido->total, 0, ',', '.') }}</td>
                                                </tr>
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
    @endif
</div>
@endsection