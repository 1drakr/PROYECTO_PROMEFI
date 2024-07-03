
<div class="form-group mb-3">
    @if(isset($recompensa->id_recompensa))
    <label class="form-label">   {{ Form::label('id_recompensa') }}</label>
    <div>
        {{ Form::text('id_recompensa', $recompensa->id_recompensa, ['class' => 'form-control' .
        ($errors->has('id_recompensa') ? ' is-invalid' : ''), 'placeholder' => 'Id Recompensa']) }}
        {!! $errors->first('id_recompensa', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>id_recompensa</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_proyecto') }}</label>
    <div>
        {{ Form::text('id_proyecto', $recompensa->id_proyecto, ['class' => 'form-control' .
        ($errors->has('id_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Proyecto']) }}
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>id_proyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('titulo') }}</label>
    <div>
        {{ Form::text('titulo', $recompensa->titulo, ['class' => 'form-control' .
        ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
        {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>titulo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('monto') }}</label>
    <div>
        {{ Form::text('monto', $recompensa->monto, ['class' => 'form-control' .
        ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
        {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>monto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('imagen') }}</label>
    <div>
        {{ Form::text('imagen', $recompensa->imagen, ['class' => 'form-control' .
        ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
        {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>imagen</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('descripcion') }}</label>
    <div>
        {{ Form::text('descripcion', $recompensa->descripcion, ['class' => 'form-control' .
        ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>descripcion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('complemento') }}</label>
    <div>
        {{ Form::text('complemento', $recompensa->complemento, ['class' => 'form-control' .
        ($errors->has('complemento') ? ' is-invalid' : ''), 'placeholder' => 'Complemento']) }}
        {!! $errors->first('complemento', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>complemento</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('patrocinadores') }}</label>
    <div>
        {{ Form::text('patrocinadores', $recompensa->patrocinadores, ['class' => 'form-control' .
        ($errors->has('patrocinadores') ? ' is-invalid' : ''), 'placeholder' => 'Patrocinadores']) }}
        {!! $errors->first('patrocinadores', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>patrocinadores</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('envio') }}</label>
    <div>
        {{ Form::text('envio', $recompensa->envio, ['class' => 'form-control' .
        ($errors->has('envio') ? ' is-invalid' : ''), 'placeholder' => 'Envio']) }}
        {!! $errors->first('envio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>envio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_entrega') }}</label>
    <div>
        {{ Form::text('fecha_entrega', $recompensa->fecha_entrega, ['class' => 'form-control' .
        ($errors->has('fecha_entrega') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Entrega']) }}
        {!! $errors->first('fecha_entrega', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>fecha_entrega</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cantidad') }}</label>
    <div>
        {{ Form::text('cantidad', $recompensa->cantidad, ['class' => 'form-control' .
        ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
        {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>cantidad</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tiempo_oferta') }}</label>
    <div>
        {{ Form::text('tiempo_oferta', $recompensa->tiempo_oferta, ['class' => 'form-control' .
        ($errors->has('tiempo_oferta') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo Oferta']) }}
        {!! $errors->first('tiempo_oferta', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>tiempo_oferta</b> instruction.</small>
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
