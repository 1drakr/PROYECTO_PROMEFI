@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Informe de Evaluación del Proyecto</h1>
    <div class="card">
        <div class="card-body">
            <pre>{{ $evaluation_report }}</pre>
        </div>
    </div>
    <a href="{{ route('evaluarproyecto.show', $evaluarproyecto->id_evaluarproy) }}" class="btn btn-primary">Volver al Proyecto</a>
</div>
@endsection
