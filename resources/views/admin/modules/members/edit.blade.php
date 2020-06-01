@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.members.index') }}">Members</a></li>
        <li><span href="javascript:void(0)">Edit Members</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-members',
            'route' => ['admin.members.update', $members->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Members "{{$members->name}}"</strong></h2>
                </div>
                
                @include('admin.components.input-field', ['label' => 'First Name', 'value' => $members->user->first_name])
                @include('admin.components.input-field', ['label' => 'Last Name', 'value' => $members->user->last_name])
                @include('admin.components.textarea', ['label' => 'Bio', 'value' => $members->bio])
                @include('admin.components.input-field', ['label' => 'Position', 'value' => $members->position])
                @include('admin.components.input-field', ['label' => 'Role', 'value' => $members->role])
                @include('admin.components.input-field', ['label' => 'Company', 'value' => $members->company])
                @include('admin.components.input-field', ['label' => 'Language Spoken', 'value' => $members->language_spoken])
                @include('admin.components.input-field', ['label' => 'Designations', 'value' => $members->designations])
                @include('admin.components.input-field', ['label' => 'Area of Specialty', 'value' => $members->area_of_specialty])

                @php($social_media = json_decode($members->social_media) ?? '' )

                
                @include('admin.components.input-field', ['label' => 'Facebook', 'value' => $social_media->facebook ?? ''])
                @include('admin.components.input-field', ['label' => 'Twitter', 'value' => $social_media->twitter ?? ''])
                @include('admin.components.input-field', ['label' => 'Instagram', 'value' => $social_media->instagram ?? ''])
                
                

                <!-- <div class="form-group">
                    <label class="col-md-3 control-label">Is Active?</label>

                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" id="is_active" name="is_active"
                                   value="1" {{ Request::old('is_active') ? : ($members->is_active ? 'checked' : '') }}>
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