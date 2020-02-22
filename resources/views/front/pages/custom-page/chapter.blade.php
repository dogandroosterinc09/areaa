<section class="page page--chapter">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>Find your</h3>
                            <h1>Chapter</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/chapter-banner.jpg') }}">
        </div>
    </section>


    <main class="main-content">


        <section class="chapter-section">
            <div class="container-max">
                <div class="col-lg-12">

                    {{-- chapter-tab --}}
                    <div class="chapter-tab">

                        <ul class="nav nav-tabs chapter-tab__tab" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="map-view-tab" data-toggle="tab" href="#map-view"
                                    role="tab" aria-controls="map-view" aria-selected="true">Map View</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-view-tab" data-toggle="tab" href="#list-view" role="tab"
                                    aria-controls="list-view" aria-selected="false">List View</a>
                            </li>
                        </ul>
                        <div class="tab-content chapter-tab__content" id="myTabContent">
                            <div class="tab-pane chapter-tab__item fade show active" id="map-view" role="tabpanel"
                                aria-labelledby="map-view">
                                {{-- <img src="{{ url('public/images/map.jpg') }}"> --}}
                                <div class="map-grayscale">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11603365.99775855!2d-118.20713936747744!3d32.39640988632438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc7361593c7e91%3A0x583eee0359e56260!2sAsian%20Real%20Estate%20Association%20of%20America%20(AREAA)!5e0!3m2!1sen!2sph!4v1580871072564!5m2!1sen!2sph"
                                        width="100%" height="300" frameborder="0" style="border:0;"
                                        allowfullscreen=""></iframe>
                                </div>
                            </div>

                            <div class="tab-pane chapter-tab__item fade" id="list-view" role="tabpanel" aria-labelledby="list-view">

                                <div class="container">
                                    <div class="row">

                                        @include('front.pages.custom-page.sections.section-listview')
                                        @include('front.pages.custom-page.sections.section-listview')
                                        @include('front.pages.custom-page.sections.section-listview')
                                        @include('front.pages.custom-page.sections.section-listview')

                                        <div class="col-lg-12 text-center">
                                            <a href="#" class="btn btn--primary"> Load more </a>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                     {{-- chapter-tab --}}


                </div>
            </div>
        </section>

        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>