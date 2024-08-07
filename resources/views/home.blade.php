@extends('tablar::page')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-white">New view</a>
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                           data-bs-target="#modal-report">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Create new report
                        </a>
                        <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                           data-bs-target="#modal-report" aria-label="Create new report">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <!-- Mostrar mensajes de error -->
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Proyectos</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <form action="{{ route('home') }}" method="GET">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="titulo" class="form-label">Título</label>
                                        <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Buscar por título" value="{{ request('titulo') }}">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="categoria" class="form-label">Categoría</label>
                                        <input type="text" name="categoria" id="categoria" class="form-control" placeholder="Buscar por categoría" value="{{ request('categoria') }}">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="ubicacion" class="form-label">Ubicación</label>
                                        <input type="text" name="ubicacion" id="ubicacion" class="form-control" placeholder="Buscar por ubicación" value="{{ request('ubicacion') }}">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                                        <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="{{ request('fecha_inicio') }}">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="fecha_termino" class="form-label">Fecha Término</label>
                                        <input type="date" name="fecha_termino" id="fecha_termino" class="form-control" value="{{ request('fecha_termino') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-end">
                                        <button type="submit" class="btn btn-primary">Buscar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <tr>
                                        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                                        <th class="w-1">No.
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <polyline points="6 15 12 9 18 15"/>
                                            </svg>
                                        </th>
                                        <th>Id Proyecto</th>
                                        <th>Título</th>
                                        <th>Subtítulo</th>
                                        <th>Categoría Principal</th>
                                        <th>Categoría</th>
                                        <th>Subcategoría</th>
                                        <th>Ubicación</th>
                                        <th>Fecha Límite</th>
                                        <th>Duración Campaña</th>
                                        <th>Monto Meta</th>
                                        <th>Riesgos Desafíos</th>
                                        <th>Tipo Proyecto</th>
                                        <th>Pago</th>
                                        <th>Estado</th>
                                        <th>Completado</th>
                                        <th>Perfil Nombre</th>
                                        <th>Perfil Apellido</th>
                                        <th>Perfil Ubicación</th>
                                        <th>Perfil Zona Horaria</th>
                                        <th>User Name</th>
                                        <th>User Email</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($proyectos as $proyecto)
                                        <tr class="{{ $proyecto->ha_pasado_fecha_limite ? 'bg-warning' : '' }}">
                                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select proyecto"></td>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $proyecto->id_proyecto }}</td>
                                            <td>{{ Str::limit($proyecto->titulo, 20) }}</td>
                                            <td>{{ Str::limit($proyecto->subtitulo, 20) }}</td>
                                            <td>{{ $proyecto->categoria_principal }}</td>
                                            <td>{{ $proyecto->categoria }}</td>
                                            <td>{{ $proyecto->subcategoria }}</td>
                                            <td>{{ $proyecto->ubicacion }}</td>
                                            <td>{{ $proyecto->fecha_limite }}</td>
                                            <td>{{ $proyecto->duracion_campaña }}</td>
                                            <td>{{ number_format($proyecto->monto_meta, 2) }}</td>
                                            <td>{{ Str::limit($proyecto->riesgos_desafios, 20) }}</td>
                                            <td>{{ $proyecto->tipo_proyecto }}</td>
                                            <td>{{ $proyecto->pago }}</td>
                                            <td>{{ $proyecto->estado->nombre_estado }}</td>
                                            <td>{{ $proyecto->completado }}</td>
                                            <td>{{ $proyecto->perfil->Nombre }}</td>
                                            <td>{{ $proyecto->perfil->Apellido }}</td>
                                            <td>{{ $proyecto->perfil->Ubicacion }}</td>
                                            <td>{{ $proyecto->perfil->ZonaHoraria }}</td>
                                            <td>{{ $proyecto->perfil->user->name }}</td>
                                            <td>{{ $proyecto->perfil->user->email }}</td>
                                            <td>
                                                <div class="btn-list flex-nowrap">
                                                    <div class="dropdown">
                                                        <button class="btn dropdown-toggle align-text-top"
                                                                data-bs-toggle="dropdown">
                                                            Actions
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item"
                                                               href="{{ route('proyecto.show',$proyecto->id_proyecto) }}">
                                                                View
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="24">No Data Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            {!! $proyectos->links('tablar::pagination') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
