@extends('tablar::page')

@section('title', 'View Solicitudproyecto')

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
                        {{ __('Solicitudproyecto ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('solicitudproyecto.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Solicitudproyecto List
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
                            <h3 class="card-title">Detalles de la Solicitud del proyecto</h3>
                        </div>
                        <div class="card-body">
                            <!-- Formulario para asignar evaluador -->
                            <form action="{{ route('solicitudproyecto.storeEvaluacion') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_solicitudProy" value="{{ $solicitudproyecto->id_solicitudProy }}">
                                <div class="form-group mb-3">
                                    <label class="form-label">{{ Form::label('evaluadores', 'Evaluadores y Administradores') }}</label>
                                    <div>
                                        <select class="form-control{{ $errors->has('evaluadores') ? ' is-invalid' : '' }}" name="id_perfil">
                                            @foreach($usuariosEvaluadores as $perfil)
                                                <option value="{{ $perfil->id_perfil }}">{{ $perfil->Nombre }} {{ $perfil->Apellido }}</option>
                                            @endforeach
                                        </select>
                                        {!! $errors->first('evaluadores', '<div class="invalid-feedback">:message</div>') !!}
                                        <small class="form-hint">Selecciona un evaluador o administrador.</small>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-danger">Asignar Evaluador</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
