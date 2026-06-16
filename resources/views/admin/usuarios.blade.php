@extends('layouts.app')

@section('titulo', 'Panel Admin - Usuarios Registrados')

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
                    <a href="/admin/usuarios" class="sidebar-link active">Ver Usuarios</a>
                    <a href="{{ route('admin.pedidos') }}" class="sidebar-link">Ver Ventas</a>
                    <hr class="my-2 text-muted">
                    <a href="{{ route('logout') }}" class="sidebar-link text-muted"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Salir
                    </a>
                </div>
            </div>

            <div class="col-md-8 col-lg-9">
                <h2 class="fw-bold text-dark mb-4 profile-main-title">Usuarios Registrados</h2>

                <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                    @if($usuarios->isEmpty())
                        <div class="text-center py-4">
                            <i class="ti ti-users-minus fs-1 text-muted mb-2 d-block"></i>
                            <p class="text-muted mb-0">No hay clientes registrados en el sistema actualmente.</p>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-3 border-0 small fw-bold text-secondary">ID</th>
                                        <th class="border-0 small fw-bold text-secondary">NOMBRE COMPLETO</th>
                                        <th class="border-0 small fw-bold text-secondary">EMAIL INSTITUCIONAL</th>
                                        <th class="border-0 small fw-bold text-secondary">FECHA DE REGISTRO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $user)
                                        <tr>
                                            <td class="ps-3 fw-bold text-secondary" style="font-size: 0.9rem;">#{{ $user->id }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="avatar-circle" style="width: 32px; height: 32px; min-width: 32px; background-color: #e9ecef;">
                                                        <i class="ti ti-user fs-6 text-secondary"></i>
                                                    </div>
                                                    <span class="fw-semibold text-dark" style="font-size: 0.92rem;">{{ $user->name }}</span>
                                                </div>
                                            </td>
                                            <td class="text-muted" style="font-size: 0.9rem;">{{ $user->email }}</td>
                                            <td class="text-muted" style="font-size: 0.9rem;">
                                                {{ $user->created_at->locale('es')->isoFormat('D MMM YYYY') }}
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