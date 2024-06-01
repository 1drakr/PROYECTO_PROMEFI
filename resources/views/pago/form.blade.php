
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_pago') }}</label>
    <div>
        {{ Form::text('id_pago', $pago->id_pago, ['class' => 'form-control' .
        ($errors->has('id_pago') ? ' is-invalid' : ''), 'placeholder' => 'Id Pago']) }}
        {!! $errors->first('id_pago', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>id_pago</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_proyecto') }}</label>
    <div>
        {{ Form::text('id_proyecto', $pago->id_proyecto, ['class' => 'form-control' .
        ($errors->has('id_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Proyecto']) }}
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>id_proyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_perfil') }}</label>
    <div>
        {{ Form::text('id_perfil', $pago->id_perfil, ['class' => 'form-control' .
        ($errors->has('id_perfil') ? ' is-invalid' : ''), 'placeholder' => 'Id Perfil']) }}
        {!! $errors->first('id_perfil', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>id_perfil</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_legal') }}</label>
    <div>
        {{ Form::text('nombre_legal', $pago->nombre_legal, ['class' => 'form-control' .
        ($errors->has('nombre_legal') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Legal']) }}
        {!! $errors->first('nombre_legal', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>nombre_legal</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_fiscal') }}</label>
    <div>
        {{ Form::text('id_fiscal', $pago->id_fiscal, ['class' => 'form-control' .
        ($errors->has('id_fiscal') ? ' is-invalid' : ''), 'placeholder' => 'Id Fiscal']) }}
        {!! $errors->first('id_fiscal', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>id_fiscal</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_empresa') }}</label>
    <div>
        {{ Form::text('nombre_empresa', $pago->nombre_empresa, ['class' => 'form-control' .
        ($errors->has('nombre_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empresa']) }}
        {!! $errors->first('nombre_empresa', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>nombre_empresa</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('direccion_comercio') }}</label>
    <div>
        {{ Form::text('direccion_comercio', $pago->direccion_comercio, ['class' => 'form-control' .
        ($errors->has('direccion_comercio') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Comercio']) }}
        {!! $errors->first('direccion_comercio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>direccion_comercio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono') }}</label>
    <div>
        {{ Form::text('telefono', $pago->telefono, ['class' => 'form-control' .
        ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>telefono</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('metodo_pago') }}</label>
    <div>
        {{ Form::text('metodo_pago', $pago->metodo_pago, ['class' => 'form-control' .
        ($errors->has('metodo_pago') ? ' is-invalid' : ''), 'placeholder' => 'Metodo Pago']) }}
        {!! $errors->first('metodo_pago', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>metodo_pago</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cuenta_bancaria') }}</label>
    <div>
        {{ Form::text('cuenta_bancaria', $pago->cuenta_bancaria, ['class' => 'form-control' .
        ($errors->has('cuenta_bancaria') ? ' is-invalid' : ''), 'placeholder' => 'Cuenta Bancaria']) }}
        {!! $errors->first('cuenta_bancaria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>cuenta_bancaria</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('monto') }}</label>
    <div>
        {{ Form::text('monto', $pago->monto, ['class' => 'form-control' .
        ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
        {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>monto</b> instruction.</small>
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
