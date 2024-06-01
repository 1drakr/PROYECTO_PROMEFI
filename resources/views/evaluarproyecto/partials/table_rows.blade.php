@foreach ($evaluarproyectos as $evaluarproyecto)
    <tr>
        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select evaluarproyecto"></td>
        <td>{{ ++$i }}</td>
        <td>{{ $evaluarproyecto->id_evaluarproy }}</td>
        <td>{{ $evaluarproyecto->id_solicitud }}</td>
        <td>{{ $evaluarproyecto->documento_proyecto }}</td>
        <td>{{ $evaluarproyecto->documento_evaluacion }}</td>
        <td>{{ $evaluarproyecto->id_estado }}</td>
        <td>
            <div class="btn-list flex-nowrap">
                <div class="dropdown">
                    <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                        Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{ route('evaluarproyecto.show',$evaluarproyecto->id_evaluarproy) }}">
                            Evaluar Proyecto
                        </a>
                    </div>
                </div>
            </div>
        </td>
    </tr>
@endforeach
