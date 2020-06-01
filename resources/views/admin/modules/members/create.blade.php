@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.members.index') }}">Members</a></li>
        <li><span href="javascript:void(0)">Add New Member</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'POST',
            'id' => 'create-members',
            'route' => ['admin.members.store'],
            'class' => 'form-horizontal ',
            'files' => TRUE
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Add new Member</strong></h2>
                </div>
                
                <!-- <div class="form-group">
                    <label class="col-md-3 control-label">Is Active?</label>

                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" id="is_active" name="is_active"
                                   value="1" checked>
                            <span></span>
                        </label>
                    </div>
                </div> -->

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.members.index') }}" class="btn btn-sm btn-warning">Cancel</a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/members.js') }}"></script>
@endpush