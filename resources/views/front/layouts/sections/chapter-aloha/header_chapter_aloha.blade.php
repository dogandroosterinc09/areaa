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
                    <div class="title"><span>Join AREAA</span></div>
                    <div class="info">
                        <a href="tel:619.795.7873"><i class="ic-phone" aria-hidden="true"></i> 619.795.7873</a>
                        <a href="mailto:contact@areaa.org"><i class="ic-email"></i> contact@areaa.org</a>
                        <a href="{{url('contact-us')}}"><i class="ic-pin"></i> AREAA National </a>
                        <a href="{{ route('customer.login') }}"><i class="ic-user"></i> Log In</a>
                    </div>
                </div>
                <nav class="navbar-bar">
                    <ul class="navbar-bar__wrapper">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('about-us') }}">About Us <span class="sr-only">(current)</span></a>
                            <div class="dropdown-menu">
                                <ul class="sub-menu mega-menu">
                                    <li><a href="{{url('about-us')}}"> About AREAA </a></li>
                                    <li><a href="{{url('executive-board')}}"> Executive Board </a></li>
                                    <li><a href="{{url('delegate-board')}}"> National Board </a></li>
                                    <li><a href="{{url('about-us')}}"> Our Partners </a></li>
                                    <li><a href="{{url('FAQ')}}"> FAQ </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('membership-registration') }}">Membership</a>
                            <div class="dropdown-menu">
                                <ul class="sub-menu mega-menu">
                                    <li><a href="{{url('about-us')}}"> Why join </a></li>
                                    <li><a href="{{url('areabenefits')}}"> Benefits </a></li>
                                    <li><a href="#"> Find a Member </a></li>
                                    <li><a href="{{url('chapter')}}"> Chapter Locations </a></li>
                                    <li><a href="{{url('membership-registration')}}"> A-List </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('about-us') }}">Advocacy</a>
                            <div class="dropdown-menu">
                                <ul class="sub-menu mega-menu">
                                    <li>
                                        <a class="nav-link" href="#"> Sub menu 1</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"> Sub menu 1</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"> Sub menu 1</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('events') }}">Events</a>
                            <div class="dropdown-menu">
                                <ul class="sub-menu mega-menu">
                                    <li><a href="#"> Leadership Summit</a></li>
                                    <li><a href="#">Global & Luxury Summit</a></li>
                                    <li><a href="#">Regional Retreats</a></li>
                                    <li><a href="#">National Convention</a></li>
                                    <li><a href="{{url('chapter-homepage')}}">Chapter Events </a></li>
                                    <li><a href="#">How to get involved </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('resource-page')}}">
                                Resources
                            </a>
                            <div class="dropdown-menu">
                                <ul class="sub-menu mega-menu">
                                    <li>
                                        <a class="nav-link" href="#"> a | r | e Magazine</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ url('resource-asia-america-report')}}"> State of Asia America Report</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('media')}}"> Webinars</a>
                                    </li>
                                </ul>
                            </div>
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
                                <a href="javascript:void()" class="btn btn--close-menu"> <i class="fa fa-times"
                                                                                            aria-hidden="true"></i> </a>
                                <ul>
                                    <!-- **************************************** -->
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