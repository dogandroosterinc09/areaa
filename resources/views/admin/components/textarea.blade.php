@php($field = $field ?? str_slug($label))

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="form-group{{ $errors->has($field) ? ' has-error' : '' }}">
            <label class="col-md-2 control-label" for="{{ $field }}">{{ $label }}</label>

            <div class="col-md-10">
                <textarea class="form-control"
                          rows="5"
                          id="{{ $field }}"
                          name="{{ $field }}"
                          placeholder="Enter {{ $label }}">{{ old($field) ?? $value }}</textarea>
                @if($errors->has($field))
                    <span class="help-block animation-slideDown">{{ $errors->first($field) }}</span>
                @endif
            </div>
        </div>
    </div>
</div>
