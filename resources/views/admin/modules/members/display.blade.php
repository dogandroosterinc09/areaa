@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.members.index') }}">Chapter Members</a></li>
        <li><span href="javascript:void(0)">View Member</span></li>
    </ul>
    <div class="row">

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
                    <h2><i class="fa fa-user"></i> <strong>Member "{{$user->first_name.' '.$user->last_name}}"</strong></h2>
                </div>

                <?php // print_r($user); ?>

                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="first_name">Firstname</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="first_name" name="first_name"
                               value="{{  Request::old('first_name') ? : $user->first_name }}"
                               readonly="readonly">
                    </div>
                </div>

                {{-- <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="middle_name">Middlename</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="middle_name" name="middle_name"
                               value="{{  Request::old('middle_name') ? : $user->middle_name }}"
                               readonly="readonly">
                    </div>
                </div> --}}

                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="last_name">Lastname</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="last_name" name="last_name"
                               value="{{  Request::old('last_name') ? : $user->last_name }}"
                               readonly="readonly">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="user_name">Username</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="user_name" name="user_name"
                               value="{{  Request::old('user_name') ? : $user->user_name }}"
                               readonly="readonly">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="email">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="email" name="email"
                               value="{{  Request::old('email') ? : $user->email }}"
                               readonly="readonly">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('profile_image') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="user_profile_image">Profile Image</label>
                    <div class="col-md-offset-3 col-md-9">
                        <a href="{{ $user->profile_image != '' ? asset($user->profile_image) : '' }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                            <img src="{{ $user->profile_image != '' ? asset($user->profile_image) : '' }}" alt="" class="img-responsive center-block" style="max-width: 100px;">
                        </a>
                    </div>
                </div>

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
                               readonly="readonly">
                    </div>
                </div>
                <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="position">Position</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="position" name="position"
                               value="{{  Request::old('position') ? : $member->position }}"
                               readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="location">Location</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="location" name="location"
                               value="{{ $member->location }}"
                               readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="language_spoken">Language Spoken</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="language_spoken" name="language_spoken"
                               value="{{ $member->language_spoken }}" readonly="readonly">
                    </div>
                </div>
                {{--
                <div class="form-group">
                    <label class="col-md-3 control-label" for="company">Company</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="company" name="company"
                               value="{{ $billing->company }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="phone">Phone</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="phone" name="phone"
                               value="{{ $billing->phone }}" readonly="readonly">
                    </div>
                </div>
                --}}

                @if ($billing)
                <hr>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="street_address1"><strong>BILLING</strong></label>
                    <div class="col-md-9"></div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="street_address1">Street Address 1</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="street_address1" name="street_address1"
                               value="{{ $billing->street_address1 }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="street_address2">Street Address 2</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="street_address2" name="street_address2"
                               value="{{ $billing->street_address2 }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="city">City</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="city" name="city"
                               value="{{ $billing->city }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="state">State</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="state" name="state"
                               value="{{ $billing->state }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="country">Country</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="country" name="country"
                               value="{{ $billing->country }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="zipcode">Zipcode</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="zipcode" name="zipcode"
                               value="{{ $billing->zipcode }}" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="company">Company</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="company" name="company"
                               value="{{ $billing->company }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="phone">Phone</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="phone" name="phone"
                               value="{{ $billing->phone }}" readonly="readonly">
                    </div>
                </div>
                @endif 

                <hr>
                <div id="chapter_wrapper" class="form-group {{ $errors->has('chapter_id') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="chapter_id">Chapter</label>
                    <div class="col-md-9">
                        @if($user->chapter_id == 0)
                            @php($chapter_name='National')
                        @else
                            @php( $chapter = \App\Models\Chapter::findOrFail($user->chapter_id) )
                            @php($chapter_name=$chapter->name)
                        @endif
                        <input type="text" class="form-control" id="chapter_name" name="chapter_name"
                               value="{{ $chapter_name }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Is Active?</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="is_active" name="is_active"
                               value="{{ ($user->is_active==1) ? 'Yes' : 'No' }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Is Featured?</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="is_featured" name="is_featured"
                               value="{{ ($user->is_featured==1) ? 'Yes' : 'No' }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Is A-List?</label>
                    <div class="col-md-9">
                        {{-- flex-display --}}
                        <div class="flex-display">
                            <label class="switch-primary">
                            <input type="text" class="form-control" id="is_alist" name="is_alist"
                                   value="{{ ($user->is_alist==1) ? 'Yes' : 'No' }}" readonly="readonly">
                            </label>
                            <span class="title-block">   Years won </span>
                            <input type="text" class="form-control" id="alist_years" name="alist_years"
                            value="{{ $user->alist_years }}" readonly="readonly">
                        </div>
                        {{-- flex-display --}}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Is Luxury?</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="is_luxury" name="is_luxury"
                               value="{{ ($user->is_luxury==1) ? 'Yes' : 'No' }}" readonly="readonly">
                    </div>
                </div>
                
                <hr>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="joined_date">Joined Date {{-- $member->joined_date --}}
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="joined_date" name="joined_date"
                               value="{{ date('Y-m-d', strtotime($member->joined_date)) }}" readonly="readonly">
                    </div>
                </div>

                <div class="form-group change-expiry-checkbox-container">
                    <label class="col-md-3 control-label">Expiring</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="alist_years" name="alist_years"
                        value="{{ ($member->expires!='Never') ? date('Y-m-d', strtotime($member->expires)) : 'Never' }}" readonly="readonly">
                    </div>
                </div>



            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection
