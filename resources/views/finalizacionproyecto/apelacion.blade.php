@extends('tablar::page')

@section('title', 'Apelación de Finalización del Proyecto')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Apelación</div>
                    <h2 class="page-title">Apelación de Finalización del Proyecto</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Apelación de Finalización del Proyecto</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('finalizacionproyecto.storeApelacion', $finalizacionproyecto->id_finalizacionproyecto) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="form-label">Justificación</label>
                                    <textarea name="justificacion" class="form-control @error('justificacion') is-invalid @enderror" required></textarea>
                                    @error('justificacion')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Documento de Justificación</label>
                                    <input type="file" name="documento_justificacion" class="form-control">
                                    @error('documento_justificacion')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Nueva Fecha Límite</label>
                                    <input type="date" name="nueva_fecha_limite" class="form-control @error('nueva_fecha_limite') is-invalid @enderror" required>
                                    @error('nueva_fecha_limite')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
