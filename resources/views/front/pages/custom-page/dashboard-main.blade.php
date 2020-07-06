<section class="{{ auth()->user()->chapter_id == 0 ? 'page page--dashboard page--dashboard--main' : 'page-chapter page-chapter--dashboard' }}">

    {{-- @include('front.layouts.sections.header') --}}

    @if(auth()->user()->chapter_id == 0)
        @include('front.layouts.sections.header')
    @else
        @include('front.layouts.sections.chapter.header_chapter')
    @endif

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

        @include('front.pages.custom-page.sections.dashboard-menu')

        <section class="dashboard-content dashboard-content__events" data-aos="fade-up">

            <div class="container-max">
                <div class="col-lg-12">

                @if(Session::has('register_success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Thank you for registering! </h4>
                    <p>msg{{ Session::get('register_success') }}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif

                    <div class="navigation-icon">
                        <div class="container">
                            <div class="row">
                                {{-- loop here  --}}
                                <div class="col-lg-4">
                                    <div class="navigation-icon__item navigation-icon__item--imagehover">
                                        <div class="navigation-icon__watermark">
                                            <a href="javascipt:void()" data-toggle="modal" data-target="#areamembershipcard">
                                                <h3> Areaa Membership Card </h3>
                                            </a>
                                        </div>
                                        <div class="navigation-icon__icon">
                                           <div class="navigation-icon__icon--object menu-icon menu-icon--events">

                                           </div>
                                        </div>
                                        <div class="navigation-icon__title">
                                            <h3> Areaa Membership Card </h3>
                                        </div>
                                    </div>
                                </div>
                                    {{-- loop here  --}}

                                         {{-- loop here  --}}
                                <div class="col-lg-4">
                                    <div class="navigation-icon__item">
                                        <div class="navigation-icon__hover">
                                            <a href="{{ route('customer.dashboard.events') }}">
                                                <h3> Events</h3>
                                            </a>
                                        </div>
                                        <div class="navigation-icon__icon">
                                           <div class="navigation-icon__icon--object menu-icon menu-icon--events">

                                           </div>
                                        </div>
                                        <div class="navigation-icon__title">
                                            <h3> Events</h3>
                                        </div>
                                    </div>
                                </div>
                                    {{-- loop here  --}}

                                         {{-- loop here  --}}
                                <div class="col-lg-4">
                                    <div class="navigation-icon__item">
                                        <div class="navigation-icon__hover">
                                            <a href="{{ route('customer.dashboard.member_directory') }}">
                                                <h3>Membership Directory</h3>
                                            </a>
                                        </div>
                                        <div class="navigation-icon__icon">
                                           <div class="navigation-icon__icon--object menu-icon menu-icon--directory">

                                           </div>
                                        </div>
                                        <div class="navigation-icon__title">
                                            <h3> Membership Directory</h3>
                                        </div>
                                    </div>
                                </div>
                                    {{-- loop here  --}}

                                {{-- loop here  --}}
                                
                                <div class="col-lg-4">
                                    <div class="navigation-icon__item">
                                        <div class="navigation-icon__hover">
                                            <a href="{{url('areabenefits')}}">
                                                <h3> My Benefits </h3>
                                            </a>
                                        </div>
                                        <div class="navigation-icon__icon">
                                           <div class="navigation-icon__icon--object menu-icon menu-icon--benefits">

                                           </div>
                                        </div>
                                        <div class="navigation-icon__title">
                                            <h3> My Benefits</h3>
                                        </div>
                                    </div>
                                </div>
                               
                                {{-- loop here  --}}


                                         {{-- loop here  --}}
                                <div class="col-lg-4">
                                    <div class="navigation-icon__item">
                                        <div class="navigation-icon__hover">
                                            <a href="{{ route('customer.dashboard.profile') }}">
                                                <h3> Profile </h3>
                                            </a>
                                        </div>
                                        <div class="navigation-icon__icon">
                                           <div class="navigation-icon__icon--object menu-icon menu-icon--one">

                                           </div>
                                        </div>
                                        <div class="navigation-icon__title">
                                            <h3> Profile </h3>
                                        </div>
                                    </div>
                                </div>
                                    {{-- loop here  --}}


                                {{-- loop here  --}}
                                
                                <div class="col-lg-4">
                                    <div class="navigation-icon__item">
                                        <div class="navigation-icon__hover">
                                            <a href="#">
                                                <h3> My Inbox </h3>
                                            </a>
                                        </div>
                                        <div class="navigation-icon__icon">
                                           <div class="navigation-icon__icon--object menu-icon menu-icon--inbox">

                                           </div>
                                        </div>
                                        <div class="navigation-icon__title">
                                            <h3> My Inbox </h3>
                                        </div>
                                    </div>
                                </div>
                               
                                {{-- loop here  --}}

                                {{-- loop here  --}}
                                
                                <div class="col-lg-4">
                                    <div class="navigation-icon__item">
                                        <div class="navigation-icon__hover">
                                            <a href="#">
                                                <h3>My Committee </h3>
                                            </a>
                                        </div>
                                        <div class="navigation-icon__icon">
                                           <div class="navigation-icon__icon--object menu-icon menu-icon--one">

                                           </div>
                                        </div>
                                        <div class="navigation-icon__title">
                                            <h3> My Committee </h3>
                                        </div>
                                    </div>
                                </div>
                               
                                {{-- loop here  --}}

                                {{-- loop here  --}}
                                
                                <div class="col-lg-4">
                                    <div class="navigation-icon__item">
                                        <div class="navigation-icon__hover">
                                            <a href="#">
                                                <h3> Membership Details </h3>
                                            </a>
                                        </div>
                                        <div class="navigation-icon__icon">
                                           <div class="navigation-icon__icon--object menu-icon menu-icon--membership">

                                           </div>
                                        </div>
                                        <div class="navigation-icon__title">
                                            <h3> Membership Details </h3>
                                        </div>
                                    </div>
                                </div>
                               
                                {{-- loop here  --}}


                                {{-- loop here  --}}
                                <div class="col-lg-4">
                                    <div class="navigation-icon__item">
                                        <div class="navigation-icon__hover">
                                            <a href="{{url('support')}}">
                                            <a href="{{ route('customer.dashboard.support') }}">
                                                <h3>Support</h3>
                                            </a>
                                        </div>
                                        <div class="navigation-icon__icon">
                                           <div class="navigation-icon__icon--object menu-icon menu-icon--support">

                                           </div>
                                        </div>
                                        <div class="navigation-icon__title">
                                            <h3> Support </h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- loop here  --}}


                            </div>
                        </div>
                    </div>
                </div>



                 {{-- events end --}}
                <div class="col-lg-12">
                        
                        <div class="events-upcoming" id="upcoming-envents-owner">

                            <div class="side-by-side">
                                <div class="primary-heading text-center">
                                    <h3> Upcoming Event </h3>
                                </div>

                                <a href="{{ route('customer.dashboard.events') }}" class="btn btn--primary">View All Events</a>
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


                </div>
                {{-- events end --}}


            </div>
        </section>


        @include('front.pages.custom-page.sections.modal-membership')
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>