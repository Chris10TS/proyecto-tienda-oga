@extends('layouts.app')

@section('titulo', 'Panel de Consultas')

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
                    <a href="{{ route('admin.consultas') }}" class="sidebar-link active">Ver Consultas</a>
                    <a href="{{ route('admin.productos.create') }}" class="sidebar-link">Gestionar Productos</a>
                    <a href="/admin/usuarios" class="sidebar-link">Ver Usuarios</a>
                    <a href="{{ route('admin.pedidos') }}" class="sidebar-link">Ver Ventas</a>
                    <a href="{{ route('admin.productos.bajas') }}" class="sidebar-link">Productos de Baja</a>
                    <hr class="my-2 text-muted">
                    <a href="{{ route('logout') }}" class="sidebar-link text-muted"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Salir
                    </a>
                </div>
            </div>

            <!-- COLUMNA DERECHA: Tabla de Mensajes Recibidos -->
            <div class="col-md-8 col-lg-9">
                <h2 class="fw-bold text-dark mb-4 profile-main-title">Consultas de Clientes</h2>

                <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-3 border-0 small fw-bold text-secondary">ID</th>
                                    <th class="border-0 small fw-bold text-secondary">CONTACTO</th>
                                    <th class="border-0 small fw-bold text-secondary">MENSAJE</th>
                                    <th class="border-0 small fw-bold text-secondary">FECHA</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($consultas as $consulta)
                                    <tr>
                                        <td class="ps-3 fw-bold text-secondary" style="font-size: 0.9rem;">#{{ $consulta->id }}</td>
                                        <td>
                                            <span class="fw-semibold text-dark d-block" style="font-size: 0.92rem;">{{ $consulta->nombre }}</span>
                                            <span class="text-muted small d-block">{{ $consulta->email }}</span>
                                            @if($consulta->telefono)
                                                <span class="text-muted small d-block"><i class="ti ti-phone small"></i> {{ $consulta->telefono }}</span>
                                            @endif
                                        </td>
                                        <td class="text-dark small" style="max-width: 300px; white-space: normal;">
                                            {{ $consulta->mensaje }}
                                        </td>
                                        <td class="text-muted small">
                                            {{ $consulta->created_at->locale('es')->isoFormat('D MMM YYYY [HH:mm]') }} hs
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4 text-muted">
                                            <i class="ti ti-mail-opened d-block fs-2 mb-2 text-muted"></i>
                                            No hay consultas registradas todavía.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection