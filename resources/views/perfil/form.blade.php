<div class="form-group mb-3">
    @if(isset($perfil->id_perfil))
    <label class="form-label" for="id_perfil">Id Perfil</label>
    <div>
        <input type="text" name="id_perfil" id="id_perfil" class="form-control{{ $errors->has('id_perfil') ? ' is-invalid' : '' }}" value="{{ old('id_perfil', $perfil->id_perfil) }}" placeholder="Id Perfil">
        {!! $errors->first('id_perfil', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>id_perfil</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label" for="id_users">Id Users</label>
    <div>
        <input type="text" name="id_users" id="id_users" class="form-control{{ $errors->has('id_users') ? ' is-invalid' : '' }}" value="{{ old('id_users', $perfil->id_users) }}" placeholder="Id Users">
        {!! $errors->first('id_users', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>id_users</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="Nombre">Nombre</label>
    <div>
        <input type="text" name="Nombre" id="Nombre" class="form-control{{ $errors->has('Nombre') ? ' is-invalid' : '' }}" value="{{ old('Nombre', $perfil->Nombre) }}" placeholder="Nombre">
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="Apellido">Apellido</label>
    <div>
        <input type="text" name="Apellido" id="Apellido" class="form-control{{ $errors->has('Apellido') ? ' is-invalid' : '' }}" value="{{ old('Apellido', $perfil->Apellido) }}" placeholder="Apellido">
        {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Apellido</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="Avatar">Avatar</label>
    <div>
        <input type="text" name="Avatar" id="Avatar" class="form-control{{ $errors->has('Avatar') ? ' is-invalid' : '' }}" value="{{ old('Avatar', $perfil->Avatar) }}" placeholder="Avatar">
        {!! $errors->first('Avatar', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Avatar</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="Biografia">Biografia</label>
    <div>
        <input type="text" name="Biografia" id="Biografia" class="form-control{{ $errors->has('Biografia') ? ' is-invalid' : '' }}" value="{{ old('Biografia', $perfil->Biografia) }}" placeholder="Biografia">
        {!! $errors->first('Biografia', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Biografia</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="Privacidad">Privacidad</label>
    <div>
        <input type="text" name="Privacidad" id="Privacidad" class="form-control{{ $errors->has('Privacidad') ? ' is-invalid' : '' }}" value="{{ old('Privacidad', $perfil->Privacidad) }}" placeholder="Privacidad">
        {!! $errors->first('Privacidad', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Privacidad</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="Ubicacion">Ubicacion</label>
    <div>
        <input type="text" name="Ubicacion" id="Ubicacion" class="form-control{{ $errors->has('Ubicacion') ? ' is-invalid' : '' }}" value="{{ old('Ubicacion', $perfil->Ubicacion) }}" placeholder="Ubicacion">
        {!! $errors->first('Ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Ubicacion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="ZonaHoraria">Zona Horaria</label>
    <div>
        <input type="text" name="ZonaHoraria" id="ZonaHoraria" class="form-control{{ $errors->has('ZonaHoraria') ? ' is-invalid' : '' }}" value="{{ old('ZonaHoraria', $perfil->ZonaHoraria) }}" placeholder="Zona Horaria">
        {!! $errors->first('ZonaHoraria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Zona Horaria</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="UrlPerso">URL Personal</label>
    <div>
        <input type="text" name="UrlPerso" id="UrlPerso" class="form-control{{ $errors->has('UrlPerso') ? ' is-invalid' : '' }}" value="{{ old('UrlPerso', $perfil->UrlPerso) }}" placeholder="URL Personal">
        {!! $errors->first('UrlPerso', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>URL Personal</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="SitioWeb">Sitio Web</label>
    <div>
        <input type="text" name="SitioWeb" id="SitioWeb" class="form-control{{ $errors->has('SitioWeb') ? ' is-invalid' : '' }}" value="{{ old('SitioWeb', $perfil->SitioWeb) }}" placeholder="Sitio Web">
        {!! $errors->first('SitioWeb', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Sitio Web</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="id_rol">Id Rol</label>
    <div>
        <input type="text" name="id_rol" id="id_rol" class="form-control{{ $errors->has('id_rol') ? ' is-invalid' : '' }}" value="{{ old('id_rol', $perfil->id_rol) }}" placeholder="Id Rol">
        {!! $errors->first('id_rol', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>id_rol</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="Estado">Estado</label>
    <div>
        <input type="text" name="Estado" id="Estado" class="form-control{{ $errors->has('Estado') ? ' is-invalid' : '' }}" value="{{ old('Estado', $perfil->Estado) }}" placeholder="Estado">
        {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">perfil <b>Estado</b> instruction.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('perfil.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
