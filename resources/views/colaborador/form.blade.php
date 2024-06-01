
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_colaborador') }}</label>
    <div>
        {{ Form::text('id_colaborador', $colaborador->id_colaborador, ['class' => 'form-control' .
        ($errors->has('id_colaborador') ? ' is-invalid' : ''), 'placeholder' => 'Id Colaborador']) }}
        {!! $errors->first('id_colaborador', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">colaborador <b>id_colaborador</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_perfil') }}</label>
    <div>
        {{ Form::text('id_perfil', $colaborador->id_perfil, ['class' => 'form-control' .
        ($errors->has('id_perfil') ? ' is-invalid' : ''), 'placeholder' => 'Id Perfil']) }}
        {!! $errors->first('id_perfil', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">colaborador <b>id_perfil</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_proyecto') }}</label>
    <div>
        {{ Form::text('id_proyecto', $colaborador->id_proyecto, ['class' => 'form-control' .
        ($errors->has('id_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Proyecto']) }}
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">colaborador <b>id_proyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('correo') }}</label>
    <div>
        {{ Form::text('correo', $colaborador->correo, ['class' => 'form-control' .
        ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
        {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">colaborador <b>correo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('titulo') }}</label>
    <div>
        {{ Form::text('titulo', $colaborador->titulo, ['class' => 'form-control' .
        ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
        {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">colaborador <b>titulo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('permiso') }}</label>
    <div>
        {{ Form::text('permiso', $colaborador->permiso, ['class' => 'form-control' .
        ($errors->has('permiso') ? ' is-invalid' : ''), 'placeholder' => 'Permiso']) }}
        {!! $errors->first('permiso', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">colaborador <b>permiso</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
