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


<div class="form-group">
<strong>Id Solicitudproy:</strong>
{{ $solicitudproyecto->id_solicitudProy }}
</div>
<div class="form-group">
<strong>Titulo:</strong>
{{ $solicitudproyecto->proyecto->titulo }}
</div>
<div class="form-group">
<strong>Sub titulo:</strong>
{{ $solicitudproyecto->proyecto->subtitulo }}
</div>
<div class="form-group">
<strong>Categoria Principal:</strong>
{{ $solicitudproyecto->proyecto->categoria_principal }}
</div>
<div class="form-group">
<strong>Categoria :</strong>
{{ $solicitudproyecto->proyecto->categoria }}
</div>
<div class="form-group">
<strong>Sub categoria:</strong>
{{ $solicitudproyecto->proyecto->subcategoria }}
</div>
<div class="form-group">
<strong>Ubicacion:</strong>
{{ $solicitudproyecto->proyecto->ubicacion }}
</div>
<div class="form-group">
<strong>Fecha Limite:</strong>
{{ $solicitudproyecto->proyecto->fecha_limite }}
</div>
<div class="form-group">
<strong>Monto:</strong>
{{ $solicitudproyecto->proyecto->monto_meta }}
</div>
<div class="form-group">
<strong>Riesgos y Desafios:</strong>
{{ $solicitudproyecto->proyecto->riesgos_desafios }}
</div>
<div class="form-group">
<strong>Tipo de proyecto:</strong>
{{ $solicitudproyecto->proyecto->tipo_proyecto }}
</div>
<div class="form-group">
<strong>Estado:</strong>
{{ $solicitudproyecto->estado->nombre_estado }}
</div>
<div class="form-group">
<strong>Monto:</strong>
{{ $solicitudproyecto->proyecto->monto_meta }}
</div>
<div class="form-group">
<strong>Titulo de la recompensa:</strong>
{{ $solicitudproyecto->proyecto->recompensas->first()->titulo }}
</div>
<div class="form-group">
<strong>Monto de la recompensa:</strong>
{{ $solicitudproyecto->proyecto->recompensas->first()->monto}}
</div>
<div class="form-group">
<strong>Descripcion de la recompensa:</strong>
{{ $solicitudproyecto->proyecto->recompensas->first()->descripcion}}
</div>
<div class="form-group">
<strong>Envio de la recompensa:</strong>
{{ $solicitudproyecto->proyecto->recompensas->first()->envio }}
</div>
<div class="form-group">
<strong>Fecha de entrega de la recompensa:</strong>
{{ $solicitudproyecto->proyecto->recompensas->first()->fecha_entrega }}
</div>
<div class="form-group">
<strong>Cantidad de la recompensa:</strong>
{{ $solicitudproyecto->proyecto->recompensas->first()->cantidad }}
</div>
<div class="form-group">
<strong>Tiempo de la oferta de la recompensa:</strong>
{{ $solicitudproyecto->proyecto->recompensas->first()->tiempo_oferta }}
</div>
<div class="form-group">
<strong>Nombre de Usuario:</strong>
{{ $solicitudproyecto->user->name }}
</div>
<div class="form-group">
<strong>Correo:</strong>
{{ $solicitudproyecto->user->email }}
</div>
<div class="form-group">
<strong>Nombre:</strong>
{{ $solicitudproyecto->proyecto->perfil->Nombre }}
</div>
<div class="form-group">
<strong>Apellido:</strong>
{{ $solicitudproyecto->proyecto->perfil->Apellido }}
</div>
<div class="form-group">
<strong>Ubicacion:</strong>
{{ $solicitudproyecto->proyecto->perfil->Ubicacion }}
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('solicitudproyecto.evaluar',$solicitudproyecto->id_solicitudProy) }}" class="btn btn-danger">Asignar Rvaluador</a>
        </div>
    </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


