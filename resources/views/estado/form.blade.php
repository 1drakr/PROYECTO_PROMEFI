
<div class="form-group mb-3">
    @if(isset($estado->id_estado))
        <label class="form-label">   {{ Form::label('id_estado') }}</label>
        <div>
            {{ Form::text('id_estado', $estado->id_estado, ['class' => 'form-control' .
            ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado']) }}
            {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-hint">estado <b>id_estado</b> instruction.</small>
        </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_estado') }}</label>
    <div>
        {{ Form::text('nombre_estado', $estado->nombre_estado, ['class' => 'form-control' .
        ($errors->has('nombre_estado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Estado']) }}
        {!! $errors->first('nombre_estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">estado <b>nombre_estado</b> instruction.</small>
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
