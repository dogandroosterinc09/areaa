<section class="page-chapter page-chapter-aloha page-chapter-aloha--leadership">
    @include('front.layouts.sections.chapter-aloha.header_chapter_aloha')

    {{-- @include('front.pages.custom-page.sections.chapter-slider-aloha') --}}
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
                        @foreach(\App\Models\ChapterBoardMember::all() as $executive)
                        {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ optional($executive->attachment)->url }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>{{ $executive->name }}</h5>
                                    <h6>{{ $executive->position }}</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}
                        @endforeach
                        

                        {{-- board-thumbnail --}}
                        <!-- <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/aloha-Ronda.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Ronda Ching-Day </h5>
                                    <h6>President</h6>
                                </div>
                            </a>
                        </div> -->
                        {{-- board-thumbnail --}}


                        {{-- board-thumbnail --}}
                        <!-- <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Thomas Tay </h5>
                                    <h6>Vice President</h6>
                                </div>
                            </a>
                        </div> -->
                        {{-- board-thumbnail --}}


                        {{-- board-thumbnail --}}
                        <!-- <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/aloha-Abe.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Abe Lee </h5>
                                    <h6>Secretary</h6>
                                </div>
                            </a>
                        </div> -->
                        {{-- board-thumbnail --}}

                        
                        {{-- board-thumbnail --}}
                        <!-- <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Sharon Rasos </h5>
                                    <h6>Treasurer</h6>
                                </div>
                            </a>
                        </div> -->
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
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/aloha-Claire.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Claire Doi </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/aloha-Christine.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Christine Kim </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/aloha-Gina.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Gina Duncan </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('baloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/aloha-Lisa.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Lisa Van Den Heuval</h5>
                                    <h6>Publicity Chairperson</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/aloha-Judy.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Judy Sykes  </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                           {{-- board-thumbnail --}}
                           <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('baloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/aloha-Bruce.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Bruce McDonald </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/aloha-Mami.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Mami Takeda
                                    </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}
                                 {{-- board-thumbnail --}}
                                 <div class="board-thumbnail__item col-lg-3 col-md-6">
                                    <a href="{{url('aloha-leadership-detail')}}">
                                        <div class="board-thumbnail__image image-background">
                                            <img src="{{ asset('public/images/aloha-Christina.jpg') }}" alt="Member Image">
                                        </div>
                                        <div class="board-thumbnail__details">
                                            <h5>Christina Berry</h5>
                                            <h6></h6>
                                        </div>
                                    </a>
                                </div>
                                {{-- board-thumbnail --}}

                                {{-- board-thumbnail --}}
                                <div class="board-thumbnail__item col-lg-3 col-md-6">
                                    <a href="{{url('aloha-leadership-detail')}}">
                                        <div class="board-thumbnail__image image-background">
                                            <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                        </div>
                                        <div class="board-thumbnail__details">
                                            <h5>Rachel-Joy Nisperos</h5>
                                            <h6></h6>
                                        </div>
                                    </a>
                                </div>
                                {{-- board-thumbnail --}}


                                
                                {{-- board-thumbnail --}}
                                <div class="board-thumbnail__item col-lg-3 col-md-6">
                                    <a href="{{url('aloha-leadership-detail')}}">
                                        <div class="board-thumbnail__image image-background">
                                            <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                        </div>
                                        <div class="board-thumbnail__details">
                                            <h5>Rommel Guzman</h5>
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


        <section class="board-board">
            <div class="container-max">
                <div class="col-lg-12">
                    <h2>Advisory Board</h2>

                    {{-- board-thumbnail row --}}
                    <div class="board-thumbnail row">
                         {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Earl Lee </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Patti Nakagawa</h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}


                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>Kalama Kim </h5>
                                    <h6></h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}

                        
                          {{-- board-thumbnail --}}
                          <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{url('aloha-leadership-detail')}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>James Wright </h5>
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
    @include('front.layouts.sections.chapter-aloha.footer_chapter_aloha')
</section>