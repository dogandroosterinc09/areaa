<section class="page page--ourpartners">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            {{-- <h3>Learn More</h3> --}}
                            <h1>Our Partners</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/about-banner.jpg') }}">
        </div>
    </section>


    <main class="main-content">



        {{-- our partners section  --}}
        <section class="goals">
            <div class="container-max">
                <div class="row">


                    <div class="col-lg-12 text-center font-weight-bold">
                        <h4 class="">Multicultural Partners: </h4>
                    </div>

                    <div class="col-md-12">
                           
                            {{-- comment insert class on UL  --}}
                            {{-- use class bullet-style only if you want one col  --}}
                            {{-- use class bullet-style__col-2 to enable 2cols --}}
                            {{-- use class bullet-style__col-3 to enable 3cols --}}
                            {{-- bullet-style--uppercase the strong tag will capitalize --}}
                            <ul class="bullet-style bullet-style__col-2 bullet-style--uppercase">
                                <li>
                                   <strong><a href="#">Asian American Real Estate Association (AAREA)</a></strong>
                                </li>
                                <li>
                                    <strong><a href="#">Chinese American Real Estate Association in New York City (CAREA)</a></strong>
                                 </li>
                                 <li>
                                    <strong><a href="#">Chinese American Real Estate Association in San Jose, CA (CAREA)</a></strong> 
                                 </li>
                                 <li>
                                    <strong><a href="#">Chinese Real Estate Association of America (CREAA)</a></strong>
                                 </li>
                                 <li>
                                    <strong><a href="#">Filipino American Real Estate Profession Association (FAREPA)</a></strong>
                                 </li>
                                 <li>
                                    <strong><a href="#">Hawaii Association of Realtors (HAR)</a></strong>
                                 </li>
                                 <li>
                                    <strong><a href="#">Korean Real Estate Brokers Association of Southern California (KREBASC)</a></strong>
                                 </li>
                                 <li>
                                    <strong><a href="#">South Asian Real Estate Association of America (SAREAA)</a></strong>
                                 </li>
                            </ul>

                    </div>

                 
              
                </div>
            </div> {{-- end of default-content--row --}}
        </section> {{-- end of default-content --}}


         {{-- our partners section  --}}
         <section class="goals">
            <div class="container-max">
                <div class="row">


                    <div class="col-lg-12 text-center font-weight-bold">
                        <h4 class="">International Partners </h4>
                    </div>

                    <div class="col-md-12">
                           
                            {{-- comment insert class on UL  --}}
                            {{-- use class bullet-style only if you want one col  --}}
                            {{-- use class bullet-style__col-2 to enable 2cols --}}
                            {{-- use class bullet-style__col-3 to enable 3cols --}}
                            {{-- bullet-style--uppercase the strong tag will capitalize --}}
                            <ul class="bullet-style bullet-style__col-2 bullet-style--uppercase">
                                <li>
                                   <strong><a href="#">All Japan Real Estate Association (Zen’Nichi) in Osaka</a></strong>
                                </li>
                                <li>
                                    <strong><a href="#">Chamber of Real Estate and Builders’ Associations, Inc. (CREBA)</a></strong>
                                 </li>
                                 <li>
                                    <strong><a href="#">International Convention and European Forum (FNAIM)</a></strong> 
                                 </li>
                                 <li>
                                    <strong><a href="#">International Real Estate Association (FIABCI)</a></strong>
                                 </li>
                                 <li>
                                    <strong><a href="#">Vietnam National Real Estate Association</a></strong>
                                 </li>
                                
                            </ul>

                    </div>

                 
              
                </div>
            </div> {{-- end of default-content--row --}}
        </section> {{-- end of default-content --}}


           {{-- our partners section  --}}
           <section class="goals">
            <div class="container-max">
                <div class="row">


                    <div class="col-lg-12 text-center font-weight-bold">
                        <h4 class="">Realtor Association Partners </h4>
                    </div>

                    <div class="col-md-12">
                           
                            {{-- comment insert class on UL  --}}
                            {{-- use class bullet-style only if you want one col  --}}
                            {{-- use class bullet-style__col-2 to enable 2cols --}}
                            {{-- use class bullet-style__col-3 to enable 3cols --}}
                            {{-- bullet-style--uppercase the strong tag will capitalize --}}
                            <ul class="bullet-style bullet-style__col-2 bullet-style--uppercase">
                                <li>
                                   <strong><a href="#">Citrus Valley Association of REALTORS</a></strong>
                                </li>
                                <li>
                                    <strong><a href="#">Glendale Association of REALTORS</a></strong>
                                 </li>
                                 <li>
                                    <strong><a href="#">Rancho Southeast Association of REALTORS</a></strong> 
                                 </li>
                                 <li>
                                    <strong><a href="#">Santa Clara County of Association of REALTORS</a></strong>
                                 </li>
                                 <li>
                                    <strong><a href="#">Southland Regional Association of REALTORS</a></strong>
                                 </li>
                                
                            </ul>

                    </div>

                 
              
                </div>
            </div> {{-- end of default-content--row --}}
        </section> {{-- end of default-content --}}





        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>