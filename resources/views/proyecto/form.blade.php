<h3 class="mb-4">Información del Proyecto</h3><hr>
{{-- <div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_proyecto') }}</label>
    <div>
        {{ Form::text('id_proyecto', $proyecto->id_proyecto, ['class' => 'form-control' .
        ($errors->has('id_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Id Proyecto']) }}
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>id_proyecto</b> instruction.</small>
    </div>
</div> --}}
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('titulo') }}</label>
    <div>
        {{ Form::text('titulo', $proyecto->titulo, ['class' => 'form-control' .
        ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
        {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>titulo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('subtitulo') }}</label>
    <div>
        {{ Form::text('subtitulo', $proyecto->subtitulo, ['class' => 'form-control' .
        ($errors->has('subtitulo') ? ' is-invalid' : ''), 'placeholder' => 'Subtitulo']) }}
        {!! $errors->first('subtitulo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>subtitulo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('categoria_principal') }}</label>
    <div>
        {{ Form::text('categoria_principal', $proyecto->categoria_principal, ['class' => 'form-control' .
        ($errors->has('categoria_principal') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Principal']) }}
        {!! $errors->first('categoria_principal', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>categoria_principal</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('categoria') }}</label>
    <div>
        {{ Form::text('categoria', $proyecto->categoria, ['class' => 'form-control' .
        ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
        {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>categoria</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('subcategoria') }}</label>
    <div>
        {{ Form::text('subcategoria', $proyecto->subcategoria, ['class' => 'form-control' .
        ($errors->has('subcategoria') ? ' is-invalid' : ''), 'placeholder' => 'Subcategoria']) }}
        {!! $errors->first('subcategoria', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>subcategoria</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ubicacion') }}</label>
    <div>
        {{ Form::text('ubicacion', $proyecto->ubicacion, ['class' => 'form-control' .
        ($errors->has('ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
        {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>ubicacion</b> instruction.</small>
    </div>
</div>
{{-- <div class="form-group mb-3">
    <label class="form-label">{{ Form::label('imagen', 'Imagen') }}</label>
    <div>
        {{ Form::file('imagen', ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
        {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Proyecto <b>imagen</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('video', 'Video') }}</label>
    <div>
        {{ Form::file('video', ['class' => 'form-control' . ($errors->has('video') ? ' is-invalid' : ''), 'placeholder' => 'Video']) }}
        {!! $errors->first('video', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Proyecto <b>video</b> instruction.</small>
    </div>
</div> --}}

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_limite') }}</label>
    <div>
        {{ Form::date('fecha_limite', $proyecto->fecha_limite, ['class' => 'form-control' .
        ($errors->has('fecha_limite') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Limite']) }}
        {!! $errors->first('fecha_limite', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>fecha_limite</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('duracion_campaña') }}</label>
    <div>
        {{ Form::text('duracion_campaña', $proyecto->duracion_campaña, ['class' => 'form-control' .
        ($errors->has('duracion_campaña') ? ' is-invalid' : ''), 'placeholder' => 'Duracion Campaña']) }}
        {!! $errors->first('duracion_campaña', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>duracion_campaña</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('monto_meta') }}</label>
    <div>
        {{ Form::text('monto_meta', $proyecto->monto_meta, ['class' => 'form-control' .
        ($errors->has('monto_meta') ? ' is-invalid' : ''), 'placeholder' => 'Monto Meta']) }}
        {!! $errors->first('monto_meta', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>monto_meta</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('riesgos_desafios') }}</label>
    <div>
        {{ Form::text('riesgos_desafios', $proyecto->riesgos_desafios, ['class' => 'form-control' .
        ($errors->has('riesgos_desafios') ? ' is-invalid' : ''), 'placeholder' => 'Riesgos Desafios']) }}
        {!! $errors->first('riesgos_desafios', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>riesgos_desafios</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('tipo_proyecto', 'Tipo de Proyecto') }}</label>
    <div>
        {{ Form::select('tipo_proyecto', [
            'individuo' => 'Individuo',
            'empresa' => 'Empresa',
            'organizacion_sin_fines_de_lucro' => 'Organización sin Fines de Lucro'
            ], $proyecto->tipo_proyecto, [
                'class' => 'form-control' . ($errors->has('tipo_proyecto') ? ' is-invalid' : ''),
                'placeholder' => 'Seleccionar Tipo de Proyecto'
            ])
        }}
        {!! $errors->first('tipo_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Selecciona el tipo de proyecto.</small>
    </div>
</div>

<h3 class="mb-4">Información del Historia</h3><hr>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('historia_titulo', 'Título') }}</label>
    <div>
        {{ Form::text('historia_titulo', $proyecto->historia_titulo , ['class' => 'form-control', 'placeholder' => 'Título']) }}
        {!! $errors->first('historia_titulo', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('historia_texto', 'Texto') }}</label>
    <div>
        {{ Form::textarea('historia_texto', $proyecto->historia_texto , ['class' => 'form-control mt-2', 'rows' => 4, 'placeholder' => 'Texto']) }}
        {!! $errors->first('historia_texto', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
{{-- <div class="form-group mb-3">
    <label class="form-label">{{ Form::label('historia_imagen', 'Imagen') }}</label>
    <div>
        {{ Form::file('historia_imagen', ['class' => 'form-control' . ($errors->has('historia_imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
        {!! $errors->first('historia_imagen', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Proyecto <b>imagen</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('historia_video', 'Video') }}</label>
    <div>
        {{ Form::file('historia_video', ['class' => 'form-control' . ($errors->has('historia_video') ? ' is-invalid' : ''), 'placeholder' => 'Video']) }}
        {!! $errors->first('historia_video', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Proyecto <b>video</b> instruction.</small>
    </div>
</div> --}}

<h3 class="mb-4">Información de la Recompensa</h3>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('recompensa_titulo', 'Título') }}</label>
    <div>
        {{ Form::text('recompensa_titulo', $proyecto->recompensa_titulo ?? old('recompensa_titulo'), ['class' => 'form-control', 'placeholder' => 'Título']) }}
        {!! $errors->first('recompensa_titulo', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('recompensa_monto', 'Monto') }}</label>
    <div>
        {{ Form::text('recompensa_monto', $proyecto->recompensa_monto ?? old('recompensa_monto'), ['class' => 'form-control', 'placeholder' => 'Monto']) }}
        {!! $errors->first('recompensa_monto', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
{{-- <div class="form-group mb-3">
    <label class="form-label">{{ Form::label('recompensa_imagen', 'Imagen') }}</label>
    <div>
        {{ Form::file('recompensa_imagen', ['class' => 'form-control' . ($errors->has('recompensa_imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
        {!! $errors->first('recompensa_imagen', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Recompensa <b>imagen</b> instruction.</small>
    </div>
</div> --}}
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('recompensa_descripcion', 'Descripción') }}</label>
    <div>
        {{ Form::textarea('recompensa_descripcion', $proyecto->recompensa_descripcion ?? old('recompensa_descripcion'), ['class' => 'form-control', 'rows' => 4, 'placeholder' => 'Descripción']) }}
        {!! $errors->first('recompensa_descripcion', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('recompensa_patrocinadores', 'Patrocinadores') }}</label>
    <div>
        {{ Form::select('recompensa_patrocinadores', ['Sí' => 'Sí', 'No' => 'No'], $proyecto->recompensa_patrocinadores ?? old('recompensa_patrocinadores'), ['class' => 'form-control', 'placeholder' => 'Seleccionar']) }}
        {!! $errors->first('recompensa_patrocinadores', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('recompensa_envio', 'Envío') }}</label>
    <div>
        {{ Form::select('recompensa_envio', ['envios_todo_mundo' => 'Envíos a todo el mundo', 'envios_algunos_paises' => 'Envíos a algunos países', 'retiro_en_sitio' => 'Retiro en el sitio, evento o servicio (sin envío)', 'recompensa_digital' => 'Recompensa digital (sin envío)'], $proyecto->recompensa_envio ?? old('recompensa_envio'), ['class' => 'form-control', 'placeholder' => 'Seleccionar']) }}
        {!! $errors->first('recompensa_envio', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('recompensa_fecha_entrega', 'Fecha de Entrega') }}</label>
    <div>
        {{ Form::date('recompensa_fecha_entrega', $proyecto->recompensa_fecha_entrega , ['class' => 'form-control', 'placeholder' => 'Fecha de Entrega']) }}
        {!! $errors->first('recompensa_fecha_entrega', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('recompensa_cantidad', 'Cantidad') }}</label>
    <div>
        {{ Form::text('recompensa_cantidad', $proyecto->recompensa_cantidad ?? old('recompensa_cantidad'), ['class' => 'form-control', 'placeholder' => 'Cantidad']) }}
        {!! $errors->first('recompensa_cantidad', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('recompensa_tiempo_oferta', 'Tiempo de Oferta') }}</label>
    <div>
        {{ Form::text('recompensa_tiempo_oferta', $proyecto->recompensa_tiempo_oferta ?? old('recompensa_tiempo_oferta'), ['class' => 'form-control', 'placeholder' => 'Tiempo de Oferta']) }}
        {!! $errors->first('recompensa_tiempo_oferta', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>


    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="/proyecto" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
