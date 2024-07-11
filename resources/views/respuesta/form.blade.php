<div class="form-group mb-3">
    @if(isset($respuesta->id_respuesta))
    <label class="form-label" for="id_respuesta">ID Respuesta</label>
    <div>
        <input type="text" name="id_respuesta" id="id_respuesta" class="form-control{{ $errors->has('id_respuesta') ? ' is-invalid' : '' }}" value="{{ old('id_respuesta', $respuesta->id_respuesta) }}" placeholder="ID Respuesta" readonly="readonly">
        {!! $errors->first('id_respuesta', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    @endif
</div>

<div class="form-group mb-3">
    <label class="form-label" for="id_comentario">ID Comentario</label>
    <div>
        <input type="text" name="id_comentario" id="id_comentario" class="form-control{{ $errors->has('id_comentario') ? ' is-invalid' : '' }}" value="{{ old('id_comentario', $respuesta->id_comentario) }}" placeholder="ID Comentario" readonly="readonly">
        {!! $errors->first('id_comentario', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="usuario">Usuario</label>
    <div>
        <input type="text" name="usuario" id="usuario" class="form-control" value="{{ old('usuario', $perfil->Nombre." ".$perfil->Apellido) }}" readonly="readonly">
        <input type="hidden" name="id_perfil" value="{{ $perfil->id_perfil }}">
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="contenido">Contenido</label>
    <div>
        <textarea name="contenido" id="contenido" class="form-control{{ $errors->has('contenido') ? ' is-invalid' : '' }}" placeholder="Contenido">{{ old('contenido', $respuesta->contenido) }}</textarea>
        {!! $errors->first('contenido', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('comentario.index') }}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
        </div>
    </div>
</div>
