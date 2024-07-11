<div class="form-group mb-3">
    <label class="form-label" for="id_finalizacionproyecto">Id Finalizacionproyecto</label>
    <div>
        <input type="text" name="id_finalizacionproyecto" id="id_finalizacionproyecto" class="form-control{{ $errors->has('id_finalizacionproyecto') ? ' is-invalid' : '' }}" value="{{ old('id_finalizacionproyecto', $finalizacionproyecto->id_finalizacionproyecto) }}" placeholder="Id Finalizacionproyecto">
        {!! $errors->first('id_finalizacionproyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">finalizacionproyecto <b>id_finalizacionproyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="id_proyecto">Id Proyecto</label>
    <div>
        <input type="text" name="id_proyecto" id="id_proyecto" class="form-control{{ $errors->has('id_proyecto') ? ' is-invalid' : '' }}" value="{{ old('id_proyecto', $finalizacionproyecto->id_proyecto) }}" placeholder="Id Proyecto">
        {!! $errors->first('id_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">finalizacionproyecto <b>id_proyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="id_perfil">Id Perfil</label>
    <div>
        <input type="text" name="id_perfil" id="id_perfil" class="form-control{{ $errors->has('id_perfil') ? ' is-invalid' : '' }}" value="{{ old('id_perfil', $finalizacionproyecto->id_perfil) }}" placeholder="Id Perfil">
        {!! $errors->first('id_perfil', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">finalizacionproyecto <b>id_perfil</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label" for="documento_recompensa">Documento Recompensa</label>
    <div>
        <input type="text" name="documento_recompensa" id="documento_recompensa" class="form-control{{ $errors->has('documento_recompensa') ? ' is-invalid' : '' }}" value="{{ old('documento_recompensa', $finalizacionproyecto->documento_recompensa) }}" placeholder="Documento Recompensa">
        {!! $errors->first('documento_recompensa', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">finalizacionproyecto <b>documento_recompensa</b> instruction.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('finalizacionproyectos.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
