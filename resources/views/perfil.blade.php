@extends('layouts.app')

@section('titulo', 'Mi Perfil')

@section('contenido')
<div class="container-fluid bg-light-profile py-5">
    <div class="container container-profile">
        <div class="row g-4">
            
           <!-- COLUMNA IZQUIERDA: Menú Lateral -->
        <div class="col-md-4 col-lg-3">
         <div class="d-flex align-items-center gap-3 mb-4 ps-2">
          <div class="avatar-circle">
            <i class="ti ti-user fs-2 text-secondary"></i>
           </div>
           <h5 class="mb-0 fw-normal text-dark">Hola!</h5>
         </div>

          <!-- CAMBIO AQUÍ: Añadimos la clase d-flex y flex-column -->
          <div class="d-flex flex-column sidebar-profile-menu gap-1">
            <a href="/perfil" class="sidebar-link active">Perfil</a>
            <a href="/historial" class="sidebar-link">Pedidos</a>
            <a href="/favoritos" class="sidebar-link">Lista de deseos</a>
        
            <a href="{{ route('logout') }}" class="sidebar-link text-muted mt-2"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Salir
             </a>
         </div>
</div>

            <!-- COLUMNA DERECHA: Contenido del Perfil -->
            <div class="col-md-8 col-lg-9">
                <h2 class="fw-bold text-dark mb-4 profile-main-title">Perfil</h2>

                <div class="row g-4">
                    <!-- Tarjeta Principal de Datos -->
                    <div class="col-lg-8">
                        <div class="card card-profile-data p-4 position-relative border-0 shadow-sm rounded-4 bg-white">
                            <!-- Icono de edición (Lapicito) -->
                            <a href="#" class="position-absolute top-0 end-0 mt-4 me-4 text-secondary link-edit-profile">
                                <i class="ti ti-pencil fs-4"></i>
                            </a>

                                <div class="row g-4">
                                     @php
                                     $partesNombre = explode(' ', Auth::user()->name, 2);
                                     $nombre = $partesNombre[0] ?? '';
                                     $apellido = $partesNombre[1] ?? '-';
                                     @endphp

                                <div class="col-6">
                                     <span class="d-block text-profile-label">Nombre</span>
                                     <span class="d-block text-profile-value">{{ $nombre }}</span>
                                </div>
    
                                <div class="col-6">
                                     <span class="d-block text-profile-label">Apellido</span>
                                     <span class="d-block text-profile-value {{ $apellido === '-' ? 'text-muted-placeholder' : '' }}">
                                     {{ $apellido }}
                                     </span>
                                </div>
                                
                                <div class="col-12">
                                    <span class="d-block text-profile-label">Email</span>
                                    <span class="d-block text-profile-value text-break">{{ Auth::user()->email }}</span>
                                </div>

                                <div class="col-6">
                                    <span class="d-block text-profile-label">DNI</span>
                                    <span class="d-block text-profile-value text-muted-placeholder">-</span>
                                </div>
                                <div class="col-6">
                                    <span class="d-block text-profile-label">Género</span>
                                    <span class="d-block text-profile-value text-muted-placeholder">-</span>
                                </div>

                                <div class="col-6">
                                    <span class="d-block text-profile-label">Fecha de nacimiento</span>
                                    <span class="d-block text-profile-value text-muted-placeholder">-</span>
                                </div>
                                <div class="col-6">
                                    <span class="d-block text-profile-label">Teléfono</span>
                                    <span class="d-block text-profile-value text-muted-placeholder">-</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta Lateral: Boletín Informativo -->
                    <div class="col-lg-4">
                        <div class="card card-profile-newsletter p-4 border-0 shadow-sm rounded-4 bg-white">
                            <h6 class="fw-bold text-dark mb-2 newsletter-title">BOLETÍN INFORMATIVO</h6>
                            <p class="text-muted small mb-4">¿Quiere recibir boletines informativos promocionales?</p>
                            
                            <div class="form-check d-flex align-items-start gap-2">
                                <input class="form-check-input mt-1 shadow-none" type="checkbox" id="newsletterCheck">
                                <label class="form-check-label small fw-bold text-decoration-underline text-dark" for="newsletterCheck" style="cursor: pointer; line-height: 1.4;">
                                    Quiero recibir el boletín informativo con promociones.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection