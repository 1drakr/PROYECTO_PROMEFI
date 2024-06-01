
<div class="form-group mb-3">
    @if(isset($rol->id_rol))
        <label class="form-label">{{ Form::label('id_rol') }}</label>
        <div>
            {{ Form::text('id_rol', $rol->id_rol, ['class' => 'form-control' . ($errors->has('id_rol') ? ' is-invalid' : ''), 'readonly' => true, 'placeholder' => 'Id Rol']) }}
            {!! $errors->first('id_rol', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-hint">Rol <b>id_rol</b> instruction.</small>
        </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('Nombre', $rol->Nombre, ['class' => 'form-control' .
        ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">rol <b>Nombre</b> instruction.</small>
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
