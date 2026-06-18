@extends('layouts.app')

@section('titulo', 'Iniciar Sesión')

@section('contenido')
<div class="container-fluid bg-white login-wrapper">
    <div class="container py-5 login-container">
        <div class="row justify-content-center pt-lg-4 position-relative">
            
            <div class="col-md-6 pe-md-5 text-center border-end border-secondary-subtle align-self-start col-login-left">
                <div class="title-container mb-4">
                    <h3 class="fw-bolder text-dark custom-title m-0">
                        Elegí una opción para<br>ingresar
                    </h3>
                </div>
                
                <div class="d-flex flex-column align-items-center mb-4">
                    <button id="btn-flujo-codigo" onclick="mostrarFlujo('codigo')" class="btn btn-outline-primary py-2.5 rounded-pill fw-bold shadow-none bg-white btn-custom-width btn-flow-toggle">
                        Recibir código de acceso por e-mail
                    </button>

                    <button id="btn-flujo-password" onclick="mostrarFlujo('password')" class="btn btn-outline-primary py-2.5 rounded-pill fw-bold shadow-none bg-white btn-custom-width btn-flow-toggle d-none">
                        Entrar con e-mail y contraseña
                    </button>
                </div>
            </div>

            <div class="col-md-6 ps-md-5 text-center mt-5 mt-md-0 align-self-start">
                
                <div id="vista-password" class="mx-auto form-box">
                    <div class="title-container mb-4">
                        <h3 class="fw-bolder text-dark custom-title m-0">
                            Entrar con e-mail y<br>contraseña
                        </h3>
                    </div>

                    <form method="POST" action="{{ route('login') }}" novalidate>
                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control form-control-lg bg-white rounded-pill px-4 login-input @error('email') is-invalid @enderror" 
                                   placeholder="Ej.: ejemplo@mail.com" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback text-start ps-3"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-2 position-relative">
                           <input type="password" name="password" 
                              class="form-control form-control-lg bg-white rounded-pill px-4 login-input @error('password') is-invalid @enderror" 
                              placeholder="Ingrese su contraseña">
                             <i class="ti ti-eye text-secondary position-absolute top-50 end-0 translate-middle-y pe-4 fs-5 btn-toggle-eye"></i>
    
                            @error('password')
                                <span class="invalid-feedback text-start ps-3">
                                    <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-end mb-4 pe-2">
                                <a class="small text-decoration-underline fw-bold link-forgot" href="{{ route('password.request') }}">
                                    Olvidé mi contraseña
                                </a>
                            </div>
                        @endif

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold text-white rounded-pill fs-6 py-2.5 shadow-none btn-submit-login">
                                Entrar
                            </button>
                        </div>
                    </form>
                </div>

                <div id="vista-codigo" class="mx-auto form-box d-none">
                    <div class="title-container mb-4">
                        <h3 class="fw-bolder text-dark custom-title m-0">
                            Recibir código de acceso por<br>e-mail
                        </h3>
                    </div>

                    <form method="POST" action="{{ route('login') }}" novalidate>
                        @csrf
                        <div class="mb-4">
                            <input type="email" name="email_codigo" class="form-control form-control-lg bg-white rounded-pill px-4 login-input" 
                                   placeholder="Ej.: ejemplo@mail.com">
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold text-white rounded-pill fs-6 py-2.5 shadow-none btn-submit-login">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>

                <div class="text-center mt-3">
                    <p class="small mb-0 fw-bold">
                        <a href="{{ route('register') }}" class="text-decoration-underline link-register">
                            ¿No tiene una cuenta? Regístrese
                        </a>
                    </p>
                </div>

            </div>

        </div>
    </div>
</div>

<script>
function mostrarFlujo(flujo) {
    const btnCodigo = document.getElementById('btn-flujo-codigo');
    const btnPassword = document.getElementById('btn-flujo-password');
    const vistaPassword = document.getElementById('vista-password');
    const vistaCodigo = document.getElementById('vista-codigo');

    if (flujo === 'codigo') {
        vistaPassword.classList.add('d-none');
        btnCodigo.classList.add('d-none');
        vistaCodigo.classList.remove('d-none');
        btnPassword.classList.remove('d-none');
    } else {
        vistaCodigo.classList.add('d-none');
        btnPassword.classList.add('d-none');
        vistaPassword.classList.remove('d-none');
        btnCodigo.classList.remove('d-none');
    }
}
</script>
@endsection