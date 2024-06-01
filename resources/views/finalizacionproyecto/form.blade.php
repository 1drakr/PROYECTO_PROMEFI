
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_finalizacionproyecto') }}</label>
    <div>
        {{ Form::text('id_finalizacionproyecto', $finalizacionproyecto->id_finalizacionproyecto, ['class' => 'form-control' .
        ($errors->has('id_finalizacionproyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Finalizacionproyecto']) }}
        {!! $errors->first('id_finalizacionproyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">finalizacionproyecto <b>id_finalizacionproyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_proyecto') }}</label>
    <div>
        {{ Form::text('id_proyecto', $finalizacionproyecto->id_proyecto, ['class' => 'form-control' .
        ($errors->has('id_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Proyecto']) }}
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">finalizacionproyecto <b>id_proyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_perfil') }}</label>
    <div>
        {{ Form::text('id_perfil', $finalizacionproyecto->id_perfil, ['class' => 'form-control' .
        ($errors->has('id_perfil') ? ' is-invalid' : ''), 'placeholder' => 'Id Perfil']) }}
        {!! $errors->first('id_perfil', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">finalizacionproyecto <b>id_perfil</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('documento_recompensa') }}</label>
    <div>
        {{ Form::text('documento_recompensa', $finalizacionproyecto->documento_recompensa, ['class' => 'form-control' .
        ($errors->has('documento_recompensa') ? ' is-invalid' : ''), 'placeholder' => 'Documento Recompensa']) }}
        {!! $errors->first('documento_recompensa', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">finalizacionproyecto <b>documento_recompensa</b> instruction.</small>
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
