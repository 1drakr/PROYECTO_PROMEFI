
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('a') }}</label>
    <div>
        {{ Form::text('a', $algoritmo->a, ['class' => 'form-control' .
        ($errors->has('a') ? ' is-invalid' : ''), 'placeholder' => 'A']) }}
        {!! $errors->first('a', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">algoritmo <b>a</b> instruction.</small>
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
