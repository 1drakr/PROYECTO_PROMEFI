
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_solicitudProy') }}</label>
    <div>
        {{ Form::text('id_solicitudProy', $solicitudproyecto->id_solicitudProy, ['class' => 'form-control' .
        ($errors->has('id_solicitudProy') ? ' is-invalid' : ''), 'placeholder' => 'Id Solicitudproy']) }}
        {!! $errors->first('id_solicitudProy', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">solicitudproyecto <b>id_solicitudProy</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_proyecto') }}</label>
    <div>
        {{ Form::text('id_proyecto', $solicitudproyecto->id_proyecto, ['class' => 'form-control' .
        ($errors->has('id_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Proyecto']) }}
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">solicitudproyecto <b>id_proyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_usuario') }}</label>
    <div>
        {{ Form::text('id_usuario', $solicitudproyecto->id_usuario, ['class' => 'form-control' .
        ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
        {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">solicitudproyecto <b>id_usuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_registro') }}</label>
    <div>
        {{ Form::text('fecha_registro', $solicitudproyecto->fecha_registro, ['class' => 'form-control' .
        ($errors->has('fecha_registro') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Registro']) }}
        {!! $errors->first('fecha_registro', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">solicitudproyecto <b>fecha_registro</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_estado') }}</label>
    <div>
        {{ Form::text('id_estado', $solicitudproyecto->id_estado, ['class' => 'form-control' .
        ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado']) }}
        {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">solicitudproyecto <b>id_estado</b> instruction.</small>
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
