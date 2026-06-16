@extends('layouts.app')

@section('titulo', 'Subir Nuevo Producto')

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
                    <a href="{{ route('admin.productos.create') }}" class="sidebar-link active">Gestionar Productos</a>
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

            <!-- COLUMNA DERECHA: Formulario de Carga -->
            <div class="col-md-8 col-lg-9">
                <h2 class="fw-bold text-dark mb-4 profile-main-title">Cargar Nuevo Producto</h2>

                <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                    <form action="{{ route('admin.productos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold small text-secondary">Nombre del Artículo</label>
                            <input type="text" name="nombre" class="form-control border-dark-subtle" placeholder="Ej: Cámara Seguridad WAER" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small text-secondary">Precio de Venta ($)</label>
                                <input type="number" step="0.01" name="precio" class="form-control border-dark-subtle" placeholder="0.00" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small text-secondary">Stock Disponible</label>
                                <input type="number" name="stock" class="form-control border-dark-subtle" placeholder="Ej: 15" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small text-secondary">Categoría correspondiente</label>
                                <select name="categoria_id" class="form-select border-dark-subtle" required>
                                    <option value="">Seleccione una opción...</option>
                                    @foreach($categorias as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small text-secondary">Imagen del Producto</label>
                                <input type="file" name="imagen" class="form-control border-dark-subtle" accept="image/*" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold small text-secondary">Descripción del Producto</label>
                            <textarea name="descripcion" class="form-control border-dark-subtle" rows="4" placeholder="Especificaciones técnicas, cuotas, garantías..." required></textarea>
                        </div>

                        <div class="text-end">
                            <a href="/inicio" class="btn btn-outline-secondary me-2 fw-bold rounded-pill px-3">Cancelar</a>
                            <button type="submit" class="btn text-white fw-bold rounded-pill px-4" style="background-color: #F5793A;">
                                Registrar Producto
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection