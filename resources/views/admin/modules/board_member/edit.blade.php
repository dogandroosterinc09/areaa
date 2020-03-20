@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.board_members.index') }}">Board Members</a></li>
        <li><span href="javascript:void(0)">Edit Board Member</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-board_member',
            'route' => ['admin.board_members.update', $board_member->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Board Member "{{$board_member->name}}"</strong></h2>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label class="col-md-2 control-label">
                                <img id="avatarContainer" src="{{ $board_member->attachment ? $board_member->attachment->url : asset('public/images/placeholders/avatars/avatar2.jpg') }}" alt="avatar"
                                     class="img-circle" width="64">
                            </label>
                            <div class="col-md-10">
                                <div>
                                    <i class="fa fa-fw fa-upload"></i>
                                    <a href="#" onclick="$('input[name=avatar]').trigger('click')">
                                        Upload New Avatar
                                    </a>
                                    <input type="file" name="avatar" style="display: none;">
                                </div>
                                <i class="fa fa-fw fa-times"></i> <a id="btnRemoveAvatar" href="#" class="text-danger">Remove Avatar</a>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.components.input-field', ['label' => 'First Name', 'value' => $board_member->first_name])
                @include('admin.components.input-field', ['label' => 'Last Name', 'value' => $board_member->last_name])
                @include('admin.components.input-field', ['label' => 'Position', 'value' => $board_member->position])
                @include('admin.components.textarea', ['label' => 'Bio', 'value' => $board_member->bio, 'rows' => 25])
                @include('admin.components.radio', ['label' => 'Type', 'value' => $board_member->type, 'values' => [
                    'Executive' => \App\Models\BoardMember::TYPE_EXECUTIVE,
                    'Delegate' => \App\Models\BoardMember::TYPE_DELEGATE
                ]])
                @include('admin.components.toggle', ['label' => 'Is Active', 'value' => $board_member->is_active])
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group form-actions">
                            <div class="col-md-10 col-md-offset-2">
                                @php($route = $board_member->type ? ($board_member->type == 1 ? 'admin.board_members.executives' : 'admin.board_members.delegates') : 'admin.board_members.index')
                                <a href="{{ route($route) }}" class="btn btn-sm btn-warning">Cancel</a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/board_members.js') }}"></script>
@endpush