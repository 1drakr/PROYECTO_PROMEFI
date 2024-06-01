@extends('tablar::page')

@section('title')
Evaluacion de proyecto
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Lista
                    </div>
                    <h2 class="page-title">
                        {{ __('Evaluacion de proyecto ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        {{-- <a href="{{ route('evaluarproyecto.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Create Evaluarproyecto
                        </a> --}}
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
                            <h3 class="card-title">Evaluacion de proyecto</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-muted">
                                    Show
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="10" size="3"
                                               aria-label="Invoices count">
                                    </div>
                                    entries
                                </div>
                                <div class="ms-auto text-muted">
                                    Search:
                                    <div class="ms-2 d-inline-block">
                                        <input type="text" id="search" class="form-control form-control-sm"
                                               aria-label="Search invoice">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive min-vh-100">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                <tr>
                                    <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                                           aria-label="Select all invoices"></th>
                                    <th class="w-1">No.
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-sm text-dark icon-thick" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="6 15 12 9 18 15"/>
                                        </svg>
                                    </th>
                                    <th>Id Evaluarproy</th>
                                    <th>Id Solicitud</th>
                                    <th>Documento Proyecto</th>
                                    <th>Documento Evaluacion</th>
                                    <th>Id Estado</th>
                                    <th class="w-1"></th>
                                </tr>
                                </thead>

                                <tbody id="evaluarproyectos-table">
                                @forelse ($evaluarproyectos as $evaluarproyecto)
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                   aria-label="Select evaluarproyecto"></td>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $evaluarproyecto->id_evaluarproy }}</td>
                                        <td>{{ $evaluarproyecto->id_solicitud }}</td>
                                        <td>
                                            <a href="{{ Storage::url( $evaluarproyecto->documento_proyecto) }}" class="btn btn-primary" download>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 3v12m-3 -3l3 3l3 -3" />
                                                    <path d="M9 15h6v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-4z" />
                                                    <path d="M13 15h4a1 1 0 0 0 1 -1v-11a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v11a1 1 0 0 0 1 1h4" />
                                                </svg>
                                                Descargar Documento Proyecto
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ Storage::url( $evaluarproyecto->documento_evaluacion) }}" class="btn btn-primary" download>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M12 3v12m-3 -3l3 3l3 -3" />
                                                    <path d="M9 15h6v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-4z" />
                                                    <path d="M13 15h4a1 1 0 0 0 1 -1v-11a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v11a1 1 0 0 0 1 1h4" />
                                                </svg>
                                                Descargar Documento Evaluación
                                            </a>
                                        </td>
                                        {{-- <td><a href="{{ $evaluarproyecto->documento_proyecto }}" download>Descargar Documento Proyecto</a></td>
                                        <td><a href="{{ $evaluarproyecto->documento_evaluacion }}" download>Descargar Documento Evaluación</a></td> --}}
                                        <td>{{ $evaluarproyecto->id_estado }}</td>
                                        <td>
                                            <div class="btn-list flex-nowrap">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle align-text-top"
                                                            data-bs-toggle="dropdown">
                                                        Actions
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                           href="{{ route('evaluarproyecto.show',$evaluarproyecto->id_evaluarproy) }}">
                                                            Evaluar Proyecto
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <td>No Data Found</td>
                                @endforelse
                                </tbody>

                            </table>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            {!! $evaluarproyectos->links('tablar::pagination') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('search').addEventListener('input', function (e) {
            const query = e.target.value;

            fetch(`{{ route('evaluarproyecto.search') }}?query=${query}`)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('evaluarproyectos-table').innerHTML = html;
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
@endsection
