<section class="page-chapter page-chapter-atlantametro page-chapter-atlantametro--aboutus">
    @include('front.layouts.sections.chapter-atlantametro.header_chapter_atlantametro')

    @include('front.pages.custom-page.sections.chapter-slider-atlantametro')

    <main class="main-content">

    

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
    @include('front.layouts.sections.chapter-atlantametro.footer_chapter_atlantametro')
</section>