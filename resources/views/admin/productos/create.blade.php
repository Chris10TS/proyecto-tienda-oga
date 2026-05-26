@extends('layouts.app')

@section('titulo', 'Subir Nuevo Producto')

@section('contenido')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-header bg-dark text-white fw-bold py-3">
                    <i class="ti ti-plus me-2"></i> Cargar Nuevo Producto (Panel de Control)
                </div>
                <div class="card-body p-4 bg-white">
                    
                    <form action="{{ route('admin.productos.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold small">Nombre del Artículo</label>
                            <input type="text" name="nombre" class="form-control border-dark-subtle" placeholder="Ej: Cámara Seguridad WAER" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small">Precio de Venta ($)</label>
                                <input type="number" step="0.01" name="precio" class="form-control border-dark-subtle" placeholder="0.00" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small">Stock Disponible</label>
                                <input type="number" name="stock" class="form-control border-dark-subtle" placeholder="Ej: 15" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small">Categoría correspondiente</label>
                                <select name="categoria_id" class="form-select border-dark-subtle" required>
                                    <option value="">Seleccione una opción...</option>
                                    @foreach($categorias as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small">Nombre exacto de la imagen</label>
                                <input type="text" name="imagen" class="form-control border-dark-subtle" placeholder="Ej: kit-camaras-e121.png" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold small">Descripción del Producto</label>
                            <textarea name="descripcion" class="form-control border-dark-subtle" rows="4" placeholder="Especificaciones técnicas, cuotas, garantías..." required></textarea>
                        </div>

                        <div class="text-end">
                            <a href="/inicio" class="btn btn-outline-secondary me-2 fw-bold">Cancelar</a>
                            <button type="submit" class="btn text-white fw-bold" style="background-color: #F5793A;">
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