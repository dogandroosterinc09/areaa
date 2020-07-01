<section class="page page--resources-american-report">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner" data-aos="fade-up">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            {!! $page->content !!}
                            <!-- <h3>Report</h3>
                            <h1>Asia America </h1> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url($page->attachment) }}">
            <!-- <img src="{{ url('public/images/about-banner.jpg') }}"> -->
        </div>
    </section>


    <main class="main-content">


          {{-- Asia America Report  --}}
          <section class="default-content american-report" data-aos="fade-up">
            <div class="container-max">
                <div class="row">


                    <div class="col-md-8">

                            <h2>{{ section('Body.data.first.title') }}</h2>
                            <p>{!! section('Body.data.first.content') !!}</p>

                            <?php /* <h2>2018-19 State of Asia America Report</h2>
                            <p>Our annual compilation of data relating to AAPI housing, demographics, education, income, policy, and more is now available.</p>

                            {{-- comment insert class on UL  --}}
                            {{-- use class bullet-style only if you want one col  --}}
                            {{-- use class bullet-style__col-2 to enable 2cols --}}
                            {{-- use class bullet-style__col-3 to enable 3cols --}}
                            {{-- bullet-style--uppercase the strong tag will capitalize --}}
                            <ul class="bullet-style bullet-style__one bullet-style--uppercase">
                                <li>2017 State of Asia America Report 
                                    <a href="https://www.dropbox.com/s/9gtjzt98yfmj0h3/StateofAsia2018_vFINAL_3.pdf?dl=0" target="blank"> Click here to download</a> </li>
                                <li>2016 State of Asia America Report  
                                    <a href="https://www.dropbox.com/s/dvcfj37fk6fstho/STATEOFASIA.pdf?dl=0" target="blank"> Click here to download</a> </li>
                                 </li>
                                <li>2015 State of Asia America Report
                                    <a href="https://www.dropbox.com/s/nca8s4ky353qekt/SAA15.pdf?dl=0" target="blank"> Click here to download</a> </li>
                                </li>
                            </ul>

                            <div class="btn-group">
                                <a href="#" class="btn btn btn--secondary">Download</a>
                            </div> */ ?>

                    </div>

                    <div class="col-md-4">
                        <img src="{{ section('Body.data.first.image') }}" alt="{{ section('Body.data.first.alt_text') }}">
                    </div>

            
                </div>
            </div> {{-- end of default-content--row --}}
        </section> {{-- end of default-content --}}


           
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>