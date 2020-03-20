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
                                    <img src="{{ asset('public/images/newyorkeast-Baldwin.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Baldwin Lee </h5>
                                    <h6>President</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/newyorkeast-John.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>John Pan</h5>
                                    <h6>Vice President</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/newyorkeast-Steve.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Steve Shteyn</h5>
                                    <h6>Treasurer</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/newyorkeast-Ayres.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Ayres D'Cunha</h5>
                                    <h6>Secretary</h6>
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
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Richard Lee </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Paul Song </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/newyorkeast-Kenny.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Kenny Lam </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/newyorkeast-Chris.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Chris Sung </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/newyorkeast-Helen.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Helen Kim  </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                           {{-- board-thumbnail --}}
                           <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Katie Kao </h5>
                                    <h6>Emeritus</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/newyorkeast-Andrew.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Andrew Wu</h5>
                                    <h6>Emeritus</h6>
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
                                    <img src="{{ asset('public/images/newyorkeast-David.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>David Legaz </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Michael Ting</h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Carmen Mercado </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Cristina Hoffman </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Yoshi Takita  </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                           {{-- board-thumbnail --}}
                           <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Wendy Huang</h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        
                           {{-- board-thumbnail --}}
                           <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('board-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Aldo Iemma</h5>
                                    <h6></h6>
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