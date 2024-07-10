@extends('tablar::page')

@section('title', 'Create Perfil')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Create
                    </div>
                    <h2 class="page-title">
                        {{ __('Perfil ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('perfil.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Perfil List
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
                            <h3 class="card-title">Perfil Details</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('perfil.asignarRol', $perfil->id_perfil) }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" name="Nombre" value="{{ $perfil->Nombre }}" class="form-control" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Apellido</label>
                                    <input type="text" name="Apellido" value="{{ $perfil->Apellido }}" class="form-control" disabled>
                                </div>

                                <!-- Dropdown para seleccionar el rol -->
                                <div class="form-group mb-3">
                                    <label class="form-label">Rol</label>
                                    <select name="id_rol" class="form-control">
                                        @foreach($roles as $id => $nombre)
                                            <option value="{{ $id }}" {{ $perfil->id_rol == $id ? 'selected' : '' }}>{{ $nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary">Asignar Rol</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

