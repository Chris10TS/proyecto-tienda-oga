@extends('layouts.app')

@section('titulo', 'Panel Admin - Productos Dados de Baja')

@section('contenido')
<div class="container-fluid bg-light-profile py-5">
    <div class="container container-profile">
        <div class="row g-4">
            
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
                    <a href="{{ route('admin.pedidos') }}" class="sidebar-link">Ver Ventas</a>
                    <a href="{{ route('admin.productos.bajas') }}" class="sidebar-link active">Productos de Baja</a>
                    <hr class="my-2 text-muted">
                    <a href="{{ route('logout') }}" class="sidebar-link text-muted"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Salir
                    </a>
                </div>
            </div>

            <div class="col-md-8 col-lg-9">
                <h2 class="fw-bold text-dark mb-4 profile-main-title">Historial de Productos Archivados</h2>

                {{-- Alertitas de éxito por si reactivan uno --}}
                @if(session('success'))
                    <div class="alert alert-success p-2 small shadow-sm mb-4">{{ session('success') }}</div>
                @endif

                <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                    @if($eliminados->isEmpty())
                        <div class="text-center py-5">
                            <i class="ti ti-circle-check fs-1 text-success mb-2 d-block"></i>
                            <p class="text-muted mb-0 fw-semibold">No hay ningún producto archivado en este momento.</p>
                            <a href="/inicio" class="btn btn-sm btn-outline-secondary mt-3 rounded-pill">Volver a la Tienda</a>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-3 border-0 small fw-bold text-secondary">ID</th>
                                        <th class="border-0 small fw-bold text-secondary">IMAGEN Y NOMBRE</th>
                                        <th class="border-0 small fw-bold text-secondary">PRECIO</th>
                                        <th class="text-end pe-3 border-0 small fw-bold text-secondary">ACCION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($eliminados as $prodTrash)
                                        <tr>
                                            <td class="ps-3 fw-bold text-secondary" style="font-size: 0.9rem;">#{{ $prodTrash->id }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="{{ asset('images/img-products/' . $prodTrash->imagen) }}" class="rounded border bg-light" style="width: 38px; height: 38px; object-fit: contain;">
                                                    <span class="fw-semibold text-dark" style="font-size: 0.92rem;">{{ $prodTrash->nombre }}</span>
                                                </div>
                                            </td>
                                            <td class="text-muted" style="font-size: 0.9rem;">${{ number_format($prodTrash->precio, 0, ',', '.') }}</td>
                                            <td class="text-end pe-3">
                                                <form action="{{ route('admin.productos.reactivar', $prodTrash->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-success btn-sm fw-bold text-white rounded-pill px-3 shadow-sm" style="font-size: 0.82rem;">
                                                        <i class="ti ti-arrow-back-up me-1"></i> Reactivar / Alta
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection