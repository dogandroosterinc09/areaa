<section class="page-chapter page-chapter--leadership">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}

    @include('front.pages.custom-page.sections.chapter-slider')

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
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('chapter-our-story') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('chapter-events') }}">Events</a>
                                </li>
                                <li class="nav-item active">
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

        <section class="executive-board">
            <div class="container-max">
                <div class="col-lg-12">
                    <h2>Executive board</h2>

                    {{-- board-thumbnail row --}}
                    <div class="board-thumbnail row">
                         {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-James-Huang.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>James Huang </h5>
                                    <h6>2020 President</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-AmyKong.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Amy Kong </h5>
                                    <h6>2021 President-Elect</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-TomTruong.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Tom Truong </h5>
                                    <h6>Immediate Past President</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-AtsukoYube.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Atsuko Yube </h5>
                                    <h6>2020 Treasure</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-DickLee.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Dick Lee  </h5>
                                    <h6>2020 Secretary/2021 Treasurer-Elect</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                           {{-- board-thumbnail --}}
                           <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-Allen-Okamoto.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Allen M. Okamoto </h5>
                                    <h6>National Founding Chairman, Education Foundation, Emeritus</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-Jim-Park.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Jim Park</h5>
                                    <h6>AREAA National Chairman Emeritus</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}
                    </div>
                     {{-- board-thumbnail row --}}

                </div>
            </div>
        </section>

        <section class="board-board">
            <div class="container-max">
                <div class="col-lg-12">
                    <h2>Board of directors</h2>

                    {{-- board-thumbnail row --}}
                    <div class="board-thumbnail row">
                         {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-James-Huang.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>James Huang </h5>
                                    <h6>2020 President</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-AmyKong.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Amy Kong </h5>
                                    <h6>2021 President-Elect</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-TomTruong.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Tom Truong </h5>
                                    <h6>Immediate Past President</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-AtsukoYube.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Atsuko Yube </h5>
                                    <h6>2020 Treasure</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-DickLee.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Dick Lee  </h5>
                                    <h6>2020 Secretary/2021 Treasurer-Elect</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                           {{-- board-thumbnail --}}
                           <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-Allen-Okamoto.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Allen M. Okamoto </h5>
                                    <h6>National Founding Chairman, Education Foundation, Emeritus</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-Jim-Park.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Jim Park</h5>
                                    <h6>AREAA National Chairman Emeritus</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}
                                 {{-- board-thumbnail --}}
                                 <div class="board-thumbnail__item col-lg-3 col-md-6">
                                    <a href="{{url('board-detail')}}">
                                        <div class="board-thumbnail__image image-background">
                                            <img src="{{ asset('public/images/exec-Jim-Park.jpg') }}" alt="Member Image">
                                        </div>
                                        <div class="board-thumbnail__details">
                                            <h5>Jim Park</h5>
                                            <h6>AREAA National Chairman Emeritus</h6>
                                        </div>
                                    </a>
                                </div>
                                {{-- board-thumbnail --}}
                    </div>
                     {{-- board-thumbnail row --}}

                </div>
            </div>
        </section>


        <section class="board-board">
            <div class="container-max">
                <div class="col-lg-12">
                    <h2>Advisory Board</h2>

                    {{-- board-thumbnail row --}}
                    <div class="board-thumbnail row">
                         {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-James-Huang.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>James Huang </h5>
                                    <h6>2020 President</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-AmyKong.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Amy Kong </h5>
                                    <h6>2021 President-Elect</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-TomTruong.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Tom Truong </h5>
                                    <h6>Immediate Past President</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-AtsukoYube.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Atsuko Yube </h5>
                                    <h6>2020 Treasure</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-DickLee.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Dick Lee  </h5>
                                    <h6>2020 Secretary/2021 Treasurer-Elect</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                           {{-- board-thumbnail --}}
                           <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-Allen-Okamoto.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Allen M. Okamoto </h5>
                                    <h6>National Founding Chairman, Education Foundation, Emeritus</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                     
                    </div>
                     {{-- board-thumbnail row --}}

                </div>
            </div>
        </section>

         

    </main>
    @include('front.layouts.sections.footer')
</section>