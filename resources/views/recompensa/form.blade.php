<div class="form-group mb-3">
    @if(isset($recompensa->id_recompensa))
    <label class="form-label" for="id_recompensa">Id Recompensa</label>
    <div>
        <input type="text" name="id_recompensa" id="id_recompensa" class="form-control{{ $errors->has('id_recompensa') ? ' is-invalid' : '' }}" value="{{ old('id_recompensa', $recompensa->id_recompensa) }}" placeholder="Id Recompensa">
        {!! $errors->first('id_recompensa', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>id_recompensa</b> instruction.</small>
    </div>
    @endif
</div>

<div class="form-group mb-3">
    <label class="form-label" for="id_proyecto">Id Proyecto</label>
    <div>
        <input type="text" name="id_proyecto" id="id_proyecto" class="form-control{{ $errors->has('id_proyecto') ? ' is-invalid' : '' }}" value="{{ old('id_proyecto', $recompensa->id_proyecto) }}" placeholder="Id Proyecto">
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>id_proyecto</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="titulo">Titulo</label>
    <div>
        <input type="text" name="titulo" id="titulo" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" value="{{ old('titulo', $recompensa->titulo) }}" placeholder="Titulo">
        {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>titulo</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="monto">Monto</label>
    <div>
        <input type="text" name="monto" id="monto" class="form-control{{ $errors->has('monto') ? ' is-invalid' : '' }}" value="{{ old('monto', $recompensa->monto) }}" placeholder="Monto">
        {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>monto</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="imagen">Imagen</label>
    <div>
        <input type="text" name="imagen" id="imagen" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" value="{{ old('imagen', $recompensa->imagen) }}" placeholder="Imagen">
        {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>imagen</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="descripcion">Descripcion</label>
    <div>
        <input type="text" name="descripcion" id="descripcion" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" value="{{ old('descripcion', $recompensa->descripcion) }}" placeholder="Descripcion">
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>descripcion</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="complemento">Complemento</label>
    <div>
        <input type="text" name="complemento" id="complemento" class="form-control{{ $errors->has('complemento') ? ' is-invalid' : '' }}" value="{{ old('complemento', $recompensa->complemento) }}" placeholder="Complemento">
        {!! $errors->first('complemento', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>complemento</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="patrocinadores">Patrocinadores</label>
    <div>
        <input type="text" name="patrocinadores" id="patrocinadores" class="form-control{{ $errors->has('patrocinadores') ? ' is-invalid' : '' }}" value="{{ old('patrocinadores', $recompensa->patrocinadores) }}" placeholder="Patrocinadores">
        {!! $errors->first('patrocinadores', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>patrocinadores</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="envio">Envio</label>
    <div>
        <input type="text" name="envio" id="envio" class="form-control{{ $errors->has('envio') ? ' is-invalid' : '' }}" value="{{ old('envio', $recompensa->envio) }}" placeholder="Envio">
        {!! $errors->first('envio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>envio</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="fecha_entrega">Fecha Entrega</label>
    <div>
        <input type="text" name="fecha_entrega" id="fecha_entrega" class="form-control{{ $errors->has('fecha_entrega') ? ' is-invalid' : '' }}" value="{{ old('fecha_entrega', $recompensa->fecha_entrega) }}" placeholder="Fecha Entrega">
        {!! $errors->first('fecha_entrega', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>fecha_entrega</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="cantidad">Cantidad</label>
    <div>
        <input type="text" name="cantidad" id="cantidad" class="form-control{{ $errors->has('cantidad') ? ' is-invalid' : '' }}" value="{{ old('cantidad', $recompensa->cantidad) }}" placeholder="Cantidad">
        {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>cantidad</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="tiempo_oferta">Tiempo Oferta</label>
    <div>
        <input type="text" name="tiempo_oferta" id="tiempo_oferta" class="form-control{{ $errors->has('tiempo_oferta') ? ' is-invalid' : '' }}" value="{{ old('tiempo_oferta', $recompensa->tiempo_oferta) }}" placeholder="Tiempo Oferta">
        {!! $errors->first('tiempo_oferta', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">recompensa <b>tiempo_oferta</b> instruction.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('recompensa.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
