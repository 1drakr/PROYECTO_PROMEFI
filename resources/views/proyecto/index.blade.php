@extends('tablar::page')

@section('title')
    Proyecto
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        List
                    </div>
                    <h2 class="page-title">
                        {{ __('Proyecto') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('proyecto.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Create Proyecto
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
                            <h3 class="card-title">Proyecto</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-muted">
                                    Show
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="10" size="3" aria-label="Invoices count">
                                    </div>
                                    entries
                                </div>
                                <div class="ms-auto text-muted">
                                    Search:
                                    <div class="ms-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive min-vh-100">
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
                                    <th>Titulo</th>
                                    <th>Subtitulo</th>
                                    <th>Categoria Principal</th>
                                    <th>Categoria</th>
                                    <th>Subcategoria</th>
                                    <th>Ubicacion</th>
                                    <th>Fecha Limite</th>
                                    <th>Duracion Campaña</th>
                                    <th>Monto Meta</th>
                                    <th>Riesgos Desafios</th>
                                    <th>Tipo Proyecto</th>
                                    <th>Pago</th>
                                    <th>Estado</th>
                                    <th>Completado</th>
                                    <th>Perfil Nombre</th>
                                    <th>Perfil Apellido</th>
                                    <th>Perfil Ubicacion</th>
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
                                                        <a class="dropdown-item"
                                                           href="{{ route('proyecto.edit',$proyecto->id_proyecto) }}">
                                                            Edit
                                                        </a>
                                                        <form action="{{ route('proyecto.finalizar', $proyecto->id_proyecto) }}"
                                                              method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                    onclick="if(!confirm('¿Deseas proceder con la finalización?')){return false;}"
                                                                    class="dropdown-item text-red">
                                                                Finalizar
                                                            </button>
                                                        </form>
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
