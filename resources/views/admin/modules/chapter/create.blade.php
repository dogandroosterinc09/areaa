@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapters.index') }}">Chapters</a></li>
        <li><span href="javascript:void(0)">Add New Chapter</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'POST',
            'id' => 'create-chapter',
            'route' => ['admin.chapters.store'],
            'class' => 'form-horizontal ',
            'files' => TRUE
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Add new Chapter</strong></h2>
                </div>
                @include('admin.components.attachment', ['label' => 'Thumbnail'])
                @include('admin.components.input-field', ['label' => 'Name'])
                @include('admin.components.input-field', ['label' => 'Latitude'])
                @include('admin.components.input-field', ['label' => 'Longitude'])
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.chapters.index') }}" class="btn btn-sm btn-warning">Cancel</a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapters.js') }}"></script>
@endpush