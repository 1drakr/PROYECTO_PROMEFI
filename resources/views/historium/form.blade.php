
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_historia') }}</label>
    <div>
        {{ Form::text('id_historia', $historium->id_historia, ['class' => 'form-control' .
        ($errors->has('id_historia') ? ' is-invalid' : ''), 'placeholder' => 'Id Historia']) }}
        {!! $errors->first('id_historia', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">historium <b>id_historia</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_proyecto') }}</label>
    <div>
        {{ Form::text('id_proyecto', $historium->id_proyecto, ['class' => 'form-control' .
        ($errors->has('id_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Proyecto']) }}
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">historium <b>id_proyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('titulo') }}</label>
    <div>
        {{ Form::text('titulo', $historium->titulo, ['class' => 'form-control' .
        ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
        {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">historium <b>titulo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('texto') }}</label>
    <div>
        {{ Form::text('texto', $historium->texto, ['class' => 'form-control' .
        ($errors->has('texto') ? ' is-invalid' : ''), 'placeholder' => 'Texto']) }}
        {!! $errors->first('texto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">historium <b>texto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('video') }}</label>
    <div>
        {{ Form::text('video', $historium->video, ['class' => 'form-control' .
        ($errors->has('video') ? ' is-invalid' : ''), 'placeholder' => 'Video']) }}
        {!! $errors->first('video', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">historium <b>video</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('imagen') }}</label>
    <div>
        {{ Form::text('imagen', $historium->imagen, ['class' => 'form-control' .
        ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
        {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">historium <b>imagen</b> instruction.</small>
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
