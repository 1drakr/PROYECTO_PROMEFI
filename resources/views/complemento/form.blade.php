
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_complemento') }}</label>
    <div>
        {{ Form::text('id_complemento', $complemento->id_complemento, ['class' => 'form-control' .
        ($errors->has('id_complemento') ? ' is-invalid' : ''), 'placeholder' => 'Id Complemento']) }}
        {!! $errors->first('id_complemento', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">complemento <b>id_complemento</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_proyecto') }}</label>
    <div>
        {{ Form::text('id_proyecto', $complemento->id_proyecto, ['class' => 'form-control' .
        ($errors->has('id_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Proyecto']) }}
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">complemento <b>id_proyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_recompensa') }}</label>
    <div>
        {{ Form::text('id_recompensa', $complemento->id_recompensa, ['class' => 'form-control' .
        ($errors->has('id_recompensa') ? ' is-invalid' : ''), 'placeholder' => 'Id Recompensa']) }}
        {!! $errors->first('id_recompensa', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">complemento <b>id_recompensa</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $complemento->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">complemento <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('imagen') }}</label>
    <div>
        {{ Form::text('imagen', $complemento->imagen, ['class' => 'form-control' .
        ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
        {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">complemento <b>imagen</b> instruction.</small>
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
