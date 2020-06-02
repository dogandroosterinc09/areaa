<header>
    @if(!isset($chapter))
        @php( $chapter = \App\Models\Chapter::find(auth()->user()->chapter_id) )
    @endif
    
    {{-- FOR DESKTOP MENU  --}}
    <div class="main-nagivation-desktop container-max">
        <div class="main-nagivation-desktop__wrapper--row row">
            <div class="col-lg-4">
                <a href="{{ url($chapter['slug']) }}" class="logo">
                    @php( $chapter_logo = \App\Models\ChapterLogo::where('chapter_id', $chapter->id)->get()->last() )
                    <img src="{{ $chapter_logo ? asset($chapter_logo->image) : asset('public/images/header/header-logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="col-lg-8">
                <div class="contact-details-wrap">
                   
                    <div class="info">
                        @guest
                        <div class="title"><a href="{{url('membership-registration')}}"><span>Join AREAA</span></a></div>
                        @endguest
                        <ul>
                            <li> <a href="{{section('Contact Us.data.first.tel_link')}}"><i class="ic-phone" aria-hidden="true"></i> {{section('Contact Us.data.first.tel_text')}}</a></li>
                            <li> <a href="{{section('Contact Us.data.first.mail_link')}}"><i class="ic-email"></i> {{section('Contact Us.data.first.mail_text')}}</a></li>
                            <li>  
                                <a href="{{url('/')}}" class="dropdown-toggle-menu">
                                <i class="ic-chapter"></i> 
                                AREAA National
                                </a>
                                {{-- <div class="info__menu">
                                    <ul>
                                        <li> <a href="{{url('/aloha')}}"> Aloha</a></li>
                                        <li> <a href="{{url('/atlantametro')}}"> Atlanta Metro</a></li>
                                        <li> <a href="{{url('/newyorkeast')}}"> New York East</a></li>
                                    </ul>
                                 </div> --}}
                             </li>
                             @guest
                            <li> 
                                <a href="{{ url($chapter['slug'].'/login') }}"><i class="ic-user"></i> Log In</a>
                            </li>
                            @else
                            <li>
                            
                            <div class="logout-dropdown">
                                <a class="dropdown-toggle" href="" role="button" id="logout-button-mobile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ic-user"></i> Welcome
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="logout-button-mobilen">
                                  <a class="dropdown-item" href="{{ route('customer.dashboard') }}">Dashboad</a>
                                  {{-- <a class="dropdown-item" href="{{ url( (auth()->user()->chapter == 'national' ? '' : auth()->user()->chapter_slug) . '/events' ) }}">Events</a> --}}
                                  <a class="dropdown-item" href="{{ route('customer.dashboard.events') }}">Events</a>
                                 
                                  <a class="dropdown-item" href="{{ route('customer.dashboard.member_directory') }}">Membership Directory </a>
                                  <a class="dropdown-item" href="{{ route('customer.dashboard.profile') }}">Profile </a>
                                  <a class="dropdown-item" href="{{url('support')}}">Support </a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="{{ route('customer.logout') }}"> <i class="fas fa-power-off"></i> Logout </a>
                                </div>
                            </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
                <nav class="navbar-bar">
                    <ul class="navbar-bar__wrapper">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url($chapter['slug']) }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url($chapter['slug'].'/about-us') }}">About Us</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url($chapter['slug'].'/events') }}">Events</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url($chapter['slug'].'/leadership-board') }}">Leadership</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url($chapter['slug'].'/contact-us') }}">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
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

                        <div class="mobile-logo">
                            <a href="{{ url('/aloha') }}" class="logo" aria-label="areaa logo">
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
                                <a href="javascript:void()" class="btn btn--close-menu"> <i class="fa fa-times"
                                                                                            aria-hidden="true"></i> </a>
                                <ul>
                                    <!-- **************************************** -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/aloha') }}">Home <span
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
                                            <li>
                                                <a href="#"> Sub menu1</a>
                                            </li>
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
                                                <a href="#"> Sub menu1</a>
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
                                                <a href="#"> Sub menu1</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link " href="{{url('aloha-events')}}">
                                            Events
                                        </a>

                                        <div class="icon-button icon-button__open">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>
                                        <div class="icon-button icon-button__close">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                        <ul class="sub-menu no-mega-sub">
                                            <li>
                                                <a href="#"> Sub menu1</a>
                                            </li>
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
                                                <a href="#"> Sub menu1</a>
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