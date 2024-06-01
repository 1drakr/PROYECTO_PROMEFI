@extends('tablar::page')

@section('title', 'View Evaluarproyecto')

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
                        {{ __('Evaluacion de proyecto ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('evaluarproyecto.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Evaluar proyecto Lista
                        </a>
                        <a href="{{ route('evaluarproyecto.create', ['solicitud_id' => $evaluarproyecto->solicitud->id_solicitudProy]) }}" class="btn btn-success d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Generar Documento de Proyecto
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
                            <h3 class="card-title">Detalles del Proyecto</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <strong>Título:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->titulo }}
                            </div>
                            <div class="form-group">
                                <strong>Subtítulo:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->subtitulo }}
                            </div>
                            <div class="form-group">
                                <strong>Categoría Principal:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->categoria_principal }}
                            </div>
                            <div class="form-group">
                                <strong>Categoría:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->categoria }}
                            </div>
                            <div class="form-group">
                                <strong>Subcategoría:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->subcategoria }}
                            </div>
                            <div class="form-group">
                                <strong>Ubicación:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->ubicacion }}
                            </div>
                            <div class="form-group">
                                <strong>Fecha Límite:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->fecha_limite }}
                            </div>
                            <div class="form-group">
                                <strong>Duración de la Campaña:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->duracion_campaña }}
                            </div>
                            <div class="form-group">
                                <strong>Monto Meta:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->monto_meta }}
                            </div>
                            <div class="form-group">
                                <strong>Riesgos y Desafíos:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->riesgos_desafios }}
                            </div>
                            <div class="form-group">
                                <strong>Tipo de Proyecto:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->tipo_proyecto }}
                            </div>
                            <div class="form-group">
                                <strong>Estado:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->estado->nombre }}
                            </div>
                            <div class="form-group">
                                <strong>Nombre del Perfil:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->perfil->Nombre }}
                            </div>
                            <div class="form-group">
                                <strong>Apellido del Perfil:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->perfil->Apellido }}
                            </div>
                            <div class="form-group">
                                <strong>Ubicación del Perfil:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->perfil->ubicacion }}
                            </div>
                            <div class="form-group">
                                <strong>Zona Horaria del Perfil:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->perfil->zona_horaria }}
                            </div>
                            <div class="form-group">
                                <strong>Nombre de Usuario:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->perfil->user->name }}
                            </div>
                            <div class="form-group">
                                <strong>Email de Usuario:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->perfil->user->email }}
                            </div>
                            <div class="form-group">
                                <strong>Título de la Historia:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->historia->titulo }}
                            </div>
                            <div class="form-group">
                                <strong>Texto de la Historia:</strong>
                                {{ $evaluarproyecto->solicitud->proyecto->historia->texto }}
                            </div>

                            <!-- Informe de Evaluación -->
                            @if(!empty($evaluation_report))
                                <div class="form-group">
                                    <strong>Informe de Evaluación:</strong>
                                    <pre>{{ $evaluation_report }}</pre>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
