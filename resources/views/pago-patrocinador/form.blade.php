
<div class="form-group mb-3">
    @if(isset($pagoPatrocinador->id_pago_patrocinador))
    <label class="form-label">   {{ Form::label('id_pago_patrocinador') }}</label>
    <div>
        {{ Form::text('id_pago_patrocinador', $pagoPatrocinador->id_pago_patrocinador, ['class' => 'form-control' .
        ($errors->has('id_pago_patrocinador') ? ' is-invalid' : ''), 'placeholder' => 'Id Pago Patrocinador']) }}
        {!! $errors->first('id_pago_patrocinador', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pagoPatrocinador <b>id_pago_patrocinador</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    @if(isset($pagoPatrocinador->id_proyecto))
    <label class="form-label">   {{ Form::label('id_proyecto') }}</label>
    <div>
        {{ Form::text('id_proyecto', $pagoPatrocinador->id_proyecto, ['class' => 'form-control' .
        ($errors->has('id_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Proyecto']) }}
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pagoPatrocinador <b>id_proyecto</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_perfil') }}</label>
    <div>
        {{ Form::text('id_perfil', $pagoPatrocinador->id_perfil, ['class' => 'form-control' .
        ($errors->has('id_perfil') ? ' is-invalid' : ''), 'placeholder' => 'Id Perfil']) }}
        {!! $errors->first('id_perfil', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pagoPatrocinador <b>id_perfil</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    @if(isset($pagoPatrocinador->monto))
    <label class="form-label">   {{ Form::label('monto') }}</label>
    <div>
        {{ Form::text('monto', $pagoPatrocinador->monto, ['class' => 'form-control' .
        ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
        {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pagoPatrocinador <b>monto</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('metodo_pago') }}</label>
    <div>
        {{ Form::text('metodo_pago', $pagoPatrocinador->metodo_pago, ['class' => 'form-control' .
        ($errors->has('metodo_pago') ? ' is-invalid' : ''), 'placeholder' => 'Metodo Pago']) }}
        {!! $errors->first('metodo_pago', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pagoPatrocinador <b>metodo_pago</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cuenta_bancaria') }}</label>
    <div>
        {{ Form::text('cuenta_bancaria', $pagoPatrocinador->cuenta_bancaria, ['class' => 'form-control' .
        ($errors->has('cuenta_bancaria') ? ' is-invalid' : ''), 'placeholder' => 'Cuenta Bancaria']) }}
        {!! $errors->first('cuenta_bancaria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pagoPatrocinador <b>cuenta_bancaria</b> instruction.</small>
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
