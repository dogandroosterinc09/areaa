@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.user.index_admin') }}">All Admin</a></li>
        <li><span href="javascript:void(0)">Edit Admin</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'POST',
            'id' => 'edit-user',
            'route' => ['admin.user.update_admin', $user->id],
            'class' => 'form-horizontal ',
            'files' => TRUE
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Admin "{{$user->first_name.' '.$user->last_name}}"</strong></h2>
                </div>
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="first_name">Firstname</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="first_name" name="first_name"
                               value="{{  Request::old('first_name') ? : $user->first_name }}"
                               placeholder="Enter firstname..">
                        @if($errors->has('first_name'))
                            <span class="help-block animation-slideDown">{{ $errors->first('first_name') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="middle_name">Middlename</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="middle_name" name="middle_name"
                               value="{{  Request::old('middle_name') ? : $user->middle_name }}"
                               placeholder="Enter Middle name..">
                        @if($errors->has('middle_name'))
                            <span class="help-block animation-slideDown">{{ $errors->first('middle_name') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="last_name">Lastname</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="last_name" name="last_name"
                               value="{{  Request::old('last_name') ? : $user->last_name }}"
                               placeholder="Enter lastname..">
                        @if($errors->has('last_name'))
                            <span class="help-block animation-slideDown">{{ $errors->first('last_name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="user_name">Username</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="user_name" name="user_name"
                               value="{{  Request::old('user_name') ? : $user->user_name }}"
                               placeholder="Enter username..">
                        @if($errors->has('user_name'))
                            <span class="help-block animation-slideDown">{{ $errors->first('user_name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="email">Email</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="email" name="email"
                               value="{{  Request::old('email') ? : $user->email }}"
                               placeholder="Enter email..">
                        @if($errors->has('email'))
                            <span class="help-block animation-slideDown">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('profile_image') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="user_profile_image">Profile Image</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <label class="input-group-btn">
                            <span class="btn btn-primary">
                                Choose File <input type="file" name="profile_image" style="display: none;" onchange="document.getElementById('image_profile').value =this.files[0].name">
                            </span>
                            </label>
                            <input type="text" class="form-control" id="image_profile" readonly>
                        </div>
                        @if($errors->has('profile_image'))
                            <span class="help-block animation-slideDown">{{ $errors->first('profile_image') }}</span>
                        @endif
                    </div>
                    <div class="col-md-offset-3 col-md-9">
                        <a href="{{ $user->profile_image != '' ? asset($user->profile_image) : '' }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                            <img src="{{ $user->profile_image != '' ? asset($user->profile_image) : '' }}" alt="" class="img-responsive center-block" style="max-width: 100px;">
                        </a>
                        <br>
                        <a href="javascript:void(0)" class="btn btn-xs btn-danger remove-image-btn" style="display: none;"><i class="fa fa-trash"></i> Remove</a>
                        <input type="hidden" name="remove_profile_image" class="remove-image" value="0">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="roles">Assign Roles</label>
                    <div class="col-md-9">
                        @if(!$roles->isEmpty())
                            <h4></h4>
                            @foreach ($roles as $role)
                                {{ Form::radio('roles[]', $role->id, ($role->id == $user->role_id)) }}
                                {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                            @endforeach
                        @endif
                        @if($errors->has('roles'))
                            <span class="help-block animation-slideDown">{{ $errors->first('roles') }}</span>
                        @endif
                    </div>
                </div>

                <div id="chapter_wrapper" class="form-group {{ $errors->has('chapter_id') ? ' has-error' : ' hidden' }}">
                <!-- <div id="chapter_wrapper" class="form-group"> -->
                    <label class="col-md-3 control-label" for="chapter_id">Chapter</label>
                    <div class="col-md-9">
                        <select class="form-control" id="chapter_id" name="chapter_id">
                        @php( $chapters = \App\Models\Chapter::all() )
                            <option value="">Select Chapter</option>
                            <option {{ $user->chapter_id == 0 ? 'selected' : '' }} value="0">National</option>
                        @foreach($chapters as $chapter)
                            <option {{ $user->chapter_id == $chapter->id ? 'selected' : '' }} value="{{ $chapter->id }}">{{ $chapter->name }}</option>
                        @endforeach
                        </select>
                        @if($errors->has('chapter_id'))
                            <span class="help-block animation-slideDown">{{ $errors->first('chapter_id') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Is Active?</label>

                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" id="is_active" name="is_active" value="1" {{ Request::old('is_active') ? : ($user->is_active ? 'checked' : '') }}>
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Is Featured?</label>

                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ Request::old('is_featured') ? : ($user->is_featured ? 'checked' : '') }}>
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="form-group change-pass-checkbox-container">
                    <label class="col-md-3 control-label">Change Password</label>

                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" id="change_password" name="change_password" value="1" {{ $errors->has('password') ? 'checked' : ''}}>
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="change-pass-container" style="{{ $errors->has('password') ? '' : 'display:none;'}}">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label" for="password">New Password</label>

                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="Enter new password..">
                            @if($errors->has('password'))
                                <span class="help-block animation-slideDown">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label" for="password_confirmation">Verify New Password</label>

                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password_confirmation"
                                   placeholder="Verify new password..">
                        </div>
                    </div>
                </div>
                

                {{-- @endif --}}
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-warning">Cancel</a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/users.js') }}"></script>
@endpush