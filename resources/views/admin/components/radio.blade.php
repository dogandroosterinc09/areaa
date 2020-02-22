@php($field = $field ?? snake_case($label))

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="form-group{{ $errors->has($field) ? ' has-error' : '' }}">
            <label class="col-md-2 control-label">{{ $label }}</label>
            <div class="col-md-10">
                @foreach($values as $name => $vvalue)
                    <label class="radio-inline" for="{{ snake_case($name) }}">
                        <input type="radio" id="{{ snake_case($name) }}" name="{{ $field }}"
                               value="{{ $vvalue }}" {{ empty($value) ? '' : $vvalue == $value ? 'checked' : '' }}> {{ $name }}
                    </label>
                @endforeach
                @if($errors->has($field))
                    <span class="help-block animation-slideDown">{{ $errors->first($field) }}</span>
                @endif
            </div>
        </div>
    </div>
</div>