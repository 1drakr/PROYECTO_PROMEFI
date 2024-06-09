@extends('tablar::page')

@section('title', 'Subir Documento de Validación')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Subir
                    </div>
                    <h2 class="page-title">
                        {{ __('Subir Documento de Validación') }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            @if(config('tablar','display_alert'))
                @include('tablar::common.alert')
            @endif
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Subir Documento de Validación</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('validacionproyecto.update', $validacionproyecto->id_validacionproy) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group mb-3">
                                    <label class="form-label">Documento de Validación</label>
                                    <input type="file" name="documento_validacion" class="form-control" required>
                                    @error('documento_validacion')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Proyecto fue Aprobado?</label>
                                    <div>
                                        <select name="id_estado" id="id_estado" class="form-control{{ $errors->has('id_estado') ? ' is-invalid' : '' }}">
                                            <option value="12">Validación Aprobada</option>
                                            <option value="9">Validación Rechazada</option>
                                            <option value="13">Esperando Corrección</option>
                                        </select>
                                        {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="form-group mb-3" id="correction-file-group" style="display: none;">
                                    <label class="form-label">Subir Archivo de Corrección</label>
                                    <div>
                                        <input type="file" name="archivo_correccion" class="form-control @error('archivo_correccion') is-invalid @enderror">
                                        @error('archivo_correccion')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary">Subir Documento</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var estadoSelect = document.getElementById('id_estado');
            var correctionFileGroup = document.getElementById('correction-file-group');

            function toggleCorrectionFileGroup() {
                if (estadoSelect.value == '13') {
                    correctionFileGroup.style.display = 'block';
                } else {
                    correctionFileGroup.style.display = 'none';
                }
            }

            estadoSelect.addEventListener('change', toggleCorrectionFileGroup);

            // Call the function on page load to set the correct state
            toggleCorrectionFileGroup();
        });
    </script>
@endsection
