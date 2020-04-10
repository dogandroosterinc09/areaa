@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.media.index') }}">Media</a></li>
        <li><span href="javascript:void(0)">Edit Media</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-media',
            'route' => ['admin.media.update', $media->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Media "{{$media->name}}"</strong></h2>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="media_name">Name</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="media_name" name="name"
                               value="{{  Request::old('name') ? : $media->name }}"
                               placeholder="Enter Media name..">
                        @if($errors->has('name'))
                            <span class="help-block animation-slideDown">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="media_slug">Slug</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="media_slug" name="slug"
                               value="{{  Request::old('slug') ? : $media->slug }}"
                               placeholder="Enter Media slug..">
                        @if($errors->has('slug'))
                            <span class="help-block animation-slideDown">{{ $errors->first('slug') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('banner_image') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="media_banner_image">Banner Image</label>
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
                        <a href="{{ asset($media->banner_image) }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                            <img src="{{ $media->banner_image != '' ? asset($media->banner_image) : '' }}"
                                 alt="{{ $media->banner_image != '' ? asset($media->banner_image) : '' }}"
                                 class="img-responsive center-block" style="max-width: 100px;">
                        </a>
                        <br>
                        <a href="javascript:void(0)" class="btn btn-xs btn-danger remove-image-btn"
                           style="display: {{ $media->banner_image != '' ? '' : 'none' }};"><i class="fa fa-trash"></i> Remove</a>
                        <input type="hidden" name="remove_banner_image" class="remove-image" value="0">
                    </div>
                </div>
                <div class="form-group file-container {{ $errors->has('file') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="media_file">File</label>
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
                        <a target="_blank" href="{{ asset($media->file) }}" class="file-anchor">
                            {{ $media->file }}
                        </a>
                        <br>
                        <a href="javascript:void(0)" class="btn btn-xs btn-danger remove-file-btn"
                           style="display: {{ $media->file != '' ? '' : 'none' }};"><i class="fa fa-trash"></i> Remove</a>
                        <input type="hidden" name="remove_file" class="remove-file" value="0">
                    </div>
                </div>
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="media_content">Content</label>

                    <div class="col-md-9">
                    <textarea id="media_content" name="content" rows="9" class="form-control ckeditor"
                              placeholder="Enter Media content..">{!! Request::old('content') ? : $media->content !!}</textarea>
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
                                   value="1" {{ Request::old('is_active') ? : ($media->is_active ? 'checked' : '') }}>
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.media.index') }}" class="btn btn-sm btn-warning">Cancel</a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/media.js') }}"></script>
@endpush