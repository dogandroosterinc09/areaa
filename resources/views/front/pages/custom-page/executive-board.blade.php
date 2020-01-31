<section class="page page--board">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>Meet Our </h3>
                            <h1>Executive <br>
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

                    <div class="board-thumbnail">

                         {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item">
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
                          <div class="board-thumbnail__item">
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
                          <div class="board-thumbnail__item">
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
                          <div class="board-thumbnail__item">
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
                          <div class="board-thumbnail__item">
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
                           <div class="board-thumbnail__item">
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
                        <div class="board-thumbnail__item">
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
                        <div class="board-thumbnail__item">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-Allen-Chiang.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Allen Chiang</h5>
                                    <h6>AREAA Global Chairman</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                        {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-JohnYenWong.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>John Yen Wong </h5>
                                    <h6> AREAA National Founding Chairman & Emeritus </h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                        {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/exec-Hope-Atuel.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Hope Atuel
                                    </h5>
                                    <h6>AREAA National Executive Director</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}



                    </div>

                </div>
            </div>
        </section>
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>