<div class="form-group mb-3">
    <label class="form-label" for="documento_proyecto">Documento del Proyecto</label>
    <div>
        <input type="file" name="documento_proyecto" id="documento_proyecto" class="form-control{{ $errors->has('documento_proyecto') ? ' is-invalid' : '' }}" required>
        {!! $errors->first('documento_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Sube el documento del proyecto en formato PDF, DOC o DOCX.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label" for="documento_evaluacion">Documento de Evaluación</label>
    <div>
        <input type="file" name="documento_evaluacion" id="documento_evaluacion" class="form-control{{ $errors->has('documento_evaluacion') ? ' is-invalid' : '' }}" required>
        {!! $errors->first('documento_evaluacion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Sube el documento de evaluación en formato PDF, DOC o DOCX.</small>
    </div>
</div>
