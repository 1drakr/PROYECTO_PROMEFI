
<div class="form-group mb-3">
    @if(isset($perfil->id_perfil))
    <label class="form-label">   {{ Form::label('id_perfil') }}</label>
    <div>
        {{ Form::text('id_perfil', $perfil->id_perfil, ['class' => 'form-control' .
        ($errors->has('id_perfil') ? ' is-invalid' : ''), 'placeholder' => 'Id Perfil']) }}
        {!! $errors->first('id_perfil', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>id_perfil</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_users') }}</label>
    <div>
        {{ Form::text('id_users', $perfil->id_users, ['class' => 'form-control' .
        ($errors->has('id_users') ? ' is-invalid' : ''), 'placeholder' => 'Id Users']) }}
        {!! $errors->first('id_users', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>id_users</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('Nombre', $perfil->Nombre, ['class' => 'form-control' .
        ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Apellido') }}</label>
    <div>
        {{ Form::text('Apellido', $perfil->Apellido, ['class' => 'form-control' .
        ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
        {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Apellido</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Avatar') }}</label>
    <div>
        {{ Form::text('Avatar', $perfil->Avatar, ['class' => 'form-control' .
        ($errors->has('Avatar') ? ' is-invalid' : ''), 'placeholder' => 'Avatar']) }}
        {!! $errors->first('Avatar', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Avatar</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Biografia') }}</label>
    <div>
        {{ Form::text('Biografia', $perfil->Biografia, ['class' => 'form-control' .
        ($errors->has('Biografia') ? ' is-invalid' : ''), 'placeholder' => 'Biografia']) }}
        {!! $errors->first('Biografia', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Biografia</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Privacidad') }}</label>
    <div>
        {{ Form::text('Privacidad', $perfil->Privacidad, ['class' => 'form-control' .
        ($errors->has('Privacidad') ? ' is-invalid' : ''), 'placeholder' => 'Privacidad']) }}
        {!! $errors->first('Privacidad', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Privacidad</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Ubicacion') }}</label>
    <div>
        {{ Form::text('Ubicacion', $perfil->Ubicacion, ['class' => 'form-control' .
        ($errors->has('Ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
        {!! $errors->first('Ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Ubicacion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ZonaHoraria') }}</label>
    <div>
        {{ Form::text('ZonaHoraria', $perfil->ZonaHoraria, ['class' => 'form-control' .
        ($errors->has('ZonaHoraria') ? ' is-invalid' : ''), 'placeholder' => 'Zonahoraria']) }}
        {!! $errors->first('ZonaHoraria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>ZonaHoraria</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('UrlPerso') }}</label>
    <div>
        {{ Form::text('UrlPerso', $perfil->UrlPerso, ['class' => 'form-control' .
        ($errors->has('UrlPerso') ? ' is-invalid' : ''), 'placeholder' => 'Urlperso']) }}
        {!! $errors->first('UrlPerso', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>UrlPerso</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('SitioWeb') }}</label>
    <div>
        {{ Form::text('SitioWeb', $perfil->SitioWeb, ['class' => 'form-control' .
        ($errors->has('SitioWeb') ? ' is-invalid' : ''), 'placeholder' => 'Sitioweb']) }}
        {!! $errors->first('SitioWeb', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>SitioWeb</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_rol') }}</label>
    <div>
        {{ Form::text('id_rol', $perfil->id_rol, ['class' => 'form-control' .
        ($errors->has('id_rol') ? ' is-invalid' : ''), 'placeholder' => 'Id Rol']) }}
        {!! $errors->first('id_rol', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>id_rol</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Estado') }}</label>
    <div>
        {{ Form::text('Estado', $perfil->Estado, ['class' => 'form-control' .
        ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
        {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Estado</b> instruction.</small>
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
