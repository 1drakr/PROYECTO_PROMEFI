<div class="form-group mb-3">
    @if(isset($pago->id_pago))
    <label class="form-label" for="id_pago">Id Pago</label>
    <div>
        <input type="text" name="id_pago" id="id_pago" class="form-control{{ $errors->has('id_pago') ? ' is-invalid' : '' }}" value="{{ old('id_pago', $pago->id_pago) }}" placeholder="Id Pago">
        {!! $errors->first('id_pago', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>id_pago</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label for="id_recompensa" class="form-label">Recompensa</label>
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
    <label class="form-label" for="id_perfil">Id Perfil</label>
    <div>
        <input type="text" name="id_perfil" id="id_perfil" class="form-control{{ $errors->has('id_perfil') ? ' is-invalid' : '' }}" value="{{ old('id_perfil', $pago->id_perfil) }}" placeholder="Id Perfil">
        {!! $errors->first('id_perfil', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>id_perfil</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label" for="nombre_legal">Nombre Legal</label>
    <div>
        <input type="text" name="nombre_legal" id="nombre_legal" class="form-control{{ $errors->has('nombre_legal') ? ' is-invalid' : '' }}" value="{{ old('nombre_legal', $pago->nombre_legal) }}" placeholder="Nombre Legal">
        {!! $errors->first('nombre_legal', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>nombre_legal</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="id_fiscal">Id Fiscal</label>
    <div>
        <input type="text" name="id_fiscal" id="id_fiscal" class="form-control{{ $errors->has('id_fiscal') ? ' is-invalid' : '' }}" value="{{ old('id_fiscal', $pago->id_fiscal) }}" placeholder="Id Fiscal">
        {!! $errors->first('id_fiscal', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>id_fiscal</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="nombre_empresa">Nombre Empresa</label>
    <div>
        <input type="text" name="nombre_empresa" id="nombre_empresa" class="form-control{{ $errors->has('nombre_empresa') ? ' is-invalid' : '' }}" value="{{ old('nombre_empresa', $pago->nombre_empresa) }}" placeholder="Nombre Empresa">
        {!! $errors->first('nombre_empresa', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>nombre_empresa</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="direccion_comercio">Direccion Comercio</label>
    <div>
        <input type="text" name="direccion_comercio" id="direccion_comercio" class="form-control{{ $errors->has('direccion_comercio') ? ' is-invalid' : '' }}" value="{{ old('direccion_comercio', $pago->direccion_comercio) }}" placeholder="Direccion Comercio">
        {!! $errors->first('direccion_comercio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>direccion_comercio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="telefono">Telefono</label>
    <div>
        <input type="text" name="telefono" id="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" value="{{ old('telefono', $pago->telefono) }}" placeholder="Telefono">
        {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>telefono</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="metodo_pago">Método de Pago</label>
    <div>
        <select name="metodo_pago" class="form-control">
            <option value="Tarjeta" {{ old('metodo_pago', $pago->metodo_pago) == 'Tarjeta' ? 'selected' : '' }}>Tarjeta</option>
            <option value="Banca Movil" {{ old('metodo_pago', $pago->metodo_pago) == 'Banca Movil' ? 'selected' : '' }}>Banca Movil</option>
        </select>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="cuenta_bancaria">Cuenta Bancaria</label>
    <div>
        <input type="text" name="cuenta_bancaria" id="cuenta_bancaria" class="form-control{{ $errors->has('cuenta_bancaria') ? ' is-invalid' : '' }}" value="{{ old('cuenta_bancaria', $pago->cuenta_bancaria) }}" placeholder="Cuenta Bancaria">
        {!! $errors->first('cuenta_bancaria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>cuenta_bancaria</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    @if(isset($pago->monto))
    <label class="form-label" for="monto">Monto</label>
    <div>
        <input type="text" name="monto" id="monto" class="form-control{{ $errors->has('monto') ? ' is-invalid' : '' }}" value="{{ old('monto', $pago->monto) }}" placeholder="Monto">
        {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pago <b>monto</b> instruction.</small>
    </div>
    @endif
</div>

@foreach($recompensas as $recompensa)
    <div class="form-group mb-3">
        <label for="recompensas" class="form-label">Precio</label>
        <input type="text" class="form-control block col-12 field" id="recompensas" value="{{ $recompensa->monto }}" disabled>
        <input type="hidden" name="monto" value="{{ $recompensa->monto }}">
    </div>
@endforeach

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="#" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
