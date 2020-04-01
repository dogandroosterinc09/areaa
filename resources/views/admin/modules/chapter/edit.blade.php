@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapters.index') }}">Chapters</a></li>
        <li><span href="javascript:void(0)">Edit Chapter</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-chapter',
            'route' => ['admin.chapters.update', $chapter->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Chapter "{{$chapter->name}}"</strong></h2>
                </div>
                @include('admin.components.attachment', ['label' => 'Thumbnail', 'value' => $chapter->attachment ? $chapter->attachment->url : ''])
                @include('admin.components.input-field', ['label' => 'Name', 'value' => $chapter->name])
                @include('admin.components.input-field', ['label' => 'Slug', 'value' => $chapter->slug])
                @include('admin.components.input-field', ['label' => 'Latitude', 'value' => $chapter->latitude])
                @include('admin.components.input-field', ['label' => 'Longitude', 'value' => $chapter->longitude])
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