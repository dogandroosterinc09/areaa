<section class="page page--dashboard page--dashboard--event">
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
        <section class="dashboard-nav" data-aos="fade-up">

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
                                    <a class="nav-link" href="{{ url('dashboard-main') }}">Dashboard <span class="sr-only">(current)</span></a>
                                    {{-- <div class="dropdown-menu">
                                        <ul class="sub-menu">
                                            <li>
                                                <a class="nav-link" href="#"> Sub menu 1</a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('dashboard') }}">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('') }}">Profile</a>
                                    <div class="dropdown-menu">
                                        <ul class="sub-menu">
                                            <li>
                                                <a class="nav-link" href="#"> Sub menu 1</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('') }}">Membership Details</a>
                                 
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" {{--data-toggle="dropdown"--}}>
                                        Profile
                                    </a>
                                   
                                </li>
                            </ul>
                        </nav>
        
        
                    </div>
                </div>
            </div>
        
        </section>





        <section class="dashboard-content dashboard-content__events" data-aos="fade-up">
            <div class="container-max">
                <div class="col-lg-12">
                        
                        <div class="events-upcoming" id="upcoming-envents-owner">
                            <div class="primary-heading text-center">
                                <h3> My Upcoming Events </h3>
                            </div>

                            {{-- loop here --}}
                            <div class="events-upcoming__box">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 btn--thirdevents-upcoming__image">
                                        <a href="#">
                                            <img src="{{ url('public/images/event-preview.jpg') }}" alt="event title" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 content-middle">
                                        <div class="events-upcoming__content ">
                                            <h4>2020 Installation Celebration</h4>
                                            <h5>January 9, 2020  | 6:00 pm - 9:00 pm</h5>
                                            <div class="events-upcoming__description limit-me">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco lab.
                                                 oris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                             <a href="#" class="btn btn--primary"> Read More Details <i class="fas fa-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- loop here --}}

                        </div>


                        <div class="attended-events">

                            <div class="primary-heading text-center">
                                <h3> Previously Attended Events</h3>
                            </div>

                            <div class="attended-events__label">
                                <ul>
                                    <li class="attended-events__title">
                                       Name
                                    </li>
                                    <li class="attended-events__date">Start Date</li>
                                    <li class="attended-events__date">End Date</li>
                                    <li class="attended-events__action">
                                        Action
                                    </li>
                                </ul>
                            </div>
                            {{-- loop here  --}}
                            <div class="attended-events__item">
                                <div class="attended-events__content">
                                    <ul>
                                        <li class="attended-events__title">
                                            <label>Title</label>
                                            <h3>Northwest Regional Retreat </h3>
                                        </li>
                                        <li class="attended-events__date">
                                            <label>Start Date</label>
                                            01/02/2020</li>
                                        <li class="attended-events__date">
                                            <label>Start Date</label>
                                            01/03/2020</li>
                                        <li class="attended-events__action">
                                            <label>actions</label>
                                            <a href="#"> View Invoice  <i class="fas fa-sort-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- loop here  --}}

                               {{-- loop here  --}}
                            <div class="attended-events__item">
                                <div class="attended-events__content">
                                    <ul>
                                        <li class="attended-events__title">
                                            <label>Title</label>
                                            <h3>2019 Global Luxury Summit
                                            </h3>
                                        </li>
                                        <li class="attended-events__date">
                                            <label>Start Date</label>
                                            01/02/2020</li>
                                        <li class="attended-events__date">
                                            <label>Start Date</label>
                                            01/03/2020</li>
                                        <li class="attended-events__action">
                                            <label>actions</label>
                                            <a href="#"> View Invoice  <i class="fas fa-sort-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- loop here  --}}

                                {{-- loop here  --}}
                            <div class="attended-events__item">
                                <div class="attended-events__content">
                                    <ul>
                                        <li class="attended-events__title">
                                            <label>Title</label>
                                            <h3>AREAA Commercial Summit
                                            </h3>
                                        </li>
                                        <li class="attended-events__date">
                                            <label>Start Date</label>
                                            01/02/2020</li>
                                        <li class="attended-events__date">
                                            <label>Start Date</label>
                                            01/03/2020</li>
                                        <li class="attended-events__action">
                                            <label>actions</label>
                                            <a href="#"> View Invoice  <i class="fas fa-sort-down"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- loop here  --}}


                        </div>

                </div>
            </div>
        </section>
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>