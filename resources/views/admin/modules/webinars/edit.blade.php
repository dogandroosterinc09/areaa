@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.webinars.index') }}">Webinars</a></li>
        <li><span href="javascript:void(0)">Edit Webinars</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-webinars',
            'route' => ['admin.webinars.update', $webinars->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Webinars "{{$webinars->name}}"</strong></h2>
                </div>
                @include('admin.components.input-field', ['label' => 'Video Link', 'field' => 'link', 'value' => $webinars->link])
                @include('admin.components.input-field', ['label' => 'Title', 'value' => $webinars->title])
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.webinars.index') }}" class="btn btn-sm btn-warning">Cancel</a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/webinars.js') }}"></script>
@endpush