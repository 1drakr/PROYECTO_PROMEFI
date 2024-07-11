<div class="form-group mb-3">
    <label class="form-label" for="id_solicitudProy">Id Solicitudproy</label>
    <div>
        <input type="text" name="id_solicitudProy" id="id_solicitudProy" class="form-control{{ $errors->has('id_solicitudProy') ? ' is-invalid' : '' }}" value="{{ old('id_solicitudProy', $solicitudproyecto->id_solicitudProy) }}" placeholder="Id Solicitudproy">
        {!! $errors->first('id_solicitudProy', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">solicitudproyecto <b>id_solicitudProy</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="id_proyecto">Id Proyecto</label>
    <div>
        <input type="text" name="id_proyecto" id="id_proyecto" class="form-control{{ $errors->has('id_proyecto') ? ' is-invalid' : '' }}" value="{{ old('id_proyecto', $solicitudproyecto->id_proyecto) }}" placeholder="Id Proyecto">
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">solicitudproyecto <b>id_proyecto</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="id_usuario">Id Usuario</label>
    <div>
        <input type="text" name="id_usuario" id="id_usuario" class="form-control{{ $errors->has('id_usuario') ? ' is-invalid' : '' }}" value="{{ old('id_usuario', $solicitudproyecto->id_usuario) }}" placeholder="Id Usuario">
        {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">solicitudproyecto <b>id_usuario</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="fecha_registro">Fecha Registro</label>
    <div>
        <input type="text" name="fecha_registro" id="fecha_registro" class="form-control{{ $errors->has('fecha_registro') ? ' is-invalid' : '' }}" value="{{ old('fecha_registro', $solicitudproyecto->fecha_registro) }}" placeholder="Fecha Registro">
        {!! $errors->first('fecha_registro', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">solicitudproyecto <b>fecha_registro</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="id_estado">Id Estado</label>
    <div>
        <input type="text" name="id_estado" id="id_estado" class="form-control{{ $errors->has('id_estado') ? ' is-invalid' : '' }}" value="{{ old('id_estado', $solicitudproyecto->id_estado) }}" placeholder="Id Estado">
        {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">solicitudproyecto <b>id_estado</b> instruction.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('solicitudproyecto.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
