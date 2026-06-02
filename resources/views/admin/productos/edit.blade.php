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
                    
                    <form action="{{ route('admin.productos.update', $producto->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- OBLIGATORIO PARA ACTUALIZAR -->

                        <div class="mb-3">
                            <label class="form-label fw-bold small">Nombre del Artículo</label>
                            <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small">Precio de Venta ($)</label>
                                <input type="number" step="0.01" name="precio" class="form-control" value="{{ $producto->precio }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small">Stock</label>
                                <input type="number" name="stock" class="form-control" value="{{ $producto->stock }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold small">Categoría</label>
                                <select name="categoria_id" class="form-select" required>
                                    @foreach($categorias as $cat)
                                        <option value="{{ $cat->id }}" {{ $producto->categoria_id == $cat->id ? 'selected' : '' }}>
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
                            <textarea name="descripcion" class="form-control" rows="4" required>{{ $producto->descripcion }}</textarea>
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