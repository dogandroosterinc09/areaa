@php($field = $field ?? str_slug($label))

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="form-group">
            <label class="col-md-2 control-label" for="{{ $field }}">{{ $label }}</label>

            <div class="col-md-10">
                <label class="switch switch-primary">
                    <input type="checkbox" id="{{ $field }}" name="{{ $field }}"
                           value="1" {{ (old($field) ?? false) || ($value ?? false) ? 'checked' : '' }}>
                    <span></span>
                </label>
            </div>
        </div>
    </div>
</div>