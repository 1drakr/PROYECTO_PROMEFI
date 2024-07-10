
<div class="form-group mb-3">
    @if(isset($comentario->id_comentario))
    <label class="form-label">   {{ Form::label('id_comentario') }}</label>
    <div>
        {{ Form::text('id_comentario', $comentario->id_comentario, ['class' => 'form-control' .
        ($errors->has('id_comentario') ? ' is-invalid' : ''), 'placeholder' => 'Id Comentario']) }}
        {!! $errors->first('id_comentario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">comentario <b>id_comentario</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('id_proyecto', 'Proyecto') }}</label>
    <div>
        {{ Form::select('id_proyecto', $proyectos->pluck('titulo', 'id_proyecto'), $comentario->id_proyecto, ['class' => 'form-control' . ($errors->has('id_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un proyecto']) }}
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('usuario') }}</label>
    <div>
        {{ Form::text('usuario', $perfil->Nombre." ".$perfil->Apellido, ['class' => 'form-control', 'readonly' => 'readonly']) }}
        {{ Form::hidden('id_perfil', $perfil->id_perfil) }}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('contenido') }}</label>
    <div>
        {{ Form::textarea('contenido', $comentario->contenido, ['class' => 'form-control' . ($errors->has('contenido') ? ' is-invalid' : ''), 'placeholder' => 'Contenido']) }}
        {!! $errors->first('contenido', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="/comentario" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guarda</button>
        </div>
    </div>
</div>
