  {{-- memberdirectory-detail-content --}}
  <div class="profile">
    <div class="profile__wrapper container">
        {{  Form::open([
            'method' => 'POST',
            'id' => '',
            'route' => ['customer.profile.update'],
            'class' => '',
            'files' => TRUE
            ])
        }}
        <div class="row">
            

            <div class="col-md-3 profile__left">
                <div class="profile__upload text-center">
                    <div class="profile__image image-background">
                        <img id="avatarContainer" src="{{ $profile->avatar ? asset($profile->avatar) : url('public/images/no-pix.jpg') }}" alt="" class="img-fluid">     
                    </div>
                    
                    <a href="javascript:void(0)" class="btn btn--primary" onclick="$('input[name=avatar]').trigger('click')" style="margin-top:20px;">upload image</a>
                    <input type="file" name="avatar" style="display: none;">
                </div>
                
                @if($profile->user->is_alist == 1) 
                <div class="profile__year">
                    <div class="memberdirectory-detail__badge-year">
                        {{ $profile->user->alist_years }}
                    </div>
                </div>
                @endif

                <div class="profile__badge">
                    {{-- @foreach(explode(',',$profile->badges) as $badge)
                    <img src="{{ url($badge) }}" alt="" class="img-fluid">
                    @endforeach --}}

                    @if($profile->user->is_alist == 1) <img src="{{ url('public/images/area-list.png') }}" alt="" class="img-fluid"> @endif
                    @if($profile->user->is_luxury == 1) <img src="{{ url('public/images/area-lux.jpg') }}" alt=""  class="img-fluid"> @endif
                  
                </div>

                @if( !(empty($social_media->facebook) && empty($social_media->twitter) && empty($social_media->instagram)) )
                <div class="profile__social-link">
                    <h5>Stay Connected:</h5>

                    <div class="socials">
                    @if(!empty($social_media->facebook))
                    <a href="https://facebook.com/{{$social_media->facebook}}" target="_blank" title="facebook" class="fb"><i class="fab fa-facebook-f"></i></a>
                    @endif
                    @if(!empty($social_media->twitter))
                    <a href="https://twitter.com/{{$social_media->twitter}}" target="_blank" title="twitter" class="tw"><i class="fab fa-twitter"></i></a>
                    @endif
                    @if(!empty($social_media->instagram))
                    <a href="https://instagram.com/{{$social_media->instagram}}" target="_blank" title="instagram" class="ig"><i class="fab fa-instagram"></i></a>
                    @endif
                    </div>
                </div>
                @endif

            </div>




            <div class="col-md-9 profile__right">
                    
                <div class="profile__content">
                    <div class="profile__date">Member Since {{ $profile->membership_year }}</div>
                    <div class="profile__title">
                        <h3> 
                            {{ $profile->name }}
                        </h3>
                    </div>
                    <div class="profile__position"> 
                            {{ $profile->role }}
                    </div>

                    <div class="profile__description">
                        <div class="row">                            
                            <div class="col-md-12">
                                <textarea class="form-control" name="bio" rows="10">{{ $profile->bio }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="profile__info profile__border information">
                        <div class="row">

                            <div class="col-md-12">
                                <h3><i class="fas fa-cog"></i>Profile & Account Info</h3>
                            </div>

                            <div class="col-md-3">
                                <b>Location</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->location }} --}}
                              <input type="text" name="location" value="{{ $profile->location }}">
                            </div>

                            <div class="col-md-3">
                                <b>Company</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->company }} --}}
                                <input type="text" name="company" value="{{ $profile->company }}">
                            </div>

                            <div class="col-md-3">
                                <b>Email</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->user->email }} --}}
                                <input type="text" name="email" value="{{ $profile->user->email }}">
                            </div>


                            <div class="col-md-3">
                                <b>Phone</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->user->phone }} --}}
                                <input type="text" name="phone" value="{{ $profile->user->phone }}">
                            </div>

                            <div class="col-md-3">
                                <b>Language Spoken</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->language_spoken }} --}}
                                <input type="text" name="language_spoken" value="{{ $profile->language_spoken }}">
                            </div>

                            <div class="col-md-3">
                                <b>Designations</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->designations }} --}}
                                <input type="text" name="designations" value="{{ $profile->designations }}">
                            </div>

                            <div class="col-md-3">
                                <b>Area of Specialty</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->area_of_specialty }} --}}
                                <input type="text" name="area_of_specialty" value="{{ $profile->area_of_specialty }}">
                            </div>

                            <div class="col-md-3 align-self-start">
                                <b>Social Media Accounts</b>
                            </div>                                                        
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">facebook.com/</span>
                                            </div><input type="text" name="facebook" value="{{ $social_media->facebook }}" class="form-control" style="width:1%">
                                        </div>
                                        
                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">twitter.com/</span>
                                            </div><input type="text" name="twitter" value="{{ $social_media->twitter }}" class="form-control" style="width:1%">
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">instagram.com/</span>
                                            </div><input type="text" name="instagram" value="{{ $social_media->instagram }}" class="form-control" style="width:1%">
                                        </div>
                                    </div>
                                </div>
                            </div>

                          

                        </div>
                    </div>


                    <div class="profile__billing profile__border">
                        <div class="container">
                            <?php //print_r($billing); ?>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i class="fa fa-home" aria-hidden="true"></i>Billing Address</h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="street_address1"> Billing Address 1</label>
                                        <input type="text" name="street_address1" value="{{ $billing->street_address1 }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="street_address2"> Billing Address 2</label>
                                        <input type="text" name="street_address2" value="{{ $billing->street_address2 }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="country"> Country </label>
                                        <input type="text" name="country" value="{{ $billing->country }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="zipcode"> Zipcode </label>
                                        <input type="text" name="zipcode" value="{{ $billing->zipcode }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="city"> City </label>
                                        <input type="text" name="city" value="{{ $billing->city }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="state"> State </label>
                                        <input type="text" name="state" value="{{ $billing->state }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="profile__account-settings profile__border">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><i class="fa fa-key" aria-hidden="true"></i>Change Password</h3>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="current_password"> Current Password </label>
                                        <input type="password" name="current_password" value="">
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group view-password">
                                        <label for="new_password"> New Password </label>
                                        <input id="pass_log_id_new" type="password" name="new_password" value="MySecretPass">
                                        <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group view-password">
                                        <label for="new_password"> Confirm Password </label>
                                        <input id="pass_log_id_confirm" type="password" name="pass" value="MySecretPass">
                                        <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password-new"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- profile__submit --}}
                    <div class="profile__submit">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    {{-- {{ $profile->area_of_specialty }} --}}
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn--secondary">Update Profile</button>
                                        
                                        <!-- <a href="#" class="btn btn--primary"> Edit </a>
                                        <a href="#" class="btn btn--secondary"> save </a> -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- profile__submit --}}


                    <div class="profile__info profile__border information">
                        <div class="row">
                            <div class="col-md-12">
                                <h3><i class="fas fa-cog"></i>Subscription Status</h3>
                            </div>

                            <div class="col-md-3">
                                <b>Joined Date</b>
                            </div>
                            <div class="col-md-9">
                              <input type="text" name="joined_date" value="{{ $profile->joined_date }}" readonly="true">
                            </div>

                            <div class="col-md-3">
                                <b>Is Active</b>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="expires" value="{{ ($profile->expires=='Never')? 'Active': $profile->expires }}" readonly="readonly">
                            </div>

                            <hr>

                            <div class="table-responsive">
                                <table width="100%" border="1" style="border-style:dotted;">
                                    <thead>
                                        <tr>
                                            <th> <b>Transaction ID</b> </th>
                                            <th> Title </th>
                                            <th> Date Transacted </th>
                                            <th> Amount </th>
                                            <th> Column 1 </th>
                                            <th> Column 2 </th>
                                            <th> Column 3 </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if(isset($charge))
                                        <tr>
                                            <td>{{$charge->transaction_reference}}</td>
                                            <td>{{$charge->transaction_invoice}}</td>
                                            <td>{{$charge->created_at}}</td>
                                            <td>{{$charge->transaction_amount}}</td>
                                            <td> - - - </td>
                                            <td> - - - </td>
                                            <td> - - - </td>
                                        </tr>
                                        @endif

                                        @if(isset($subscription))
                                        @foreach($subscription as $sub)
                                        <tr>
                                            <td>{{$sub->transaction_reference}}</td>
                                            <td>{{$sub->transaction_invoice}}</td>
                                            <td>{{$sub->created_at}}</td>
                                            <td>{{$sub->transaction_amount}}</td>
                                            <td> - - - </td>
                                            <td> - - - </td>
                                            <td> - - - </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>


                </div>
            </div>

            
        </div>

        {{ Form::close() }}
    </div>
</div>
{{-- memberdirectory-detail-content --}}

@push('extrascripts')
<script>
    $('input[name=avatar]').on('change', function (e) {
        if (e.target.files.length === 0 || !FileReader)
            return;

        var fileReader = new FileReader();
        fileReader.onload = function () {
            $('#avatarContainer').attr('src', fileReader.result);
            $('#avatarContainer').parent().css('background-image', 'url("'+fileReader.result+'")');
        };
        fileReader.readAsDataURL(e.target.files[0]);            
    });
</script>


<script>
  $(document).on('click', '.toggle-password', function() {

$(this).toggleClass("fa-eye fa-eye-slash");

var input = $("#pass_log_id_new");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>

<script>
    $(document).on('click', '.toggle-password-new', function() {
  
  $(this).toggleClass("fa-eye fa-eye-slash");
  
  var input = $("#pass_log_id_confirm");
  input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
  });
  </script>
@endpush