
<div class="form-group mb-3">
    <label class="form-label" for="id_validacionproy">Id Validacionproy</label>
    <div>
        <input type="text" name="id_validacionproy" id="id_validacionproy" class="form-control{{ $errors->has('id_validacionproy') ? ' is-invalid' : '' }}" value="{{ old('id_validacionproy', $validacionproyecto->id_validacionproy) }}" placeholder="Id Validacionproy">
        {!! $errors->first('id_validacionproy', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">validacionproyecto <b>id_validacionproy</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="id_evaluacionproy">Id Evaluacionproy</label>
    <div>
        <input type="text" name="id_evaluacionproy" id="id_evaluacionproy" class="form-control{{ $errors->has('id_evaluacionproy') ? ' is-invalid' : '' }}" value="{{ old('id_evaluacionproy', $validacionproyecto->id_evaluacionproy) }}" placeholder="Id Evaluacionproy">
        {!! $errors->first('id_evaluacionproy', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">validacionproyecto <b>id_evaluacionproy</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="documento_validacion">Documento Validacion</label>
    <div>
        <input type="text" name="documento_validacion" id="documento_validacion" class="form-control{{ $errors->has('documento_validacion') ? ' is-invalid' : '' }}" value="{{ old('documento_validacion', $validacionproyecto->documento_validacion) }}" placeholder="Documento Validacion">
        {!! $errors->first('documento_validacion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">validacionproyecto <b>documento_validacion</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="id_perfil">Id Perfil</label>
    <div>
        <input type="text" name="id_perfil" id="id_perfil" class="form-control{{ $errors->has('id_perfil') ? ' is-invalid' : '' }}" value="{{ old('id_perfil', $validacionproyecto->id_perfil) }}" placeholder="Id Perfil">
        {!! $errors->first('id_perfil', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">validacionproyecto <b>id_perfil</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="id_estado">Id Estado</label>
    <div>
        <input type="text" name="id_estado" id="id_estado" class="form-control{{ $errors->has('id_estado') ? ' is-invalid' : '' }}" value="{{ old('id_estado', $validacionproyecto->id_estado) }}" placeholder="Id Estado">
        {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">validacionproyecto <b>id_estado</b> instruction.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('validacionproyecto.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
