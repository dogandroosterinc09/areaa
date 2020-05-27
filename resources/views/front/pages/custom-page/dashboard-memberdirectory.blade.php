<section class="page page--dashboard page--dashboard--memberdirectory">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    {{-- <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>National</h3>
                            <h1>Events</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/events-banner.jpg') }}">
        </div>
    </section> --}}




    <main class="main-content">

        {{-- @include('front.pages.custom-page.sections.dashboard-menu') --}}
        @include('front.pages.custom-page.sections.dashboard-menu')
        
        <!-- <section class="dashboard-nav">

            <div class="dashboard-navigation">
                <div class="dashboard-navigation__wrapper">
                    <div class="dashboard-navigation__item">
                        {{-- <ul>
                            <li><a href="#"> Dashboard</a> </li>
                            <li><a href="#"> Events</a> </li>
                            <li><a href="#"> Profile</a> </li>
                            <li><a href="#"> Membership Details</a> </li>
                            <li><a href="#"> Support</a> </li>
                        </ul> --}}
        
                        <nav class="navbar-bar">
                            <ul class="navbar-bar__wrapper">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ url('dashboard-main') }}">Dashboard <span class="sr-only">(current)</span></a>
                                    <div class="dropdown-menu">
                                        <ul class="sub-menu">
                                            <li>
                                                <a class="nav-link" href="#"> Sub menu 1</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('dashboard') }}">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('dashboard-memberdirectory') }}">Membership Directory</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" {{--data-toggle="dropdown"--}}>
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('dashboard-memberdirectory-detail') }}" {{--data-toggle="dropdown"--}}>
                                        Membership Details
                                    </a>
                                </li>
                            
                                <li class="nav-item">
                                    <a class="nav-link" href="#" {{--data-toggle="dropdown"--}}>
                                        Support
                                    </a>
                                </li>
                            </ul>
                        </nav>
        
        
                    </div>
                </div>
            </div>
    
        </section> -->

        <section class="dashboard-content dashboard-content__memberdirectory" data-aos="fade-up">
            <div class="container-max">

                <div class="col-lg-12">

                    <div class="primary-heading text-center">
                        <h3> Member Directory </h3>
                    </div>

                    <div class="search-member-directory">
                    {{  Form::open([
                        'method' => 'GET',
                        'id' => '',
                        'route' => ['customer.dashboard.member_directory.search'],
                        'class' => ''
                        ])
                    }}
                            <div class="search-member-directory__wrapper container">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="Keyword Search" name="keyword" value="{{ Request::get('keyword') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name" name="name" value="{{ Request::get('name') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="Location: City and/or Zip" name="location" value="{{ Request::get('location') }}"> 
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                       <ul class="inline-flex inline-flex__extend">
                                           <li>
                                                <div class="advance-tool text-center">
                                                    <a href="#">
                                                        <i class="fas fa-cog"></i> <span>Advanced</span>
                                                    </a>
                                                </div>
                                           </li>
                                           <li>
                                                <button class="btn btn--secondary">search</button> 
                                           </li>
                                       </ul>
                                    </div>
                                </div>
                                <div class="row mt-3 advance-search {{ Request::get('company') || Request::get('chapter') || Request::get('designation') ? '' : 'd-none' }}">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="Company" name="company" value="{{ Request::get('company') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="Chapter" name="chapter" value="{{ Request::get('chapter') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="Designation" name="designation" value="{{ Request::get('designation') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>


                    <div class="member-directory-result">
                        <div class="member-directory-result__wrapper container">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="member-directory-result__item member-directory-result__label">
                                        <div class="member-directory-result__name"> <h3>Name</h3> </div>
                                        <div class="member-directory-result__location"> <h3>Location</h3>  </div>
                                        <div class="member-directory-result__language"> <h3>Language Spoken</h3>  </div>
                                        <div class="member-directory-result__action"> <h3>Action</h3> </div>
                                    </div>
                                                                        
                                    @forelse($members as $member)
                                    {{-- loop this --}}
                                    <div class="member-directory-result__item member-directory-result__results">
                                       
                                        <div class="member-directory-result__name"> 
                                            <div class="member-directory-result__label-mobile"><h4>Name</h4></div>
                                            <div class="member-directory-result__avatar image-background">
                                                <img src="{{ $member->avatar ? asset($member->avatar) : url('public/images/no-pix.jpg') }}" alt=""> 
                                            </div>
                                            <h4> {{ $member->name }} </h4> </div>
                                        <div class="member-directory-result__location">
                                            <div class="member-directory-result__label-mobile"><h4>Location</h4></div>
                                            {{ $member->location }}
                                        </div>
                                        <div class="member-directory-result__language">
                                            <div class="member-directory-result__label-mobile"><h4>Language Spoken</h4></div>
                                            {{ $member->language_spoken }}
                                        </div>
                                        <div class="member-directory-result__action"> 
                                            <div class="member-directory-result__label-mobile"><h4>Action</h4></div>
                                            <a href="{{ route('customer.dashboard.member_detail', $member->user_id) }}">View Profile</a> 
                                        </div>
                                    </div>
                                    {{-- loop this --}}
                                    @empty
                                    <div class="member-directory-result__item">
                                        <div>No member found.</div>
                                    </div>
                                    @endforelse

                                    <!-- {{-- loop this --}}
                                    <div class="member-directory-result__item member-directory-result__results">
                                        <div class="member-directory-result__name"> 
                                            <div class="member-directory-result__avatar image-background">
                                                <img src="{{ url('public/images/member-avatar.jpg') }}" alt=""> 
                                            </div>
                                            <h4> Mary Johnson </h4> </div>
                                        <div class="member-directory-result__location"> San Diego, CA </div>
                                        <div class="member-directory-result__language"> English </div>
                                        <div class="member-directory-result__action"> <a href="{{url('dashboard-memberdirectory-detail')}}">View Profile</a> </div>
                                    </div>
                                     {{-- loop this --}}

                                    {{-- loop this --}}
                                    <div class="member-directory-result__item member-directory-result__results">
                                        <div class="member-directory-result__name"> 
                                            <div class="member-directory-result__avatar image-background">
                                                <img src="{{ url('public/images/member-avatar2.jpg') }}" alt=""> 
                                            </div>
                                            <h4> Henry McCalistar </h4> </div>
                                        <div class="member-directory-result__location"> Los Angeles, CA </div>
                                        <div class="member-directory-result__language"> English, Spanish </div>
                                        <div class="member-directory-result__action"> <a href="{{url('dashboard-memberdirectory-detail')}}">View Profile</a> </div>
                                    </div>
                                     {{-- loop this --}}

                                    {{-- loop this --}}
                                    <div class="member-directory-result__item member-directory-result__results">
                                        <div class="member-directory-result__name"> 
                                            <div class="member-directory-result__avatar image-background">
                                                <img src="{{ url('public/images/member-avatar3.jpg') }}" alt=""> 
                                            </div>
                                            <h4>Patrisha Kingsley </h4> </div>
                                        <div class="member-directory-result__location"> Seattle, CA </div>
                                        <div class="member-directory-result__language"> English </div>
                                        <div class="member-directory-result__action"> <a href="{{url('dashboard-memberdirectory-detail')}}">View Profile</a> </div>
                                    </div>
                                     {{-- loop this --}}

                                  
                                     
                                    {{-- loop this --}}
                                    <div class="member-directory-result__item member-directory-result__results">
                                        <div class="member-directory-result__name"> 
                                            <div class="member-directory-result__avatar image-background">
                                                <img src="{{ url('public/images/member-avatar4.jpg') }}" alt=""> 
                                            </div>
                                            <h4>Gregory Smith </h4> </div>
                                        <div class="member-directory-result__location"> Dallas, TX </div>
                                        <div class="member-directory-result__language"> English </div>
                                        <div class="member-directory-result__action"> <a href="{{url('dashboard-memberdirectory-detail')}}">View Profile</a> </div>
                                    </div>
                                     {{-- loop this --}}

                                    {{-- loop this --}}
                                    <div class="member-directory-result__item member-directory-result__results">
                                        <div class="member-directory-result__name"> 
                                            <div class="member-directory-result__avatar image-background">
                                                <img src="{{ url('public/images/member-avatar.jpg') }}" alt=""> 
                                            </div>
                                            <h4> Mary Johnson </h4> </div>
                                        <div class="member-directory-result__location"> San Diego, CA </div>
                                        <div class="member-directory-result__language"> English </div>
                                        <div class="member-directory-result__action"> <a href="{{url('dashboard-memberdirectory-detail')}}">View Profile</a> </div>
                                    </div>
                                     {{-- loop this --}}

                                    {{-- loop this --}}
                                    <div class="member-directory-result__item member-directory-result__results">
                                        <div class="member-directory-result__name"> 
                                            <div class="member-directory-result__avatar image-background">
                                                <img src="{{ url('public/images/member-avatar2.jpg') }}" alt=""> 
                                            </div>
                                            <h4> Henry McCalistar </h4> </div>
                                        <div class="member-directory-result__location"> Los Angeles, CA </div>
                                        <div class="member-directory-result__language"> English, Spanish </div>
                                        <div class="member-directory-result__action"> <a href="{{url('dashboard-memberdirectory-detail')}}">View Profile</a> </div>
                                    </div>
                                     {{-- loop this --}}

                                    {{-- loop this --}}
                                    <div class="member-directory-result__item member-directory-result__results">
                                        <div class="member-directory-result__name"> 
                                            <div class="member-directory-result__avatar image-background">
                                                <img src="{{ url('public/images/member-avatar3.jpg') }}" alt=""> 
                                            </div>
                                            <h4>Patrisha Kingsley </h4> </div>
                                        <div class="member-directory-result__location"> Seattle, CA </div>
                                        <div class="member-directory-result__language"> English </div>
                                        <div class="member-directory-result__action"> <a href="{{url('dashboard-memberdirectory-detail')}}">View Profile</a> </div>
                                    </div>
                                     {{-- loop this --}}

                                  
                                     
                                         {{-- loop this --}}
                                    <div class="member-directory-result__item member-directory-result__results">
                                        <div class="member-directory-result__name"> 
                                            <div class="member-directory-result__avatar image-background">
                                                <img src="{{ url('public/images/member-avatar4.jpg') }}" alt=""> 
                                            </div>
                                            <h4>Gregory Smith </h4> </div>
                                        <div class="member-directory-result__location"> Dallas, TX </div>
                                        <div class="member-directory-result__language"> English </div>
                                        <div class="member-directory-result__action"> <a href="{{url('dashboard-memberdirectory-detail')}}">View Profile</a> </div>
                                    </div>
                                     {{-- loop this --}} -->

                                </div>
                                
                                <div class="col-lg-12 text-center">
                                    <nav aria-label="" class="pagination-section">
                                        <ul class="pagination">
                                          <li class="page-item {{$members->previousPageUrl() ? '' : 'disabled'}}">
                                            @if($members->previousPageUrl())
                                            <a class="page-link" href="{{$members->previousPageUrl() . $params}}">Previous</a>
                                            @else
                                            <span class="page-link">Previous</span>
                                            @endif
                                          </li>
                                            @for($ctr = 1; $ctr <= $members->lastPage(); $ctr++)
                                            <li class="page-item {{ $ctr == $members->currentPage() ? 'active' : '' }}" >
                                                @if($ctr == intval($members->currentPage()))
                                                <span class="page-link">{{$ctr}}<span class="sr-only">(current)</span></span>
                                                @else
                                                <a class="page-link" href="{{$members->url($ctr) . $params}}">{{$ctr}}</a>
                                                @endif
                                            </li>
                                            @endfor
                                          <li class="page-item {{$members->nextPageUrl() ? '' : 'disabled'}}">
                                            @if($members->nextPageUrl())
                                            <a class="page-link" href="{{$members->nextPageUrl() . $params}}">Next</a>
                                            @else
                                            <span class="page-link">Next</span>
                                            @endif                                            
                                          </li>
                                        </ul>
                                      </nav>
                                </div>

                                <div class="col-lg-12 text-center d-none">
                                    
                                    <nav aria-label="" class="pagination-section">
                                        <ul class="pagination">
                                          <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                          </li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item active" aria-current="page">
                                            <span class="page-link">
                                              2
                                              <span class="sr-only">(current)</span>
                                            </span>
                                          </li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                          </li>
                                        </ul>
                                      </nav>

                                </div>

                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </section>
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>

@push('extrascripts')
<script>
    $(function() {
        $('.advance-tool a').on('click', function(e) {
            e.preventDefault();
            
            if ($('.advance-search').hasClass('d-none')) {
                $('.advance-search').removeClass('d-none');
            } else {
                $('.advance-search').addClass('d-none');
            }
            
        });
    });
</script>
@endpush