@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.benefits.index') }}">Benefits</a></li>
        <li><span href="javascript:void(0)">Add New Benefits</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'POST',
            'id' => 'create-benefits',
            'route' => ['admin.benefits.store'],
            'class' => 'form-horizontal ',
            'files' => TRUE
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Add new Benefits</strong></h2>
                </div>
                @include('admin.components.attachment', ['label' => 'Thumbnail'])
                @include('admin.components.input-field', ['label' => 'Title'])
                @include('admin.components.textarea', ['label' => 'Description'])
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group form-actions">
                            <div class="col-md-10 col-md-offset-2">
                                <a href="{{ route('admin.benefits.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save
                                </button>
                            </div>
                        </div>
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