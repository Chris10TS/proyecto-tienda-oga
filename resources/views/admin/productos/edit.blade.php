@extends('layouts.app')

@section('titulo', 'Editar Producto')

@section('contenido')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-header bg-dark text-white fw-bold py-3">
                    Modificar Artículo: {{ $producto->nombre }}
                </div>
                <div class="card-body p-4 bg-white">
                    
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show fw-bold mb-4 shadow-sm" role="alert">
                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <form action="{{ route('admin.productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('PUT') <div class="mb-3">
                            <label class="form-label fw-bold small">Nombre del Artículo</label>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $producto->nombre) }}">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small">Precio de Venta ($)</label>
                                <input type="number" step="0.01" name="precio" class="form-control" value="{{ old('precio', $producto->precio) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small">Stock</label>
                                <input type="number" name="stock" class="form-control" value="{{ old('stock', $producto->stock) }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small">Categoría</label>
                                <select name="categoria_id" class="form-select">
                                    @foreach($categorias as $cat)
                                        <option value="{{ $cat->id }}" {{ old('categoria_id', $producto->categoria_id) == $cat->id ? 'selected' : '' }}>
                                            {{ $cat->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small">Cambiar Imagen (Opcional)</label>
                                <input type="file" name="imagen" class="form-control" accept="image/*">
                                <span class="text-muted small">Imagen actual: {{ $producto->imagen }}</span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold small">Descripción</label>
                            <textarea name="descripcion" class="form-control" rows="4">{{ old('descripcion', $producto->descripcion) }}</textarea>
                        </div>

                        <div class="text-end">
                            <a href="/inicio" class="btn btn-outline-secondary me-2 fw-bold">Cancelar</a>
                            <button type="submit" class="btn btn-primary fw-bold">Guardar Cambios</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection