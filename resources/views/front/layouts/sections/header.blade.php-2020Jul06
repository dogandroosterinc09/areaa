<header>

    {{-- FOR DESKTOP MENU  --}}
    <div class="main-nagivation-desktop container-max">
        <div class="main-nagivation-desktop__wrapper--row row">
            <div class="col-lg-4">
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('public/images/header/header-logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="col-lg-8">
                <div class="contact-details-wrap">
                 
                    <div class="info">
                        {{-- title --}}
                        @guest                        
                        <div class="title">
                            <a href="{{url('membership-registration')}}"><span>Join AREAA</span></a>
                        </div>
                        @endguest

                        <ul>
                            <li> <a href="{{section('Contact Us.data.first.tel_link')}}"><i class="ic-phone" aria-hidden="true"></i> {{section('Contact Us.data.first.tel_text')}}</a></li>
                            <li> <a href="{{section('Contact Us.data.first.mail_link')}}"><i class="ic-email"></i> {{section('Contact Us.data.first.mail_text')}}</a></li>

                            @auth
                            <li>
                                <a href="{{url('/')}}" class="dropdown-toggle-menu">
                                <i class="ic-chapter"></i> 
                                    AREAA National
                                </a>
                            </li>
                            @else
                            <li>  
                                <a href="{{url('chapter')}}" class="dropdown-toggle-menu">
                                <i class="ic-pin"></i> 
                                Find your Chapter
                                </a>
                                <div class="info__menu">
                                    <ul>
                                        @foreach(\App\Models\Chapter::all() as $chapter)
                                        <li> <a href="{{url('/'.$chapter->slug)}}">{{$chapter->name}}</a></li>
                                        @endforeach
                                        <!-- <li> <a href="{{url('/aloha')}}"> Aloha</a></li>
                                        <li> <a href="{{url('/atlantametro')}}"> Atlanta Metro</a></li>
                                        <li> <a href="{{url('/newyorkeast')}}"> New York East</a></li> -->
                                    </ul>
                                 </div>
                             </li>
                             @endauth

                            <li> 
                                @auth
                                {{-- <a href="{{ route('customer.logout') }}"><i class="ic-user"></i> Log Out</a> --}}

                                <div class="logout-dropdown">
                                    <a class="dropdown-toggle" href="" role="button" id="logout-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ic-user"></i> Welcome
                                    </a>
                                  
                                    <div class="dropdown-menu" aria-labelledby="logout-button">
                                      <a class="dropdown-item" href="{{ route('customer.dashboard') }}">Dashboad</a>
                                      {{-- <a class="dropdown-item" href="{{ url( (auth()->user()->chapter == 'national' ? '' : auth()->user()->chapter_slug) . '/events' ) }}">Events</a> --}}
                                      <a class="dropdown-item" href="{{ route('customer.dashboard.events') }}">Events</a>
                                     
                                      <a class="dropdown-item" href="{{ route('customer.dashboard.member_directory') }}">Membership Directory </a>
                                      <a class="dropdown-item" href="{{ route('customer.dashboard.profile') }}">Profile </a>
                                      <a class="dropdown-item" href="{{ route('customer.dashboard.support') }}">Support </a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="{{ route('customer.logout') }}"> <i class="fas fa-power-off"></i> Logout </a>
                                    </div>
                                </div>


                                @else


                                <a href="{{ route('customer.login') }}"><i class="ic-user"></i> Log In</a>
                                @endauth                                
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="navbar-bar">
                    <ul class="navbar-bar__wrapper">
                        <li class="nav-item dropdown
                            {{ ($page->slug == 'about-us' || 
                               $page->slug == 'executive-board' ||
                               $page->slug == 'delegate-board' ||
                               $page->slug == 'our-partners' ||
                               $page->slug == 'sponsors' ||
                               $page->slug == 'FAQ' ||
                               $page->slug == 'photo-gallery' ||
                               $page->slug == 'contact-us') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="{{ url('about-us') }}">About Us <span class="sr-only">(current)</span></a>
                            <div class="dropdown-menu">
                                <ul class="sub-menu mega-menu">
                                    <li class="{{ $page->slug == 'about-us' ? 'active' : '' }}" ><a href="{{url('about-us')}}"> About AREAA </a></li>
                                    <li class="{{ $page->slug == 'executive-board' ? 'active' : '' }}" ><a href="{{url('executive-board')}}"> Executive Board </a></li>
                                    <li class="{{ $page->slug == 'delegate-board' ? 'active' : '' }}" ><a href="{{url('delegate-board')}}"> Delegate Board </a></li>
                                    <li class="{{ $page->slug == 'our-partners' ? 'active' : '' }}" ><a href="{{url('our-partners')}}"> Our Partners </a></li>
                                    <li class="{{ $page->slug == 'sponsors' ? 'active' : '' }}" ><a href="{{url('sponsors')}}">Our Sponsors</a></li>
                                    <li class="{{ $page->slug == 'FAQ' ? 'active' : '' }}" ><a href="{{url('FAQ')}}"> FAQ </a></li>
                                    <li class="{{ $page->slug == 'photo-gallery' ? 'active' : '' }}" ><a href="{{url('photo-gallery')}}"> Photo Gallery </a></li>
                                    <li class="{{ $page->slug == 'contact-us' ? 'active' : '' }}" ><a href="{{url('contact-us')}}"> Contact Us </a></li>
                                    {{-- <li><a href="#"> Career </a></li> --}}

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown
                            {{ ($page->slug == 'membership-registration' ||
                                $page->slug == 'areabenefits' || 
                                $page->slug == 'chapter') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="{{ url('membership-registration') }}">Membership</a>
                            <div class="dropdown-menu">
                                <ul class="sub-menu mega-menu">
                                    <li><a href="{{url('about-us')}}"> Why join </a></li>
                                    <li class="{{ $page->slug == 'areabenefits' ? 'active' : '' }}" ><a href="{{url('areabenefits')}}"> Benefits </a></li>
                                    <li><a href="{{ route('customer.login') }}"> Find a Member </a></li>
                                    <li class="{{ $page->slug == 'chapter' ? 'active' : '' }}" ><a href="{{url('chapter')}}"> Chapter Locations </a></li>
                                    {{-- <li><a href="{{url('membership-registration')}}"> A-List </a></li> --}}
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('about-us') }}">Advocacy</a>
                            <div class="dropdown-menu">
                                <ul class="sub-menu mega-menu">
                                    {{-- <li>
                                        <a class="nav-link" href="#"> AREAA Timeline</a>
                                    </li> --}}
                                    <li>
                                        <a class="nav-link" href="#"> How to get involved</a>
                                    </li>
                                    {{-- <li>
                                        <a class="nav-link" href="#"> 3 Point Plan</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown
                            {{ ($page->slug == 'events' || 
                               $page->slug == 'events-chapter') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="{{ url('events') }}">Events</a>
                            <div class="dropdown-menu">
                                <ul class="sub-menu mega-menu">
                                    <li class="{{ $page->slug == 'events' ? 'active' : '' }}" ><a href="{{url('events')}}">National Events</a></li>
                                    <li class="{{ $page->slug == 'events-chapter' ? 'active' : '' }}" ><a href="{{url('events-chapter')}}">Chapter Events</a></li>
                                    {{-- <li><a href="#"> Leadership Summit</a></li>
                                    <li><a href="#">Global & Luxury Summit</a></li>
                                    <li><a href="#">Regional Retreats</a></li>
                                    <li><a href="#">National Convention</a></li>
                                    <li><a href="{{url('')}}">Chapter Events </a></li>
                                    <li><a href="#">How to get involved </a></li> --}}
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown
                            {{ ($page->slug == 'resource-page' || 
                               $page->slug == 'resource-asia-america-report' ||
                               $page->slug == 'media') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="{{ url('resource-page')}}">
                                Resources
                            </a>
                            <div class="dropdown-menu">
                                <ul class="sub-menu mega-menu">
                                    {{-- <li>
                                        <a class="nav-link" href="#"> a | r | e Magazine</a>
                                    </li> --}}
                                    <li class="{{ $page->slug == 'resource-asia-america-report' ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('resource-asia-america-report')}}"> State of Asia America Report</a>
                                    </li>
                                    <li class="{{ $page->slug == 'media' ? 'active' : '' }}" >
                                        <a href="{{ url('media')}}"> Media</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Line 183 -->
            {{-- print_r(auth()->user()) --}}

            <!-- ending of row  -->
        </div>
        <!-- ending of container  -->
    </div>


     {{-- FOR MOBILE MENU  --}}
     <div class="main-nagivation-mobile">
        <div class="main-nagivation-mobile__wrapper container">
            <div class="main-nagivation-mobile__wrapper--row">

                <div class="col-md-12">
                <!-- {{-- MOBILE HEADER --}} -->
                    <div class="mobile-header__wrapper">

                        <div class="login-option">
                            <a href="{{ route('customer.login') }}" class="dropdown-toggle" href="" role="button" id="logout-button-mobile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>

                            @auth

                            {{-- <a href="{{ route('customer.logout') }}"><i class="ic-user"></i> Log Out</a> --}}

                            <div class="logout-dropdown">
                                <a class="dropdown-toggle" href="" role="button" id="logout-button-mobile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ic-user"></i> Welcome
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="logout-button-mobilen">
                                  <a class="dropdown-item" href="{{ route('customer.dashboard') }}">Dashboard</a>
                                  {{-- <a class="dropdown-item" href="{{ url( (auth()->user()->chapter == 'national' ? '' : auth()->user()->chapter_slug) . '/events' ) }}">Events</a> --}}
                                  <a class="dropdown-item" href="{{ route('customer.dashboard.events') }}">Events</a>
                                 
                                  <a class="dropdown-item" href="{{ route('customer.dashboard.member_directory') }}">Membership Directory </a>
                                  <a class="dropdown-item" href="{{ route('customer.dashboard.profile') }}">Profile </a>
                                  <a class="dropdown-item" href="{{url('support')}}">Support </a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="{{ route('customer.logout') }}"> <i class="fas fa-power-off"></i> Logout </a>
                                </div>
                            </div>


                            @else


                            <a href="{{ route('customer.login') }}"><i class="ic-user"></i> Log In</a>
                            @endauth   



                        </div>

                        <div class="mobile-logo">
                            <a href="{{ url('/') }}" class="logo" aria-label="areaa logo">
                                <img src="{{ asset('public/images/header/header-logo.png') }}" alt="logo">
                            </a>
                        </div>


                        <div class="mobile-header__wrapper--item d-inline-block align-top">
                            <div class="mob-burger-menu">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                            <div class="mob-nav-menu">
                                <a href="javascript:void()" class="btn btn--close-menu"> 
                                    <i class="fa fa-times" aria-hidden="true"></i> 
                                </a>

                                <ul class="contact-icons">
                                    <li> <a href="tel:6197957873"><i class="fas fa-phone"></i></a></li>
                                    <li> <a href="mailto:contact@areaa.org"><i class="far fa-envelope"></i></a></li>
                                </ul>
                                <ul>
                                    <!-- **************************************** -->
                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('chapter') }}">Find Chapter<span
                                                    class="sr-only">(current)</span></a>
                                        <div class="icon-button icon-button__open">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-button icon-button__close">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>

                                        <ul class="sub-menu no-mega-sub">
                                            {{-- <li> <a href="{{url('/aloha')}}"> Aloha</a></li>
                                            <li> <a href="{{url('/atlantametro')}}"> Atlanta Metro</a></li>
                                            <li> <a href="{{url('/newyorkeast')}}"> New York East</a></li> --}}

                                            @foreach(\App\Models\Chapter::all() as $chapter)
                                            <li> <a href="{{url('/'.$chapter->slug)}}">{{$chapter->name}}</a></li>
                                            @endforeach
                                            <!-- <li> <a href="{{url('/aloha')}}"> Aloha</a></li>
                                            <li> <a href="{{url('/atlantametro')}}"> Atlanta Metro</a></li>
                                            <li> <a href="{{url('/newyorkeast')}}"> New York East</a></li> -->

                                        </ul>
                                    </li>
                                    @endguest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/') }}">Home <span
                                                    class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('about-us') }}">about us</a>
                                        <div class="icon-button icon-button__open">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-button icon-button__close">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>

                                        <ul class="sub-menu no-mega-sub">
                                                <li><a href="{{url('about-us')}}"> About AREAA </a></li>
                                                <li><a href="{{url('executive-board')}}"> Executive Board </a></li>
                                                <li><a href="{{url('delegate-board')}}"> Delegate Board </a></li>
                                                <li><a href="{{url('our-partners')}}"> Our Partners </a></li>
                                                <li><a href="{{url('sponsors')}}">Our Sponsors</a></li>
                                                <li><a href="{{url('FAQ')}}"> FAQ </a></li>
                                                <li><a href="{{url('photo-gallery')}}"> Photo Gallery </a></li>
                                                {{-- <li><a href="#"> Career </a></li> --}}
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">membership</a>

                                        
                                        <div class="icon-button icon-button__open">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-button icon-button__close">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>

                                        <ul class="sub-menu no-mega-sub">
                                            <li>
                                                <li><a href="{{url('about-us')}}"> Why join </a></li>
                                                <li class="{{ $page->slug == 'areabenefits' ? 'active' : '' }}" ><a href="{{url('areabenefits')}}"> Benefits </a></li>
                                                <li><a href="{{ route('customer.login') }}"> Find a Member </a></li>
                                                <li class="{{ $page->slug == 'chapter' ? 'active' : '' }}" ><a href="{{url('chapter')}}"> Chapter Locations </a></li>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            Advocacy
                                        </a>

                                        <div class="icon-button icon-button__open">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-button icon-button__close">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>

                                        <ul class="sub-menu no-mega-sub">
                                            <li>
                                                <a class="nav-link" href="#"> How to get involved</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#">
                                            Events
                                        </a>

                                        <div class="icon-button icon-button__open">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-button icon-button__close">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                        <ul class="sub-menu no-mega-sub">
                                            <li class="{{ $page->slug == 'events' ? 'active' : '' }}" ><a href="{{url('events')}}">National Events</a></li>
                                            <li class="{{ $page->slug == 'events-chapter' ? 'active' : '' }}" ><a href="{{url('events-chapter')}}">Chapter Events</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#">
                                            Resources
                                        </a>

                                        <div class="icon-button icon-button__open">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-button icon-button__close">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                        <ul class="sub-menu no-mega-sub">
                                            <li>
                                                <a class="nav-link" href="{{ url('resource-asia-america-report')}}"> State of Asia America Report</a>
                                            </li>
                                            <li class="{{ $page->slug == 'media' ? 'active' : '' }}" >
                                                <a href="{{ url('media')}}"> Media</a>
                                            </li>
                                        </ul>
                                    </li>
{{-- 
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('contact-us') }}">Contact Us</a>
                                    </li> --}}
                                    <!-- **************************************** -->

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

</header>


<section class="search-box">
    <div class="search-box__button"></div>
    <div class="search-box__wrapper container">
        <div class="row">
            <div class="col-md-12">
                <form class="search-form" action="{{ url('/') }}" method="GET">
                    <div class="form-group">
                        <a class="nav-link " type="submit" href="javascript:void(0)">
                            <i class="fa fa-search"></i>
                        </a>
                        <input type="text" name="keyword" id="keyword" placeholder="Search Keyword">

                        {{-- <input type="text" name="keyword" id="keyword" placeholder="Search Keyword"
                                   value="{{ !empty($search_params) && isset($search_params['keyword']) ? $search_params['keyword'] : '' }}"
                        spellcheck="false"> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>