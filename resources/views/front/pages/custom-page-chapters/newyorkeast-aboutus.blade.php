<section class="page-chapter page-chapter-newyorkeast page-chapter-newyorkeast--aboutus">
    @include('front.layouts.sections.chapter-newyorkeast.header_chapter_newyorkeast')

    @include('front.pages.custom-page.sections.chapter-slider-newyorkeast')

    <main class="main-content">
        
        
        {{-- @include('front.pages.custom-page.sections.chapter-menu') --}}
        <section class="dashboard-nav">

            <div class="dashboard-navigation">
                <div class="dashboard-navigation__wrapper">
                    <div class="dashboard-navigation__item">
                    
                        <nav class="navbar-bar">
                            <ul class="navbar-bar__wrapper">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ url('chapter-homepage') }}">Home </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('chapter-our-story') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('chapter-events') }}">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('chapter-leadership') }}">Leadership</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('chapter-contact-us') }}">Contact us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('chapter-login') }}">Log in</a>
                                </li>
                            </ul>
                        </nav>
        
        
                    </div>
                </div>
            </div>
        </section>





       {{-- story section  --}}
       <section class="default-content chapter-ourstory-section">
        <div class="container-max">
            <div class="row">


                <div class="col-md-6">
                   
                    <div class="dynamic-content chapter-story">
                        <h2>Our Story</h2>
                        <div class="dynamic-content__push chapter-story__push">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <a href="#">tempor incididunt ut labore</a> et dolore magna aliqua. Ut enim ad minim veniam.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>

                            <div class="btn-group">
                                <a href="#" class="btn btn btn--secondary">Join AREAA!</a>
                           </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-6">
                    <div class="chapter-story__image">
                        <img src="{{ url('public/images/chapter-about-image.jpg') }}" alt="chapter title" class="img-fluid img-dropshadow">
                    </div>
                </div>

        
            </div>
        </div> {{-- end of default-content--row --}}
    </section> {{-- end of default-content --}}




    {{-- story section  --}}
    <section class="fullwidth fullwidth__right-push chapter-national">
        <div class="container-max">
            <div class="row">


                <div class="col-md-6 fullwidth__left">
                    <div class="fullwidth__image image-background">
                        <img src="{{ url('public/images/our-story-image.jpg') }}" alt="chapter title" class="img-fluid">
                    </div>
                </div>


                <div class="col-md-6 fullwidth__right">
                    
                    <div class="fullwidth__content">
                        <h2>AREAA National</h2>
                        <p>Founded in 2003, the Asian Real Estate Association of America (AREAA) is a nonprofit professional trade organization dedicated to promoting sustainable homeownership opportunities in Asian American communities by creating a powerful national voice for housing and real estate professionals that serve this dynamic market.</p>

                        <div class="btn-group">
                            <a href="#" class="btn btn btn--secondary">Learn More</a>
                       </div>
                    </div>

                </div>

        
            </div>
        </div> {{-- end of default-content--row --}}
    </section> {{-- end of default-content --}}


    </main>
    @include('front.layouts.sections.chapter-newyorkeast.footer_chapter_newyorkeast')
</section>