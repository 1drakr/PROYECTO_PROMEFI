@extends('tablar::page')

@section('title', 'View Validacionproyecto')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        View
                    </div>
                    <h2 class="page-title">
                        {{ __('Validacion proyecto ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('validacionproyecto.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Validacion proyecto Lista
                        </a>
                        <a href="{{ route('validacionproyecto.edit', $validacionproyecto->id_validacionproy) }}" class="btn btn-secondary d-none d-sm-inline-block">                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                           <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                           <line x1="12" y1="5" x2="12" y2="19"/>
                           <line x1="5" y1="12" x2="19" y2="12"/>
                       </svg>
                            Subir Documento de Validación
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Validacion proyecto Detalles</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <strong>Documento Proyecto:</strong>
                                @if ($validacionproyecto->evaluarproyecto && $validacionproyecto->evaluarproyecto->documento_proyecto)
                                    <a href="{{ Storage::url($validacionproyecto->evaluarproyecto->documento_proyecto) }}" class="btn btn-secondary" download>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h4l6 6v10a2 2 0 0 1 -2 2z"></path>
                                        </svg> Descargar Documento del Proyecto
                                    </a>
                                @else
                                    <p>No disponible</p>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group">
                                <strong>Documento Evaluacion:</strong>
                                @if ($validacionproyecto->evaluarproyecto && $validacionproyecto->evaluarproyecto->documento_evaluacion)
                                    <a href="{{ Storage::url($validacionproyecto->evaluarproyecto->documento_evaluacion) }}" class="btn btn-secondary" download>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h4l6 6v10a2 2 0 0 1 -2 2z"></path>
                                        </svg> Descargar Documento de Evaluación
                                    </a>
                                @else
                                    <p>No disponible</p>
                                @endif
                            </div>
                            <hr>
                            <div class="form-group">
                                <strong>Documento Validacion:</strong>
                                @if ($validacionproyecto->documento_validacion)
                                    <a href="{{ Storage::url($validacionproyecto->documento_validacion) }}" class="btn btn-secondary" download>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h4l6 6v10a2 2 0 0 1 -2 2z"></path>
                                        </svg> Descargar Documento de Validación
                                    </a>
                                @else
                                    <p>No disponible</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
