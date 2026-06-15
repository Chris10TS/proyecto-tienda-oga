@extends('layouts.app')

@section('titulo', 'Finalizar Pago')

@section('contenido')
<div class="container my-5" style="max-width: 700px;">
    <h2 class="mb-4 fw-bold"><i class="ti ti-credit-card text-warning"></i> Opciones de Pago</h2>
    
    <div class="card shadow-sm border-0 p-4 bg-white">
        <form action="{{ route('carrito.confirmar') }}" method="POST">
            @csrf
            
            <h5 class="fw-bold mb-3">1. Seleccioná tu método de pago</h5>
            
            <div class="form-check border rounded p-3 mb-3 d-flex align-items-center gap-2">
                <input class="form-check-input ms-1" type="radio" name="metodo_pago" id="tarjeta_credito" value="tarjeta" checked onclick="alternarFormulario('formulario_tarjeta')">
                <label class="form-check-label fw-bold mb-0 ms-2" for="tarjeta_credito">
                    <i class="ti ti-credit-card fs-4 me-1"></i> Tarjeta de Crédito o Débito
                </label>
            </div>

            <div class="form-check border rounded p-3 mb-4 d-flex align-items-center gap-2">
                <input class="form-check-input ms-1" type="radio" name="metodo_pago" id="efectivo" value="efectivo" onclick="alternarFormulario('formulario_efectivo')">
                <label class="form-check-label fw-bold mb-0 ms-2" for="efectivo">
                    <i class="ti ti-building-bank fs-4 me-1"></i> Efectivo (Pago Fácil / Rapipago)
                </label>
            </div>

            <div id="formulario_tarjeta" class="mb-4 bg-light p-3 rounded border">
                <h6 class="fw-bold mb-3 text-muted">Datos de la tarjeta</h6>
                <div class="mb-3">
                    <label class="form-label small fw-bold">Número de Tarjeta</label>
                    <input type="text" class="form-control" placeholder="0000 0000 0000 0000" id="input_tarjeta" required>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label small fw-bold">Vencimiento</label>
                        <input type="text" class="form-control" placeholder="MM/AA" id="input_vence" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label small fw-bold">CVC (Cod. Seguridad)</label>
                        <input type="text" class="form-control" placeholder="123" id="input_cvc" required>
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label small fw-bold">Nombre del Titular</label>
                    <input type="text" class="form-control" placeholder="Como figura en la tarjeta" id="input_titular" required>
                </div>
            </div>

            <div id="formulario_efectivo" class="mb-4 bg-light p-3 rounded border d-none">
                <h6 class="fw-bold mb-2 text-muted">Pago en Sucursal</h6>
                <p class="small text-muted mb-0">Al confirmar, el sistema generará un código de barra para que puedas abonar en cualquier sucursal de <strong>Pago Fácil</strong> o <strong>Rapipago</strong> dentro de las próximas 48hs.</p>
            </div>

            <hr>
            
            <button type="submit" class="btn btn-success w-100 fw-bold py-2 fs-5 shadow-sm">
                <i class="ti ti-lock"></i> Pagar y Finalizar Compra
            </button>
        </form>
    </div>
</div>

<script>
function alternarFormulario(formularioVisble) {
    const formTarjeta = document.getElementById('formulario_tarjeta');
    const formEfectivo = document.getElementById('formulario_efectivo');
    
    const inputs = ['input_tarjeta', 'input_vence', 'input_cvc', 'input_titular'];

    if (formularioVisble === 'formulario_tarjeta') {
        formTarjeta.classList.remove('d-none');
        formEfectivo.classList.add('d-none');
        inputs.forEach(id => document.getElementById(id).setAttribute('required', 'true'));
    } else {
        formTarjeta.classList.add('d-none');
        formEfectivo.classList.remove('d-none');
        inputs.forEach(id => document.getElementById(id).removeAttribute('required'));
    }
}
</script>
@endsection