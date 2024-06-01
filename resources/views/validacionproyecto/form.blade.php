
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_validacionproy') }}</label>
    <div>
        {{ Form::text('id_validacionproy', $validacionproyecto->id_validacionproy, ['class' => 'form-control' .
        ($errors->has('id_validacionproy') ? ' is-invalid' : ''), 'placeholder' => 'Id Validacionproy']) }}
        {!! $errors->first('id_validacionproy', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">validacionproyecto <b>id_validacionproy</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_evaluacionproy') }}</label>
    <div>
        {{ Form::text('id_evaluacionproy', $validacionproyecto->id_evaluacionproy, ['class' => 'form-control' .
        ($errors->has('id_evaluacionproy') ? ' is-invalid' : ''), 'placeholder' => 'Id Evaluacionproy']) }}
        {!! $errors->first('id_evaluacionproy', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">validacionproyecto <b>id_evaluacionproy</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('documento_validacion') }}</label>
    <div>
        {{ Form::text('documento_validacion', $validacionproyecto->documento_validacion, ['class' => 'form-control' .
        ($errors->has('documento_validacion') ? ' is-invalid' : ''), 'placeholder' => 'Documento Validacion']) }}
        {!! $errors->first('documento_validacion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">validacionproyecto <b>documento_validacion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_perfil') }}</label>
    <div>
        {{ Form::text('id_perfil', $validacionproyecto->id_perfil, ['class' => 'form-control' .
        ($errors->has('id_perfil') ? ' is-invalid' : ''), 'placeholder' => 'Id Perfil']) }}
        {!! $errors->first('id_perfil', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">validacionproyecto <b>id_perfil</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_estado') }}</label>
    <div>
        {{ Form::text('id_estado', $validacionproyecto->id_estado, ['class' => 'form-control' .
        ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado']) }}
        {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">validacionproyecto <b>id_estado</b> instruction.</small>
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
