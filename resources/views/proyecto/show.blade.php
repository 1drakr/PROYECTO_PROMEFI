@extends('tablar::page')

@section('title', 'View Proyecto')

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
                        {{ __('Proyecto ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('proyecto.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Proyecto List
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
                            <h3 class="card-title">Proyecto Details</h3>
                        </div>
                        <div class="card-body">

<div class="form-group">
<strong>Id Proyecto:</strong>
{{ $proyecto->id_proyecto }}
</div>
<div class="form-group">
<strong>Titulo:</strong>
{{ $proyecto->titulo }}
</div>
<div class="form-group">
<strong>Subtitulo:</strong>
{{ $proyecto->subtitulo }}
</div>
<div class="form-group">
<strong>Categoria Principal:</strong>
{{ $proyecto->categoria_principal }}
</div>
<div class="form-group">
<strong>Categoria:</strong>
{{ $proyecto->categoria }}
</div>
<div class="form-group">
<strong>Subcategoria:</strong>
{{ $proyecto->subcategoria }}
</div>
<div class="form-group">
<strong>Ubicacion:</strong>
{{ $proyecto->ubicacion }}
</div>
<div class="form-group">
<strong>Imagen:</strong>
{{ $proyecto->imagen }}
</div>
<div class="form-group">
<strong>Video:</strong>
{{ $proyecto->video }}
</div>
<div class="form-group">
<strong>Fecha Limite:</strong>
{{ $proyecto->fecha_limite }}
</div>
<div class="form-group">
<strong>Duracion Campaña:</strong>
{{ $proyecto->duracion_campaña }}
</div>
<div class="form-group">
<strong>Monto Meta:</strong>
{{ $proyecto->monto_meta }}
</div>
<div class="form-group">
<strong>Riesgos Desafios:</strong>
{{ $proyecto->riesgos_desafios }}
</div>
<div class="form-group">
<strong>Uso Ia:</strong>
{{ $proyecto->uso_ia }}
</div>
<div class="form-group">
<strong>Tipo Proyecto:</strong>
{{ $proyecto->tipo_proyecto }}
</div>
<div class="form-group">
<strong>Pago:</strong>
{{ $proyecto->pago }}
</div>
<div class="form-group">
<strong>Id Estado:</strong>
{{ $proyecto->id_estado }}
</div>
<div class="form-group">
<strong>Completado:</strong>
{{ $proyecto->completado }}
</div>
<div class="form-group">
<strong>Id Perfil:</strong>
{{ $proyecto->id_perfil }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


