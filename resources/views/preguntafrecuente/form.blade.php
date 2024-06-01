
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_preguntasfrec') }}</label>
    <div>
        {{ Form::text('id_preguntasfrec', $preguntafrecuente->id_preguntasfrec, ['class' => 'form-control' .
        ($errors->has('id_preguntasfrec') ? ' is-invalid' : ''), 'placeholder' => 'Id Preguntasfrec']) }}
        {!! $errors->first('id_preguntasfrec', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">preguntafrecuente <b>id_preguntasfrec</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_proyecto') }}</label>
    <div>
        {{ Form::text('id_proyecto', $preguntafrecuente->id_proyecto, ['class' => 'form-control' .
        ($errors->has('id_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Proyecto']) }}
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">preguntafrecuente <b>id_proyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('pregunta') }}</label>
    <div>
        {{ Form::text('pregunta', $preguntafrecuente->pregunta, ['class' => 'form-control' .
        ($errors->has('pregunta') ? ' is-invalid' : ''), 'placeholder' => 'Pregunta']) }}
        {!! $errors->first('pregunta', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">preguntafrecuente <b>pregunta</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('respuesta') }}</label>
    <div>
        {{ Form::text('respuesta', $preguntafrecuente->respuesta, ['class' => 'form-control' .
        ($errors->has('respuesta') ? ' is-invalid' : ''), 'placeholder' => 'Respuesta']) }}
        {!! $errors->first('respuesta', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">preguntafrecuente <b>respuesta</b> instruction.</small>
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
