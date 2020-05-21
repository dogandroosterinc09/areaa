{{-- page-chapter page-chapter-aloha page-chapter-aloha--aboutus --}}
<section class="page-chapter page-chapter--aboutus">
    @include('front.layouts.sections.chapter.header_chapter')

    {{-- @include('front.pages.custom-page.sections.chapter-slider-aloha') --}}

    
    {{-- need to dynamic this sub  --}}
    <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <!-- <h3>Learn More</h3>
                            <h1>About Us</h1> -->
                            {!! $chapter_page_aboutus->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <!-- <img src="{{ url('public/images/chapter-aboutus.jpg') }}"> -->
            <img src="{{ asset($chapter_page_aboutus->banner_image) }}">
        </div>

    </section>


    <main class="main-content">


       {{-- story section  --}}
       <section class="default-content chapter-ourstory-section">
        <div class="container-max">
            <div class="row">

                @php( $section_1 = json_decode($chapter_page_aboutus->section_1) )
                <div class="col-md-6">
                   
                    <div class="dynamic-content chapter-story">
                        <h2>{{ $section_1->title }}</h2>
                        <div class="dynamic-content__push chapter-story__push">
                            {!! $section_1->content !!}
                            <!-- <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <a href="#">tempor incididunt ut labore</a> et dolore magna aliqua. Ut enim ad minim veniam.</h4>
                                boris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p> -->

                            @if($section_1->button_text)
                            <div class="btn-group">
                                <a href="{{$section_1->button_link }}" class="btn btn btn--secondary">{{ $section_1->button_text }}</a>
                           </div>
                           @endif
                        </div>
                    </div>

                </div>


                <div class="col-md-6">
                    @if($section_1->featured_image)
                    <div class="chapter-story__image">
                        <!-- <img src="{{ url('public/images/chapter-about-image.jpg') }}" alt="chapter title" class="img-fluid img-dropshadow"> -->
                        <img src="{{ asset($section_1->featured_image) }}" alt="{{ $section_1->alt_text }}" class="img-fluid img-dropshadow">
                    </div>
                    @endif
                </div>

        
            </div>
        </div> {{-- end of default-content--row --}}
    </section> {{-- end of default-content --}}




    {{-- story section  --}}
    <section class="fullwidth fullwidth__right-push chapter-national">
        <div class="container-max">
            <div class="row">

                @php( $section_2 = json_decode($chapter_page_aboutus->section_2) )
                <div class="col-md-6 fullwidth__left">
                    @if($section_2->featured_image)
                    <div class="fullwidth__image image-background">
                        <!-- <img src="{{ url('public/images/our-story-image.jpg') }}" alt="chapter title" class="img-fluid"> -->
                        <img src="{{ asset($section_2->featured_image) }}" alt="{{$section_2->alt_text}}" class="img-fluid">
                    </div>
                    @endif
                </div>


                <div class="col-md-6 fullwidth__right">
                    
                    <div class="fullwidth__content">
                        <h2>{{ $section_2->title }}</h2>
                        <!-- <p>Founded in 2003, the Asian Real Estate Association of America (AREAA) is a nonprofit professional trade organization dedicated to promoting sustainable homeownership opportunities in Asian American communities by creating a powerful national voice for housing and real estate professionals that serve this dynamic market.</p> -->
                        <p>{{ $section_2->content }}</p>

                        @if($section_2->button_text)
                        <div class="btn-group">
                            <a href="{{ $section_2->button_link }}" class="btn btn btn--secondary">{{ $section_2->button_text }}</a>
                       </div>
                       @endif
                    </div>

                </div>

        
            </div>
        </div> {{-- end of default-content--row --}}
    </section> {{-- end of default-content --}}

         

    </main>
    @include('front.layouts.sections.chapter.footer_chapter')
</section>