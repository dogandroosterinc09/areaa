@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.members.index') }}">Chapter Members</a></li>
        <li><span href="javascript:void(0)">Edit Member</span></li>
    </ul>
    <div class="row">
        {{--  Form::open([
            'method' => 'POST',
            'id' => 'edit-user',
            'route' => ['admin.user.update_member', $user->id],
            'class' => 'form-horizontal ',
            'files' => TRUE
            ])
        --}}

        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-members',
            'route' => ['admin.members.update', $user->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}

        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Member "{{$user->first_name.' '.$user->last_name}}"</strong></h2>
                </div>

                <?php // print_r($user); ?>

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

                {{--
                <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="middle_name">Middlename</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="middle_name" name="middle_name"
                               value="{{  Request::old('middle_name') ? : $user->middle_name }}"
                               placeholder="Enter middle name..">
                        @if($errors->has('middle_name'))
                            <span class="help-block animation-slideDown">{{ $errors->first('middle_name') }}</span>
                        @endif
                    </div>
                </div>
                --}}

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
                            <input type="text" id="image_profile" class="form-control" readonly>
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

                <?php 
                $member = \App\Models\Members::where('user_id',$user->id)->first();
                $billing = \App\Models\MemberAddress::where('user_id',$user->id)->first();
                // print_r($member);
                ?>
                <hr>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="street_address1"><strong>Other Information</strong></label>
                    <div class="col-md-9"></div>
                </div>
                <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="bio">Bio</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="bio" name="bio"
                               value="{{  Request::old('bio') ? : $member->bio }}"
                               placeholder="Enter Bio..">
                        @if($errors->has('bio'))
                            <span class="help-block animation-slideDown">{{ $errors->first('bio') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="position">Position</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="position" name="position"
                               value="{{  Request::old('position') ? : $member->position }}"
                               placeholder="Enter Position..">
                        @if($errors->has('position'))
                            <span class="help-block animation-slideDown">{{ $errors->first('position') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="location">Location</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="location" name="location"
                               value="{{  Request::old('location') ? : $member->location }}"
                               placeholder="Enter Location..">
                        @if($errors->has('location'))
                            <span class="help-block animation-slideDown">{{ $errors->first('location') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('language_spoken') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="language_spoken">Language Spoken</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="language_spoken" name="language_spoken"
                               value="{{  Request::old('language_spoken') ? : $member->language_spoken }}"
                               placeholder="Enter Language Spoken..">
                        @if($errors->has('language_spoken'))
                            <span class="help-block animation-slideDown">{{ $errors->first('language_spoken') }}</span>
                        @endif
                    </div>
                </div>
                {{--
                <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="company">Company</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="company" name="company"
                               value="{{  Request::old('company') ? : $billing->company }}"
                               placeholder="Enter Company..">
                        @if($errors->has('company'))
                            <span class="help-block animation-slideDown">{{ $errors->first('company') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="phone">Phone</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="phone" name="phone"
                               value="{{  Request::old('phone') ? : $billing->phone }}"
                               placeholder="Enter Phone..">
                        @if($errors->has('phone'))
                            <span class="help-block animation-slideDown">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                </div>
                --}}


                <hr>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="street_address1"><strong>BILLING</strong></label>
                    <div class="col-md-9"></div>
                </div>
                <div class="form-group{{ $errors->has('street_address1') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="street_address1">Street Address 1</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="street_address1" name="street_address1"
                               value="{{  Request::old('street_address1') ? : $billing->street_address1 }}"
                               placeholder="Enter Street Address 1..">
                        @if($errors->has('street_address1'))
                            <span class="help-block animation-slideDown">{{ $errors->first('street_address1') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('street_address2') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="street_address2">Street Address 2</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="street_address2" name="street_address2"
                               value="{{  Request::old('street_address2') ? : $billing->street_address2 }}"
                               placeholder="Enter Street Address 2..">
                        @if($errors->has('street_address2'))
                            <span class="help-block animation-slideDown">{{ $errors->first('street_address2') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="city">City</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="city" name="city"
                               value="{{  Request::old('city') ? : $billing->city }}"
                               placeholder="Enter City..">
                        @if($errors->has('city'))
                            <span class="help-block animation-slideDown">{{ $errors->first('city') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="state">State</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="state" name="state"
                               value="{{  Request::old('state') ? : $billing->state }}"
                               placeholder="Enter State..">
                        @if($errors->has('state'))
                            <span class="help-block animation-slideDown">{{ $errors->first('state') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="country">Country</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="country" name="country"
                               value="{{  Request::old('country') ? : $billing->country }}"
                               placeholder="Enter Country..">
                        @if($errors->has('country'))
                            <span class="help-block animation-slideDown">{{ $errors->first('country') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="zipcode">Zipcode</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="zipcode" name="zipcode"
                               value="{{  Request::old('zipcode') ? : $billing->zipcode }}"
                               placeholder="Enter Zipcode..">
                        @if($errors->has('zipcode'))
                            <span class="help-block animation-slideDown">{{ $errors->first('zipcode') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="company">Company</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="company" name="company"
                               value="{{  Request::old('company') ? : $billing->company }}"
                               placeholder="Enter Company..">
                        @if($errors->has('company'))
                            <span class="help-block animation-slideDown">{{ $errors->first('company') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="phone">Phone</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="phone" name="phone"
                               value="{{  Request::old('phone') ? : $billing->phone }}"
                               placeholder="Enter Phone..">
                        @if($errors->has('phone'))
                            <span class="help-block animation-slideDown">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                </div>


                <hr>
                <div id="chapter_wrapper" class="form-group {{ $errors->has('chapter_id') ? ' has-error' : '' }}">
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
                            <input type="checkbox" id="is_active" name="is_active" value="1" 
                            {{ Request::old('is_active') ? (old('is_active')==1? 'checked' : '') : ($user->is_active ? 'checked' : '') }}>
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Is Featured?</label>
                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" id="is_featured" name="is_featured" value="1" 
                            {{ Request::old('is_featured') ? (old('is_featured')==1? 'checked' : '') : ($user->is_featured ? 'checked' : '') }}>
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Is A-List?</label>
                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" id="is_alist" name="is_alist" value="1" 
                            {{ Request::old('is_alist') ? (old('is_alist')==1? 'checked' : '') : ($user->is_alist ? 'checked' : '') }}>
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Is Luxury?</label>
                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" id="is_luxury" name="is_luxury" value="1" 
                            {{ Request::old('is_luxury') ? (old('is_luxury')==1? 'checked' : '') : ($user->is_luxury ? 'checked' : '') }}>
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
                
                <hr>
                <div class="form-group{{ $errors->has('joined_date') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="joined_date">Joined Date {{-- $member->joined_date --}}
                    </label>
                    <div class="col-md-9">
                        <input type="date" class="form-control" id="joined_date" name="joined_date"
                               value="{{ Request::old('joined_date') ? date('Y-m-d', strtotime(old('joined_date'))) : date('Y-m-d', strtotime($member->joined_date)) }}"
                               placeholder="Enter joined date..">
                        @if($errors->has('joined_date'))
                            <span class="help-block animation-slideDown">{{ $errors->first('joined_date') }}</span>
                        @endif
                    </div>
                </div>
                {{--
                <div class="form-group{{ $errors->has('expires') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="expires">Expires</label>
                    <div class="col-md-9">
                        <input type="date" class="form-control" id="expires" name="expires"
                               value="{{ Request::old('expires') ? date('Y-m-d', strtotime(old('expires'))) : date('Y-m-d', strtotime($member->expires)) }}"
                               placeholder="Enter Expiry..">
                        @if($errors->has('expires'))
                            <span class="help-block animation-slideDown">{{ $errors->first('expires') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('expires') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="expires">Expires</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="expires" name="expires"
                               value="{{  Request::old('expires') ? : $member->expires }}"
                               placeholder="Enter Expiry..">
                        @if($errors->has('expires'))
                            <span class="help-block animation-slideDown">{{ $errors->first('expires') }}</span>
                        @endif
                    </div>
                </div>
                --}}

                <div class="form-group change-expiry-checkbox-container">
                    <label class="col-md-3 control-label">Expiring</label>

                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" id="change_expiry" name="change_expiry" value="1" {{ ($errors->has('expires') || Request::old('expires') || ($member->expires!='Never') ) ? 'checked' : ''}}>
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="change-expiry-container" style="{{ ($errors->has('expires') || Request::old('expires') || ($member->expires!='Never')) ? '' : 'display:none;'}}">
                    <div class="form-group{{ $errors->has('expires') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label" for="expires">Expiry Date {{-- old('expires') .' | '. date('Y-m-d', strtotime(old('expires'))) --}}</label>

                        <div class="col-md-9">
                            <input type="date" class="form-control" id="expires" value="{{ Request::old('expires') ? date('Y-m-d', strtotime(old('expires'))) : date('Y-m-d', strtotime($member->expires)) }}" name="expires"
                                   placeholder="Enter new expiry date..">
                            @if($errors->has('expires'))
                                <span class="help-block animation-slideDown">{{ $errors->first('expires') }}</span>
                            @endif
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