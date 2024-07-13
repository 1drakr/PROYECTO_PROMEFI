@extends('tablar::page')

@section('title', 'Editar Evaluarproyecto')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Editar
                    </div>
                    <h2 class="page-title">
                        {{ __('Editar Evaluarproyecto') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('evaluarproyecto.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Lista de Evaluar proyectos
                        </a>
                    </div>
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
                            <h3 class="card-title">Detalles de Evaluarproyecto</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('evaluarproyecto.update', $evaluarproyecto->id_evaluarproy ?? 0) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group mb-3">
                                    <label class="form-label">Documento del Proyecto</label>
                                    <div>
                                        <input type="file" name="documento_proyecto" class="form-control{{ $errors->has('documento_proyecto') ? ' is-invalid' : '' }}" required>
                                        {!! $errors->first('documento_proyecto', '<div class="invalid-feedback">:message</div>') !!}
                                        <small class="form-hint">Sube el documento del proyecto en formato PDF, DOC o DOCX.</small>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Documento de Evaluación</label>
                                    <div>
                                        <input type="file" name="documento_evaluacion" class="form-control{{ $errors->has('documento_evaluacion') ? ' is-invalid' : '' }}" required>
                                        {!! $errors->first('documento_evaluacion', '<div class="invalid-feedback">:message</div>') !!}
                                        <small class="form-hint">Sube el documento de evaluación en formato PDF, DOC o DOCX.</small>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Proyecto fue Aprobado ??</label>
                                    <div>
                                        <select name="id_estado" class="form-control{{ $errors->has('id_estado') ? ' is-invalid' : '' }}">
                                            <option value="10">Evaluación Completada</option>
                                            <option value="11">Evaluación Rechazada</option>
                                        </select>
                                        {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>

                                <div class="form-footer">
                                    <div class="text-end">
                                        <div class="d-flex">
                                            <a href="{{ route('evaluarproyecto.index') }}" class="btn btn-danger">Cancelar</a>
                                            <button type="submit" class="btn btn-primary ms-auto">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Documento del Proyecto</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{ asset('storage/' . $pdfPath) }}" class="btn btn-info" download>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="12" y1="4" x2="12" y2="16"/>
                                    <line x1="12" y1="16" x2="16" y2="12"/>
                                    <line x1="12" y1="16" x2="8" y2="12"/>
                                    <line x1="4" y1="20" x2="20" y2="20"/>
                                </svg>
                                Descargar Documento del Proyecto
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

