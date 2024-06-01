
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_proyecto') }}</label>
    <div>
        {{ Form::text('id_proyecto', $persona->id_proyecto, ['class' => 'form-control' .
        ($errors->has('id_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Proyecto']) }}
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">persona <b>id_proyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_perfil') }}</label>
    <div>
        {{ Form::text('id_perfil', $persona->id_perfil, ['class' => 'form-control' .
        ($errors->has('id_perfil') ? ' is-invalid' : ''), 'placeholder' => 'Id Perfil']) }}
        {!! $errors->first('id_perfil', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">persona <b>id_perfil</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('url') }}</label>
    <div>
        {{ Form::text('url', $persona->url, ['class' => 'form-control' .
        ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
        {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">persona <b>url</b> instruction.</small>
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
