<div class="form-group mb-3">
    @if(isset($rol->id_rol))
        <label class="form-label" for="id_rol">Id Rol</label>
        <div>
            <input type="text" name="id_rol" id="id_rol" class="form-control{{ $errors->has('id_rol') ? ' is-invalid' : '' }}" value="{{ old('id_rol', $rol->id_rol) }}" readonly placeholder="Id Rol">
            {!! $errors->first('id_rol', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-hint">Rol <b>id_rol</b> instruction.</small>
        </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label" for="Nombre">Nombre</label>
    <div>
        <input type="text" name="Nombre" id="Nombre" class="form-control{{ $errors->has('Nombre') ? ' is-invalid' : '' }}" value="{{ old('Nombre', $rol->Nombre) }}" placeholder="Nombre">
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Rol <b>Nombre</b> instruction.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('rol.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
