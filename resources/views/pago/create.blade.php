@extends('tablar::page')

@section('title', 'Crear Pago')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">Crear</div>
                <h2 class="page-title">{{ __('Pago') }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        @if(config('tablar','display_alert'))
            @include('tablar::common.alert')
        @endif
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Seleccione el tipo de pago</h3>
                    </div>
                    <div class="card-body">
                        <form id="paymentTypeForm">
                            <div class="form-group mb-3">
                                <label for="project" class="form-label">Proyecto</label>
                                <select id="project" name="project" class="form-control" onchange="updateProjectId(this.value)">
                                    <option value="" disabled selected>Seleccione un proyecto</option>
                                    @foreach($proyectos as $proyecto)
                                        <option value="{{ $proyecto->id_proyecto }}">{{ $proyecto->titulo }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="paymentType" class="form-label">Tipo de Pago</label>
                                <select id="paymentType" class="form-control" onchange="showPaymentForm()">
                                    <option value="" disabled selected>Seleccione un tipo de pago</option>
                                    <option value="donador">Donador</option>
                                    <option value="patrocinador">Patrocinador</option>
                                </select>
                            </div>
                        </form>

                        <div id="donadorForm" style="display:none;">
                            <form method="POST" action="{{ route('pago.store') }}" id="ajaxForm" role="form"
                            enctype="multipart/form-data">
                                @csrf
                                @include('pago.form')
                            </form>
                        </div>

                        <div id="patrocinadorForm" style="display:none;">
                            <form method="POST" action="{{ route('pagopatrocinador.store') }}" id="ajaxForm" role="form" enctype="multipart/form-data">
                                @csrf
                                @include('pago-patrocinador.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function showPaymentForm() {
    const paymentType = document.getElementById('paymentType').value;
    document.getElementById('donadorForm').style.display = 'none';
    document.getElementById('patrocinadorForm').style.display = 'none';

    if (paymentType === 'donador') {
        document.getElementById('donadorForm').style.display = 'block';
    } else if (paymentType === 'patrocinador') {
        document.getElementById('patrocinadorForm').style.display = 'block';
    }
}
</script>
@endsection
