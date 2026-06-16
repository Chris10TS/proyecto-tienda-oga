@extends('layouts.app')

@section('titulo', 'Mis Favoritos')

@section('contenido')
<div class="container-fluid bg-light-profile py-5">
    <div class="container container-profile">
        <div class="row g-4">
            
            <div class="col-md-4 col-lg-3">
                <div class="d-flex align-items-center gap-3 mb-4 ps-2">
                    <div class="avatar-circle">
                        <i class="ti ti-user fs-2 text-secondary"></i>
                    </div>
                    <h5 class="mb-0 fw-normal text-dark">Hola!</h5>
                </div>

                <div class="d-flex flex-column sidebar-profile-menu gap-1">
                    <a href="/perfil" class="sidebar-link">Perfil</a>
                    <a href="/historial" class="sidebar-link">Pedidos</a>
                    <a href="/favoritos" class="sidebar-link active">Lista de deseos</a>
                    
                    <a href="{{ route('logout') }}" class="sidebar-link text-muted mt-2"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Salir
                    </a>
                </div>
            </div>

            <div class="col-md-8 col-lg-9">
    <h2 class="fw-bold text-dark mb-4 profile-main-title">Lista de deseos</h2>

    @if($productosFavoritos->isEmpty())
        <div class="text-center py-5 bg-white rounded-4 shadow-sm">
            <i class="ti ti-heart-broken fs-1 text-muted mb-3 d-block"></i>
            <p class="text-muted mb-0">Tu lista de deseos está vacía.</p>
        </div>
    @else
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
            @foreach($productosFavoritos as $prodFav)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-3 bg-white position-relative">
                        
                        <form action="/favoritos/eliminar/{{ $prodFav->id }}" method="POST" class="position-absolute top-0 end-0 mt-3 me-3">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn p-0 border-0 shadow-none text-danger">
                                <i class="ti ti-heart-broken fs-4"></i>
                            </button>
                        </form>

                        <div class="text-center py-3" style="height: 150px;">
                            <img src="{{ asset($prodFav->imagen) }}" class="img-fluid h-100 object-fit-contain" alt="{{ $prodFav->nombre }}">
                        </div>
                        
                        <div class="card-body p-0 pt-2 d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="fw-bold text-dark mb-1">$ {{ number_format($prodFav->precio, 0, ',', '.') }}</h5>
                                <p class="text-secondary small mb-3 text-truncate-2" style="height: 38px; overflow: hidden;">{{ $prodFav->nombre }}</p>
                            </div>
                            <div class="d-grid">
                                <a href="/producto/{{ $prodFav->id }}" class="btn btn-primary btn-sm rounded-pill fw-bold" style="background-color: #1a4ca1; border: none;">
                                    Ver producto
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

        </div>
    </div>
</div>
@endsection