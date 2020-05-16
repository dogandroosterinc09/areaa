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

                <div class="profile__year">
                    <div class="memberdirectory-detail__badge-year">
                        {{ $profile->membership_year }}
                    </div>
                </div>

                <div class="profile__badge">
                    @foreach(explode(',',$profile->badges) as $badge)
                    <img src="{{ url($badge) }}" alt="" class="img-fluid">
                    @endforeach
                    <!-- <img src="{{ url('public/images/area-list.png') }}" alt="" class="img-fluid"> 
                    <img src="{{ url('public/images/area-lux.jpg') }}" alt=""  class="img-fluid">   -->
                  
                </div>


                <div class="profile__social-link">
                    <h5>Stay Connected:</h5>

                    <div class="socials">
                        <a href="https://facebook.com/{{ $social_media->facebook }}" target="_blank" title="facebook" class="fb"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/{{ $social_media->twitter }}" target="_blank" title="twitter" class="tw"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com/{{ $social_media->instagram }}" target="_blank" title="instagram" class="ig"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

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
                        <!-- Lorem ipsum dolor sit amet, praesent placerat donec, tristique interdum vestibulum dui varius eget donec, sit pede nec mollis, tincidunt adipiscing varius, at lectus pellentesque viverra quis pellentesque dictumst. Luctus wisi sit natoque, est consectetuer porta, mauris porttitor id arcu faucibus felis. Montes faucibus tempor nec, quam est aenean porta tortor nunc, nisl per erat lobortis ex massa sit, sed purus platea rhoncus mattis. Sed donec commodo. Felis lobortis, turpis tellus sapien, vestibulum etiam eleifend, vestibulum amet quis. Tincidunt a sociis vitae risus veniam elit, mauris aliquam quis, dapibus perspiciatis massa, a in et erat aliquam luctus. Dolor amet mattis, a lorem, libero lorem laoreet vel fusce integer netus, convallis lacinia, sodales posuere nunc vel eget nullam libero. Non ipsum fermentum felis pede tortor imperdiet, malesuada odio sed orci, neque auctor. Hendrerit vehicula nec leo in. Cursus turpis in ut in iaculis, congue fermentum turpis tristique vestibulum, sociosqu porttitor, mauris enim ipsum vestibulum, metus massa ipsum fusce sed. Ut nunc neque libero imperdiet vel, urna libero adipiscing asperiores turpis, interdum donec, scelerisque eget vitae phasellus sollicitudin sit pede, nunc nec class mauris ad in tellus. -->
                    </div>

                    <div class="information">
                        <div class="row">

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
                                                <span class="input-group-text">instagram.com/</span>
                                            </div><input type="text" name="instagram" value="{{ $social_media->instagram }}" class="form-control" style="width:1%">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">twitter.com/</span>
                                            </div><input type="text" name="twitter" value="{{ $social_media->twitter }}" class="form-control" style="width:1%">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                {{-- {{ $profile->area_of_specialty }} --}}
                                <div class="btn-group">
                                    <button type="submit" class="btn btn--secondary">Save</button>
                                    
                                    <!-- <a href="#" class="btn btn--primary"> Edit </a>
                                    <a href="#" class="btn btn--secondary"> save </a> -->
                                    
                                </div>
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
@endpush