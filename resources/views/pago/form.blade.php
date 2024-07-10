
<div class="form-group mb-3">
    @if(isset($pago->id_pago))
    <label class="form-label">   {{ Form::label('id_pago') }}</label>
    <div>
        {{ Form::text('id_pago', $pago->id_pago, ['class' => 'form-control' .
        ($errors->has('id_pago') ? ' is-invalid' : ''), 'placeholder' => 'Id Pago']) }}
        {!! $errors->first('id_pago', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>id_pago</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label for="recompensa" class="form-label">Recompensa</label>
    <select name="id_recompensa" class="form-control">
        @foreach($recompensas as $recompensa)
            <option value="{{ $recompensa->id_recompensa }}">{{ $recompensa->titulo }}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    @if(isset($proyecto->id_proyecto))
        <label for="proyecto" class="form-label">Proyecto Nombre</label>
        <input type="text" class="form-control bold h2 blue bg-light" id="proyecto" value="{{ $proyecto->titulo }}" disabled>
        <input type="hidden" name="id_proyecto" value="{{ $proyecto->id_proyecto }}">
    @endif
</div>

<div class="form-group mb-3">
    @if(isset($pago->id_perfil))
    <label class="form-label">   {{ Form::label('id_perfil') }}</label>
    <div>
        {{ Form::text('id_perfil', $pagos->id_perfil, ['class' => 'form-control' .
        ($errors->has('id_perfil') ? ' is-invalid' : ''), 'placeholder' => 'Id Perfil']) }}
        {!! $errors->first('id_perfil', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>id_perfil</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_legal') }}</label>
    <div>
        {{ Form::text('nombre_legal', $pagos->nombre_legal, ['class' => 'form-control' .
        ($errors->has('nombre_legal') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Legal']) }}
        {!! $errors->first('nombre_legal', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>nombre_legal</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_fiscal') }}</label>
    <div>
        {{ Form::text('id_fiscal', $pagos->id_fiscal, ['class' => 'form-control' .
        ($errors->has('id_fiscal') ? ' is-invalid' : ''), 'placeholder' => 'Id Fiscal']) }}
        {!! $errors->first('id_fiscal', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>id_fiscal</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_empresa') }}</label>
    <div>
        {{ Form::text('nombre_empresa', $pagos->nombre_empresa, ['class' => 'form-control' .
        ($errors->has('nombre_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empresa']) }}
        {!! $errors->first('nombre_empresa', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>nombre_empresa</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('direccion_comercio') }}</label>
    <div>
        {{ Form::text('direccion_comercio', $pagos->direccion_comercio, ['class' => 'form-control' .
        ($errors->has('direccion_comercio') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Comercio']) }}
        {!! $errors->first('direccion_comercio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>direccion_comercio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono') }}</label>
    <div>
        {{ Form::text('telefono', $pagos->telefono, ['class' => 'form-control' .
        ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>telefono</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('metodo_pago', 'Método de Pago') }}</label>
    <div>
        {{ Form::select('metodo_pago', ['Tarjeta' => 'Tarjeta', 'Banca Movil' => 'Banca Movil'], null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cuenta_bancaria') }}</label>
    <div>
        {{ Form::text('cuenta_bancaria', $pagos->cuenta_bancaria, ['class' => 'form-control' .
        ($errors->has('cuenta_bancaria') ? ' is-invalid' : ''), 'placeholder' => 'Cuenta Bancaria']) }}
        {!! $errors->first('cuenta_bancaria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>cuenta_bancaria</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    @if(isset($pago->monto))
    <label class="form-label">   {{ Form::label('monto') }}</label>
    <div>
        {{ Form::text('monto', $pagos->monto, ['class' => 'form-control' .
        ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
        {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>monto</b> instruction.</small>
    </div>
    @endif
</div>

@foreach($recompensas as $recompensa)
    <div class="form-group mb-3">
        <label for="proyecto" class="form-label">Precio</label>
        <input type="text" class="form-control block col-12 field" id="recompensas" value="{{ $recompensa->monto }}" disabled>
        <input type="hidden" name="monto" value="{{ $recompensa->monto }}">
    </div>
@endforeach

{{-- <div class="form-group mb-3">
    <label for="proyecto" class="form-label">Precio</label>
    <input type="text" class="form-control block col-12 field" id="recompensas" value="{{ $recompensas->monto }}" disabled>
    <input type="hidden" name="monto" value="{{ $recompensas->monto }}">
</div> --}}


    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
