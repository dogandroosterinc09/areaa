@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.pages.index') }}">Pages</a></li>
        <li><span href="javascript:void(0)">Add New Page</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'POST',
            'id' => 'create-page',
            'route' => ['admin.pages.store'],
            'class' => 'form-horizontal ',
            'files' => TRUE,
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Add new Page</strong></h2>
                </div>

                @include('admin.components.heading', ['text' => 'Page Details'])
                @include('admin.components.input-field', ['label' => 'Name'])
                @include('admin.components.input-field', ['label' => 'Slug'])
                @include('admin.components.editor', ['label' => 'Content'])
                @include('admin.components.toggle', ['label' => 'Is Active', 'value' => true])

                @include('admin.components.heading', ['text' => 'Sections'])
{{--                @include('admin.modules.page.page_sections')--}}

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
    <script type="text/javascript" src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/libraries/pages.js') }}"></script>
@endpush