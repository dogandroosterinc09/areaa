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
       <section class="dashboard-nav">

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
    
    </section>




        <section class="dashboard-content dashboard-content__memberdirectory">
            <div class="container-max">

                <div class="col-lg-12">

                    <div class="primary-heading text-center">
                        <h3> Member Directory </h3>
                    </div>

                    <div class="search-member-directory">
                        <form>
                            <div class="search-member-directory__wrapper container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="Keyword Search"> 
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name"> 
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="Location: City and/or Zip"> 
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                       <ul class="inline-flex inline-flex__extend">
                                           <li>
                                                <div class="advance-tool">
                                                    <a href="#">
                                                        <i class="fas fa-cog"></i> Advanced
                                                    </a>
                                                </div>
                                           </li>
                                           <li>
                                                <button class="btn btn--secondary">search</button> 
                                           </li>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                                     {{-- loop this --}}

                                </div>


                                <div class="col-lg-12 text-center">
                                    
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