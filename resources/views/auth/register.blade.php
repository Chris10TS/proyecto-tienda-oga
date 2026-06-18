@extends('layouts.app')

@section('titulo', 'Crear Cuenta')

@section('contenido')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="text-center mb-4">
                <h2 class="fw-bold">Crear cuenta en Tienda OGA</h2>
                <p class="text-muted">Es gratis y siempre lo será.</p>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('register') }}" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label class="form-label text-muted small">Nombre de Usuario (Solo números)</label>
                            <input type="text" name="name" 
                                class="form-control form-control-lg @error('name') is-invalid @enderror" 
                                value="{{ old('name') }}" 
                                placeholder="Ej: 458923">
                            @error('name')
                                <span class="invalid-feedback text-start"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-muted small">E-mail</label>
                            <input type="email" name="email" 
                                class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                value="{{ old('email') }}" 
                                placeholder="ejemplo@correo.com">
                            @error('email')
                                <span class="invalid-feedback text-start"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-muted small">Teléfono</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text text-muted">+54</span>
                                <input type="text" name="telefono" 
                                    class="form-control @error('telefono') is-invalid @enderror" 
                                    placeholder="Código de área + número"
                                    value="{{ old('telefono') }}">
                                @error('telefono')
                                    <span class="invalid-feedback text-start"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <small class="text-muted">Código de área + número sin espacios ni guiones.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-muted small">Contraseña</label>
                            <input type="password" name="password" 
                                class="form-control form-control-lg @error('password') is-invalid @enderror">
                            @error('password')
                                <span class="invalid-feedback text-start"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-muted small">Confirmar contraseña</label>
                            <input type="password" name="password_confirmation" 
                                class="form-control form-control-lg @error('password') is-invalid @enderror">
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" checked>
                                <label class="form-check-label text-muted small">
                                    Acepto que me contacten por SMS y WhatsApp.
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-muted small">
                                    Acepto los <a href="/terminos" class="text-primary">Términos y condiciones</a> y autorizo el uso de mis datos de acuerdo a la <a href="/terminos" class="text-primary">Declaración de privacidad</a>.
                                </label>
                            </div>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold">
                                Continuar
                            </button>
                        </div>

                        <hr class="my-4">

                        <div class="text-center">
                            <p class="text-muted small">¿Ya tenés cuenta? <a href="{{ route('login') }}" class="text-primary fw-bold">Ingresá</a></p>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection