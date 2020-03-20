@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.benefits.index') }}">Benefits</a></li>
        <li><span href="javascript:void(0)">Edit Benefits</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-benefits',
            'route' => ['admin.benefits.update', $benefits->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Benefits "{{$benefits->name}}"</strong></h2>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="benefits_name">Name</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="benefits_name" name="name"
                               value="{{  Request::old('name') ? : $benefits->name }}"
                               placeholder="Enter Benefits name..">
                        @if($errors->has('name'))
                            <span class="help-block animation-slideDown">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="benefits_slug">Slug</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="benefits_slug" name="slug"
                               value="{{  Request::old('slug') ? : $benefits->slug }}"
                               placeholder="Enter Benefits slug..">
                        @if($errors->has('slug'))
                            <span class="help-block animation-slideDown">{{ $errors->first('slug') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('banner_image') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="benefits_banner_image">Banner Image</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Choose File <input type="file" name="banner_image" style="display: none;">
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        @if($errors->has('banner_image'))
                            <span class="help-block animation-slideDown">{{ $errors->first('banner_image') }}</span>
                        @endif
                    </div>
                    <div class="col-md-offset-3 col-md-9">
                        <a href="{{ asset($benefits->banner_image) }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                            <img src="{{ $benefits->banner_image != '' ? asset($benefits->banner_image) : '' }}"
                                 alt="{{ $benefits->banner_image != '' ? asset($benefits->banner_image) : '' }}"
                                 class="img-responsive center-block" style="max-width: 100px;">
                        </a>
                        <br>
                        <a href="javascript:void(0)" class="btn btn-xs btn-danger remove-image-btn"
                           style="display: {{ $benefits->banner_image != '' ? '' : 'none' }};"><i class="fa fa-trash"></i> Remove</a>
                        <input type="hidden" name="remove_banner_image" class="remove-image" value="0">
                    </div>
                </div>
                <div class="form-group file-container {{ $errors->has('file') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="benefits_file">File</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Choose File <input type="file" name="file" style="display: none;">
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        @if($errors->has('file'))
                            <span class="help-block animation-slideDown">{{ $errors->first('file') }}</span>
                        @endif
                    </div>
                    <div class="col-md-offset-3 col-md-9">
                        <a target="_blank" href="{{ asset($benefits->file) }}" class="file-anchor">
                            {{ $benefits->file }}
                        </a>
                        <br>
                        <a href="javascript:void(0)" class="btn btn-xs btn-danger remove-file-btn"
                           style="display: {{ $benefits->file != '' ? '' : 'none' }};"><i class="fa fa-trash"></i> Remove</a>
                        <input type="hidden" name="remove_file" class="remove-file" value="0">
                    </div>
                </div>
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="benefits_content">Content</label>

                    <div class="col-md-9">
                    <textarea id="benefits_content" name="content" rows="9" class="form-control ckeditor"
                              placeholder="Enter Benefits content..">{!! Request::old('content') ? : $benefits->content !!}</textarea>
                        @if($errors->has('content'))
                            <span class="help-block animation-slideDown">{{ $errors->first('content') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Is Active?</label>

                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" id="is_active" name="is_active"
                                   value="1" {{ Request::old('is_active') ? : ($benefits->is_active ? 'checked' : '') }}>
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.benefits.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/libraries/benefits.js') }}"></script>
@endpush