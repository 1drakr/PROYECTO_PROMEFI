<div class="form-group mb-3">
    @if(isset($respuesta->id_respuesta))
    <label class="form-label">{{ Form::label('id_respuesta') }}</label>
    <div>
        {{ Form::text('id_respuesta', $respuesta->id_respuesta, ['class' => 'form-control' . ($errors->has('id_respuesta') ? ' is-invalid' : ''), 'placeholder' => 'ID Respuesta', 'readonly' => 'readonly']) }}
        {!! $errors->first('id_respuesta', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('id_comentario') }}</label>
    <div>
        {{ Form::text('id_comentario', $respuesta->id_comentario, ['class' => 'form-control' . ($errors->has('id_comentario') ? ' is-invalid' : ''), 'placeholder' => 'ID Comentario', 'readonly' => 'readonly']) }}
        {!! $errors->first('id_comentario', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('usuario') }}</label>
    <div>
        {{ Form::text('usuario', $perfil->Nombre." ".$perfil->Apellido, ['class' => 'form-control', 'readonly' => 'readonly']) }}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('contenido') }}</label>
    <div>
        {{ Form::textarea('contenido', $respuesta->contenido, ['class' => 'form-control' . ($errors->has('contenido') ? ' is-invalid' : ''), 'placeholder' => 'Contenido']) }}
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
