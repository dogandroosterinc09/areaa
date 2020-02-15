@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.pages.index') }}">Pages</a></li>
        <li><span href="javascript:void(0)">Edit Page</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-page',
            'route' => ['admin.pages.update', $page->id],
            'class' => 'form-horizontal ',
            'files' => TRUE,
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Page "{{$page->name}}"</strong></h2>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="pages_name">Name</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="pages_name" name="name"
                               placeholder="Enter page name.."
                               value="{{  Request::old('name') ? : $page->name }}">
                        @if($errors->has('name'))
                            <span class="help-block animation-slideDown">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="pages_slug">Slug</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="pages_slug" name="slug"
                               placeholder="Enter page slug.."
                               value="{{  Request::old('slug') ? : $page->slug }}">
                        @if($errors->has('slug'))
                            <span class="help-block animation-slideDown">{{ $errors->first('slug') }}</span>
                        @endif
                    </div>
                </div>
                {{--<div class="form-group{{ $errors->has('page_type_id') ? ' has-error' : '' }}">--}}
                    {{--<label class="col-md-3 control-label" for="page_type_id">Type</label>--}}

                    {{--<div class="col-md-9">--}}
                        {{--<select name="page_type_id" id="page_type_id"--}}
                                {{--class="page-type-select"--}}
                                {{--data-placeholder="Choose page type..">--}}
                            {{--<option value=""></option>--}}
                            {{--@foreach($page_types as $page_type)--}}
                                {{--<option value="{{ $page_type->id }}" {{ old('page_type_id') ? : $page->page_type_id == $page_type->id ? 'selected' : '' }}>{{ $page_type->name }}</option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                        {{--@if($errors->has('page_type_id'))--}}
                            {{--<span class="help-block animation-slideDown">{{ $errors->first('page_type_id') }}</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">--}}
                    {{--<label class="col-md-3 control-label" for="file">Banner Image</label>--}}
                    {{--<div class="col-md-9">--}}
                        {{--<div class="input-group">--}}
                            {{--<label class="input-group-btn">--}}
                                {{--<span class="btn btn-primary">--}}
                                    {{--Choose File <input type="file" name="banner_image" style="display: none;">--}}
                                {{--</span>--}}
                            {{--</label>--}}
                            {{--<input type="text" class="form-control" readonly>--}}
                        {{--</div>--}}
                        {{--@if($errors->has('banner_image'))--}}
                            {{--<span class="help-block animation-slideDown">{{ $errors->first('banner_image') }}</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label class="col-md-3 control-label" for="banner_image">--}}{{--Banner Image--}}{{--</label>--}}
                    {{--<div class="col-md-9">--}}
                        {{--<a href="{{ asset($page->banner_image) }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">--}}
                            {{--<img src="{{ asset($page->banner_image) }}" alt="{{ $page->banner_image }}" class="img-responsive center-block" style="max-width: 100px;">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-group{{ $errors->has('banner_description') ? ' has-error' : '' }}">--}}
                    {{--<label class="col-md-3 control-label" for="banner_description">Banner Description</label>--}}

                    {{--<div class="col-md-9">--}}
                        {{--<textarea id="banner_description" name="banner_description" rows="9"--}}
                                  {{--class="form-control ckeditor"--}}
                                  {{--placeholder="Enter page banner description..">{!! Request::old('banner_description') ? : $page->banner_description !!}</textarea>--}}
                        {{--@if($errors->has('banner_description'))--}}
                            {{--<span class="help-block animation-slideDown">{{ $errors->first('banner_description') }}</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">--}}
                    {{--<label class="col-md-3 control-label" for="page_content">Content</label>--}}

                    {{--<div class="col-md-9">--}}
                            {{--<textarea id="page_content" name="content" rows="9"--}}
                                  {{--class="form-control ckeditor"--}}
                                  {{--placeholder="Enter page content..">{!! Request::old('content') ? : $page->content !!}</textarea>--}}
                        {{--@if($errors->has('content'))--}}
                            {{--<span class="help-block animation-slideDown">{{ $errors->first('content') }}</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}

                @include('admin.modules.page.page_sections')

                <div class="form-group">
                    <label class="col-md-3 control-label">Is Active?</label>

                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" id="is_active" name="is_active"
                                   value="1" {{ Request::old('is_active') ? : ($page->is_active ? 'checked' : '') }}>
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.pages.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            @include('admin.modules.page.meta_fields')
        </div>
        {{ Form::close() }}
    </div>
@endsection

@push('extrascripts')
    @if ($page->page_sections->contains('type', 'file'))
        <script>
            var oPageSections = {!! $page->page_sections->where('type', 'file') !!}
        </script>
    @endif
    <script type="text/javascript" src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/libraries/pages.js') }}"></script>
@endpush