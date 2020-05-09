  {{-- memberdirectory-detail-content --}}
  <div class="profile">
    <div class="profile__wrapper container">
        <div class="row">


            <div class="col-md-3 profile__left">
                <div class="profile__upload text-center">
                    <div class="profile__image image-background">
                        <img src="{{ url('public/images/no-pix.jpg') }}" alt="" class="img-fluid"> 
                    </div>
                    <button class="btn btn--primary"> upload image </button>
                </div>

                <div class="profile__year">
                    <div class="memberdirectory-detail__badge-year">
                        2011
                    </div>
                </div>

                <div class="profile__badge">
                    {{-- @foreach(explode(',',$member->badges) as $badge)
                    <img src="{{ url($badge) }}" alt="" class="img-fluid">
                    @endforeach --}}
                    <img src="{{ url('public/images/area-list.png') }}" alt="" class="img-fluid"> 
                    <img src="{{ url('public/images/area-lux.jpg') }}" alt=""  class="img-fluid">  
                  
                </div>


                <div class="profile__social-link">
                    <h5>Stay Connected:</h5>

                    <div class="socials">
                        <a href="#" title="facebook" class="fb"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" title="twitter" class="tw"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="instagram" class="ig"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>

            </div>




            <div class="col-md-9 profile__right">
                <div class="profile__content">
                    <div class="profile__date">Member Since
                        Member Since 2011</div>
                    <div class="profile__title">
                        <h3> 
                            {{-- {{ $profile->name }}  --}}
                            Mami Takeda
                        </h3>
                    </div>
                    <div class="profile__position"> 
                        {{-- {{ $profile->role }}  --}}
                       SEO
                    </div>

                    <div class="profile__description">
                        {{-- {{ $profile->bio }} --}}
                        Lorem ipsum dolor sit amet, praesent placerat donec, tristique interdum vestibulum dui varius eget donec, sit pede nec mollis, tincidunt adipiscing varius, at lectus pellentesque viverra quis pellentesque dictumst. Luctus wisi sit natoque, est consectetuer porta, mauris porttitor id arcu faucibus felis. Montes faucibus tempor nec, quam est aenean porta tortor nunc, nisl per erat lobortis ex massa sit, sed purus platea rhoncus mattis. Sed donec commodo. Felis lobortis, turpis tellus sapien, vestibulum etiam eleifend, vestibulum amet quis. Tincidunt a sociis vitae risus veniam elit, mauris aliquam quis, dapibus perspiciatis massa, a in et erat aliquam luctus. Dolor amet mattis, a lorem, libero lorem laoreet vel fusce integer netus, convallis lacinia, sodales posuere nunc vel eget nullam libero. Non ipsum fermentum felis pede tortor imperdiet, malesuada odio sed orci, neque auctor. Hendrerit vehicula nec leo in. Cursus turpis in ut in iaculis, congue fermentum turpis tristique vestibulum, sociosqu porttitor, mauris enim ipsum vestibulum, metus massa ipsum fusce sed. Ut nunc neque libero imperdiet vel, urna libero adipiscing asperiores turpis, interdum donec, scelerisque eget vitae phasellus sollicitudin sit pede, nunc nec class mauris ad in tellus.
                    </div>

                    <div class="information">
                        <div class="row">

                            <div class="col-md-3">
                                <b>Location</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->location }} --}}
                              <input type="text" value="San Diego CA">
                            </div>

                            <div class="col-md-3">
                                <b>Company</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->company }} --}}
                                <input type="text" value="Company A">
                            </div>

                            <div class="col-md-3">
                                <b>Email</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->user->email }} --}}
                                <input type="text" value="customer1@email.com">
                            </div>


                            <div class="col-md-3">
                                <b>Phone</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->user->phone }} --}}
                                <input type="text" value="2233">
                            </div>

                            <div class="col-md-3">
                                <b>Language Spoken</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->language_spoken }} --}}
                                <input type="text" value="English">
                            </div>

                            <div class="col-md-3">
                                <b>Designations</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->designations }} --}}
                                <input type="text" value="Lorem Ipsum Elite">
                            </div>

                            <div class="col-md-3">
                                <b>Area of Specialty</b>
                            </div>
                            <div class="col-md-9">
                                {{-- {{ $profile->area_of_specialty }} --}}
                                <input type="text" value="Lorem Ipsum, Dolor Sup Melis, Vellis Lorem">
                            </div>

                            <div class="col-md-12 text-right">
                                {{-- {{ $profile->area_of_specialty }} --}}
                                <div class="btn-group">
                                    <a href="#" class="btn btn--primary"> Edit </a>
                                    <a href="#" class="btn btn--secondary"> save </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- memberdirectory-detail-content --}}