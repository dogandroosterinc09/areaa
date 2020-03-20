<section class="page-chapter page-chapter-newyorkeast page-chapter-newyorkeast--leadership">
    @include('front.layouts.sections.chapter-newyorkeast.header_chapter_newyorkeast')

    {{-- @include('front.pages.custom-page.sections.chapter-slider-newyorkeast') --}}
     {{-- @include('front.pages.custom-page.sections.banner') --}}
     <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>Meet Our </h3>
                            <h1>Leadership <br>
                                Board</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/executive-banner.jpg') }}">
        </div>
    </section>

    <main class="main-content">
        
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
    @include('front.layouts.sections.chapter-newyorkeast.footer_chapter_newyorkeast')
</section>