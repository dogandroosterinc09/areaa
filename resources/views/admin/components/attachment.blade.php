<?php  $field = $field ?? snake_case($label) ?>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="form-group{{ $errors->has($field) ? ' has-error' : '' }}">
            <label class="col-md-2 control-label" for="file">{{ $label }}</label>
            <div class="col-md-10">
                <div class="input-group">
                    <label class="input-group-btn">
                        <span class="btn btn-primary">
                            @php
                                $name = !empty($async) && $async ? '' : $field;
                            @endphp
                            Choose File <input type="file" class="{{ !empty($async) && $async ? 'async' : '' }}" name="{{ $name }}" style="display: none;">
                            <input type="hidden" class="fld" data-name="{{ $field }}" name="{{ $name }}" value="{{ json_encode($value) ?? '' }}">
                        </span>
                    </label>
                    <input type="text" class="form-control" readonly>
                </div>
                @if($errors->has($field))
                    <span class="help-block animation-slideDown">{{ $errors->first($field) }}</span>
                @endif
            </div>
        </div>
        @if(!empty($value))
            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <a href="{{ $value->url }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                        <img src="{{ $value->url }}" alt="{{ $value->name }}" class="img-responsive center-block" style="max-width: 100px;">
                    </a>
                    <a href="#" class="btnDeleteAttachment" data-id="{{ $field }}~|~{{ $value->alias }}" style="display: block;"><i class="fa fa-trash-o"></i> Remove Image</a>
                </div>
            </div>
        @endif
    </div>
</div>