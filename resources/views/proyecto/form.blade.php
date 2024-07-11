<h3 class="mb-4">Información del Proyecto</h3><hr>
<div class="form-group mb-3">
    @if(isset($proyecto->id_proyecto))
    <label class="form-label" for="id_proyecto">Id Proyecto</label>
    <div>
        <input type="text" name="id_proyecto" id="id_proyecto" class="form-control{{ $errors->has('id_proyecto') ? ' is-invalid' : '' }}" value="{{ old('id_proyecto', $proyecto->id_proyecto) }}" placeholder="Id Proyecto">
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>id_proyecto</b> instruction.</small>
    </div>
    @endif
</div>
<div class="form-group mb-3">
    <label class="form-label" for="titulo">Titulo</label>
    <div>
        <input type="text" name="titulo" id="titulo" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" value="{{ old('titulo', $proyecto->titulo) }}" placeholder="Titulo">
        {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>titulo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="subtitulo">Subtitulo</label>
    <div>
        <input type="text" name="subtitulo" id="subtitulo" class="form-control{{ $errors->has('subtitulo') ? ' is-invalid' : '' }}" value="{{ old('subtitulo', $proyecto->subtitulo) }}" placeholder="Subtitulo">
        {!! $errors->first('subtitulo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>subtitulo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="categoria_principal">Categoria Principal</label>
    <div>
        <input type="text" name="categoria_principal" id="categoria_principal" class="form-control{{ $errors->has('categoria_principal') ? ' is-invalid' : '' }}" value="{{ old('categoria_principal', $proyecto->categoria_principal) }}" placeholder="Categoria Principal">
        {!! $errors->first('categoria_principal', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>categoria_principal</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="categoria">Categoria</label>
    <div>
        <input type="text" name="categoria" id="categoria" class="form-control{{ $errors->has('categoria') ? ' is-invalid' : '' }}" value="{{ old('categoria', $proyecto->categoria) }}" placeholder="Categoria">
        {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>categoria</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="subcategoria">Subcategoria</label>
    <div>
        <input type="text" name="subcategoria" id="subcategoria" class="form-control{{ $errors->has('subcategoria') ? ' is-invalid' : '' }}" value="{{ old('subcategoria', $proyecto->subcategoria) }}" placeholder="Subcategoria">
        {!! $errors->first('subcategoria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>subcategoria</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="ubicacion">Ubicacion</label>
    <div>
        <input type="text" name="ubicacion" id="ubicacion" class="form-control{{ $errors->has('ubicacion') ? ' is-invalid' : '' }}" value="{{ old('ubicacion', $proyecto->ubicacion) }}" placeholder="Ubicacion">
        {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>ubicacion</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="fecha_limite">Fecha Limite</label>
    <div>
        <input type="date" name="fecha_limite" id="fecha_limite" class="form-control{{ $errors->has('fecha_limite') ? ' is-invalid' : '' }}" value="{{ old('fecha_limite', $proyecto->fecha_limite) }}" placeholder="Fecha Limite">
        {!! $errors->first('fecha_limite', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>fecha_limite</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="duracion_campaña">Duracion Campaña</label>
    <div>
        <input type="text" name="duracion_campaña" id="duracion_campaña" class="form-control{{ $errors->has('duracion_campaña') ? ' is-invalid' : '' }}" value="{{ old('duracion_campaña', $proyecto->duracion_campaña) }}" placeholder="Duracion Campaña">
        {!! $errors->first('duracion_campaña', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>duracion_campaña</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="monto_meta">Monto Meta</label>
    <div>
        <input type="text" name="monto_meta" id="monto_meta" class="form-control{{ $errors->has('monto_meta') ? ' is-invalid' : '' }}" value="{{ old('monto_meta', $proyecto->monto_meta) }}" placeholder="Monto Meta">
        {!! $errors->first('monto_meta', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>monto_meta</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="riesgos_desafios">Riesgos Desafios</label>
    <div>
        <input type="text" name="riesgos_desafios" id="riesgos_desafios" class="form-control{{ $errors->has('riesgos_desafios') ? ' is-invalid' : '' }}" value="{{ old('riesgos_desafios', $proyecto->riesgos_desafios) }}" placeholder="Riesgos Desafios">
        {!! $errors->first('riesgos_desafios', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>riesgos_desafios</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="tipo_proyecto">Tipo de Proyecto</label>
    <div>
        <select name="tipo_proyecto" id="tipo_proyecto" class="form-control{{ $errors->has('tipo_proyecto') ? ' is-invalid' : '' }}">
            <option value="">Seleccionar Tipo de Proyecto</option>
            <option value="individuo" {{ old('tipo_proyecto', $proyecto->tipo_proyecto) == 'individuo' ? 'selected' : '' }}>Individuo</option>
            <option value="empresa" {{ old('tipo_proyecto', $proyecto->tipo_proyecto) == 'empresa' ? 'selected' : '' }}>Empresa</option>
            <option value="organizacion_sin_fines_de_lucro" {{ old('tipo_proyecto', $proyecto->tipo_proyecto) == 'organizacion_sin_fines_de_lucro' ? 'selected' : '' }}>Organización sin Fines de Lucro</option>
        </select>
        {!! $errors->first('tipo_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Selecciona el tipo de proyecto.</small>
    </div>
</div>

<h3 class="mb-4">Información del Historia</h3><hr>
<div class="form-group mb-3">
    <label class="form-label" for="historia_titulo">Título</label>
    <div>
        <input type="text" name="historia_titulo" id="historia_titulo" class="form-control" value="{{ old('historia_titulo', $proyecto->historia_titulo) }}" placeholder="Título">
        {!! $errors->first('historia_titulo', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="historia_texto">Texto</label>
    <div>
        <textarea name="historia_texto" id="historia_texto" class="form-control mt-2" rows="4" placeholder="Texto">{{ old('historia_texto', $proyecto->historia_texto) }}</textarea>
        {!! $errors->first('historia_texto', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<h3 class="mb-4">Información de la Recompensa</h3>
<div class="form-group mb-3">
    <label class="form-label" for="recompensa_titulo">Título</label>
    <div>
        <input type="text" name="recompensa_titulo" id="recompensa_titulo" class="form-control" value="{{ old('recompensa_titulo', $proyecto->recompensa_titulo) }}" placeholder="Título">
        {!! $errors->first('recompensa_titulo', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="recompensa_monto">Monto</label>
    <div>
        <input type="text" name="recompensa_monto" id="recompensa_monto" class="form-control" value="{{ old('recompensa_monto', $proyecto->recompensa_monto) }}" placeholder="Monto">
        {!! $errors->first('recompensa_monto', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="recompensa_descripcion">Descripción</label>
    <div>
        <textarea name="recompensa_descripcion" id="recompensa_descripcion" class="form-control" rows="4" placeholder="Descripción">{{ old('recompensa_descripcion', $proyecto->recompensa_descripcion) }}</textarea>
        {!! $errors->first('recompensa_descripcion', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="recompensa_patrocinadores">Patrocinadores</label>
    <div>
        <select name="recompensa_patrocinadores" id="recompensa_patrocinadores" class="form-control">
            <option value="">Seleccionar</option>
            <option value="Sí" {{ old('recompensa_patrocinadores', $proyecto->recompensa_patrocinadores) == 'Sí' ? 'selected' : '' }}>Sí</option>
            <option value="No" {{ old('recompensa_patrocinadores', $proyecto->recompensa_patrocinadores) == 'No' ? 'selected' : '' }}>No</option>
        </select>
        {!! $errors->first('recompensa_patrocinadores', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="recompensa_envio">Envío</label>
    <div>
        <select name="recompensa_envio" id="recompensa_envio" class="form-control">
            <option value="">Seleccionar</option>
            <option value="envios_todo_mundo" {{ old('recompensa_envio', $proyecto->recompensa_envio) == 'envios_todo_mundo' ? 'selected' : '' }}>Envíos a todo el mundo</option>
            <option value="envios_algunos_paises" {{ old('recompensa_envio', $proyecto->recompensa_envio) == 'envios_algunos_paises' ? 'selected' : '' }}>Envíos a algunos países</option>
            <option value="retiro_en_sitio" {{ old('recompensa_envio', $proyecto->recompensa_envio) == 'retiro_en_sitio' ? 'selected' : '' }}>Retiro en el sitio, evento o servicio (sin envío)</option>
            <option value="recompensa_digital" {{ old('recompensa_envio', $proyecto->recompensa_envio) == 'recompensa_digital' ? 'selected' : '' }}>Recompensa digital (sin envío)</option>
        </select>
        {!! $errors->first('recompensa_envio', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="recompensa_fecha_entrega">Fecha de Entrega</label>
    <div>
        <input type="date" name="recompensa_fecha_entrega" id="recompensa_fecha_entrega" class="form-control" value="{{ old('recompensa_fecha_entrega', $proyecto->recompensa_fecha_entrega) }}" placeholder="Fecha de Entrega">
        {!! $errors->first('recompensa_fecha_entrega', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="recompensa_cantidad">Cantidad</label>
    <div>
        <input type="text" name="recompensa_cantidad" id="recompensa_cantidad" class="form-control" value="{{ old('recompensa_cantidad', $proyecto->recompensa_cantidad) }}" placeholder="Cantidad">
        {!! $errors->first('recompensa_cantidad', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="recompensa_tiempo_oferta">Tiempo de Oferta</label>
    <div>
        <input type="text" name="recompensa_tiempo_oferta" id="recompensa_tiempo_oferta" class="form-control" value="{{ old('recompensa_tiempo_oferta', $proyecto->recompensa_tiempo_oferta) }}" placeholder="Tiempo de Oferta">
        {!! $errors->first('recompensa_tiempo_oferta', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('proyecto.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
