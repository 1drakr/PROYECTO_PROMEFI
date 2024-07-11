<div class="form-group mb-3">
    @if(isset($comentario->id_comentario))
    <label class="form-label" for="id_comentario">Id Comentario</label>
    <div>
        <input type="text" name="id_comentario" id="id_comentario" class="form-control{{ $errors->has('id_comentario') ? ' is-invalid' : '' }}" value="{{ old('id_comentario', $comentario->id_comentario) }}" placeholder="Id Comentario">
        {!! $errors->first('id_comentario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">comentario <b>id_comentario</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label" for="id_proyecto">Proyecto</label>
    <div>
        <select name="id_proyecto" id="id_proyecto" class="form-control{{ $errors->has('id_proyecto') ? ' is-invalid' : '' }}" placeholder="Seleccione un proyecto">
            <option value="">Seleccione un proyecto</option>
            @foreach($proyectos as $proyecto)
                <option value="{{ $proyecto->id_proyecto }}" {{ old('id_proyecto', $comentario->id_proyecto) == $proyecto->id_proyecto ? 'selected' : '' }}>
                    {{ $proyecto->titulo }}
                </option>
            @endforeach
        </select>
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="usuario">Usuario</label>
    <div>
        <input type="text" name="usuario" id="usuario" class="form-control" value="{{ $perfil->Nombre . ' ' . $perfil->Apellido }}" readonly>
        <input type="hidden" name="id_perfil" value="{{ $perfil->id_perfil }}">
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="contenido">Contenido</label>
    <div>
        <textarea name="contenido" id="contenido" class="form-control{{ $errors->has('contenido') ? ' is-invalid' : '' }}" placeholder="Contenido">{{ old('contenido', $comentario->contenido) }}</textarea>
        {!! $errors->first('contenido', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="/comentario" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
        </div>
    </div>
</div>
