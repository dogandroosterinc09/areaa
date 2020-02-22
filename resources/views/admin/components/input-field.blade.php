@php($field = $field ?? snake_case($label))

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="form-group{{ $errors->has($field) ? ' has-error' : '' }}">
            <label class="col-md-2 control-label" for="{{ $field }}">{{ $label }}</label>

            <div class="col-md-10">
                <input type="{{ $type ?? 'text' }}"
                       class="form-control"
                       id="{{ $field }}"
                       name="{{ $field }}"
                       value="{{  old($field) ?? $value ?? '' }}"
                       placeholder="Enter {{ $label }}..">
                @if($errors->has($field))
                    <span class="help-block animation-slideDown">{{ $errors->first($field) }}</span>
                @endif
            </div>
        </div>
    </div>
</div>