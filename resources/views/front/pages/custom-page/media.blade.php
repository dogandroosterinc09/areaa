<section class="page page--media">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>Areaa</h3>
                            <h1>Media</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/media-banner.jpg') }}">
        </div>
    </section>


    <main class="main-content">


        <section class="media-section">
            <div class="container-max">
                <div class="col-lg-12">

                    {{-- media-tab --}}
                    <div class="media-tab">

                        <ul class="nav nav-tabs media-tab__tab" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="webinar-view-tab" data-toggle="tab" href="#webinar-view"
                                    role="tab" aria-controls="webinar-view" aria-selected="true">Webinars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="podcast-view-tab" data-toggle="tab" href="#podcast-view" role="tab"
                                    aria-controls="podcast-view" aria-selected="false">Podcast</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="research-view-tab" data-toggle="tab" href="#research-view" role="tab"
                                    aria-controls="list-view" aria-selected="false">Research & Reports</a>
                            </li>
                        </ul>

                        <div class="tab-content media-tab__content" id="myTabContent">

                            <div class="tab-pane media-tab__item fade show active" id="webinar-view" role="tabpanel"
                                aria-labelledby="webinar-view">
                                {{-- <img src="{{ url('public/images/map.jpg') }}"> --}}
                               
                                <div class="webinars container">
                                    <div class="webinars__list row moreWebinar">
                                        
                                        @php( $webinars = \App\Models\Webinars::all() )

                                        @forelse($webinars as $webinar)
                                        <div class="col-lg-4 col-md-4 moreWebinar__item moreWebinar">

                                            {{-- media-thumbnail --}}
                                            <div class="media-thumbnail">
                                                <div class="media-thumbnail__featured">
                                                    <iframe width="560" height="315" src="{{$webinar->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="media-thumbnail__title">
                                                    <h3>{{ $webinar->title }}</h3>
                                                </div>
                                                <div class="media-thumbnail__button">
                                                    <h4>Download Webinar Assets: </h4>
                                                    <a href="#" class="btn btn--primary">Presentation Slides </a>
                                                </div>
                                            </div>
                                             {{-- media-thumbnail --}}

                                        </div>
                                        @empty
                                        <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Webinars.</h3>
                                        @endforelse

                                    <!-- <div class="col-lg-4 col-md-4 moreWebinar__item moreWebinar">

                                            {{-- media-thumbnail --}}
                                            <div class="media-thumbnail">
                                                <div class="media-thumbnail__featured">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cLLfmOeX16Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="media-thumbnail__title">
                                                    <h3>2019 State of Asia Year-End Webinar
                                                    </h3>
                                                </div>
                                                <div class="media-thumbnail__button">
                                                    <h4>Download Webinar Assets: </h4>
                                                    <a href="#" class="btn btn--primary">Presentation Slides </a>
                                                </div>
                                            </div>
                                             {{-- media-thumbnail --}}

                                        </div>


                                        <div class="col-lg-4 col-md-4 moreWebinar__item moreWebinar">

                                            {{-- media-thumbnail --}}
                                            <div class="media-thumbnail">
                                                <div class="media-thumbnail__featured">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cLLfmOeX16Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="media-thumbnail__title">
                                                    <h3>2019 State of Asia America Report </h3>
                                                </div>
                                                <div class="media-thumbnail__button">
                                                    <h4>Download Webinar Assets: </h4>
                                                    <a href="#" class="btn btn--primary">Download Report</a>
                                                    <a href="#" class="btn btn--primary">Download Presentation Slides </a>
                                                </div>
                                            </div>
                                             {{-- media-thumbnail --}}

                                        </div>


                                        <div class="col-lg-4 col-md-4 moreWebinar__item moreWebinar">
                                            {{-- media-thumbnail --}}
                                            <div class="media-thumbnail">
                                                <div class="media-thumbnail__featured">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cLLfmOeX16Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="media-thumbnail__title">
                                                    <h3>2019 State of Asia America Report </h3>
                                                </div>
                                                <div class="media-thumbnail__button">
                                                    <h4>Download Webinar Assets: </h4>
                                                    <a href="#" class="btn btn--primary">Download Report</a>
                                                    <a href="#" class="btn btn--primary">Download Presentation Slides </a>
                                                </div>
                                            </div>
                                             {{-- media-thumbnail --}}
                                        </div>

                                        
                                        <div class="col-lg-4 col-md-4 moreWebinar__item moreWebinar">
                                            {{-- media-thumbnail --}}
                                            <div class="media-thumbnail">
                                                <div class="media-thumbnail__featured">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cLLfmOeX16Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="media-thumbnail__title">
                                                    <h3>2019 State of Asia America Report </h3>
                                                </div>
                                                <div class="media-thumbnail__button">
                                                    <h4>Download Webinar Assets: </h4>
                                                    <a href="#" class="btn btn--primary">Download Report</a>
                                                    <a href="#" class="btn btn--primary">Download Presentation Slides </a>
                                                </div>
                                            </div>
                                             {{-- media-thumbnail --}}
                                        </div>

                                        <div class="col-lg-4 col-md-4 moreWebinar__item moreWebinar">
                                            {{-- media-thumbnail --}}
                                            <div class="media-thumbnail">
                                                <div class="media-thumbnail__featured">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cLLfmOeX16Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="media-thumbnail__title">
                                                    <h3>2019 State of Asia America Report </h3>
                                                </div>
                                                <div class="media-thumbnail__button">
                                                    <h4>Download Webinar Assets: </h4>
                                                    <a href="#" class="btn btn--primary">Download Report</a>
                                                    <a href="#" class="btn btn--primary">Download Presentation Slides </a>
                                                </div>
                                            </div>
                                             {{-- media-thumbnail --}}
                                        </div>



                                        <div class="col-lg-4 col-md-4 moreWebinar__item moreWebinar">
                                            {{-- media-thumbnail --}}
                                            <div class="media-thumbnail">
                                                <div class="media-thumbnail__featured">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cLLfmOeX16Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="media-thumbnail__title">
                                                    <h3>2019 State of Asia America Report </h3>
                                                </div>
                                                <div class="media-thumbnail__button">
                                                    <h4>Download Webinar Assets: </h4>
                                                    <a href="#" class="btn btn--primary">Download Report</a>
                                                    <a href="#" class="btn btn--primary">Download Presentation Slides </a>
                                                </div>
                                            </div>
                                             {{-- media-thumbnail --}}
                                        </div>

                                        
                                        <div class="col-lg-4 col-md-4 moreWebinar__item moreWebinar">
                                            {{-- media-thumbnail --}}
                                            <div class="media-thumbnail">
                                                <div class="media-thumbnail__featured">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cLLfmOeX16Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="media-thumbnail__title">
                                                    <h3>2019 State of Asia America Report </h3>
                                                </div>
                                                <div class="media-thumbnail__button">
                                                    <h4>Download Webinar Assets: </h4>
                                                    <a href="#" class="btn btn--primary">Download Report</a>
                                                    <a href="#" class="btn btn--primary">Download Presentation Slides </a>
                                                </div>
                                            </div>
                                             {{-- media-thumbnail --}}
                                        </div>

                                        
                                        <div class="col-lg-4 col-md-4 moreWebinar__item moreWebinar">
                                            {{-- media-thumbnail --}}
                                            <div class="media-thumbnail">
                                                <div class="media-thumbnail__featured">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cLLfmOeX16Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="media-thumbnail__title">
                                                    <h3>2019 State of Asia America Report </h3>
                                                </div>
                                                <div class="media-thumbnail__button">
                                                    <h4>Download Webinar Assets: </h4>
                                                    <a href="#" class="btn btn--primary">Download Report</a>
                                                    <a href="#" class="btn btn--primary">Download Presentation Slides </a>
                                                </div>
                                            </div>
                                             {{-- media-thumbnail --}}
                                        </div>
                                    -->
                                     
                                    </div>

                                    <div class="webinars__bottom row">
                                        <div class="col-lg-12 col-md-12 text-center">
                                            <a href="#" id="loadMore" class="btn btn--primary"> load more</a>
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <div class="tab-pane media-tab__item fade" id="podcast-view" role="tabpanel" aria-labelledby="podcast-view">
                               
                                <div class="container">
                                    <div class="row">
                                        
                                        <div class="col-lg-4 col-md-4">
                                               {{-- media-thumbnail --}}
                                            <div class="media-thumbnail">
                                                <div class="media-thumbnail__featured">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cLLfmOeX16Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="media-thumbnail__title">
                                                    <h3>2019 Commercial Webinar: Opportunity Zones


                                                    </h3>
                                                </div>
                                                <div class="media-thumbnail__button">
                                                    <h4>Download Webinar Assets: </h4>
                                                    <a href="#" class="btn btn--primary">2018 CRE Review</a>
                                                    <a href="#" class="btn btn--primary">Download Presentation Slides </a>
                                                </div>
                                            </div>
                                            {{-- media-thumbnail --}}
                                        </div>
                                    </div>
                                </div>

                               

                            </div>
                            
                            <div class="tab-pane media-tab__item fade" id="research-view" role="tabpanel" aria-labelledby="research-view">

                                <div class="container">
                                    <div class="row">
                                        
                                        <div class="col-lg-4 col-md-4">
                                               {{-- media-thumbnail --}}
                                        <div class="media-thumbnail">
                                            <div class="media-thumbnail__featured">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/cLLfmOeX16Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="media-thumbnail__title">
                                                <h3>2019 Commercial Webinar: Opportunity Zones


                                                </h3>
                                            </div>
                                            <div class="media-thumbnail__button">
                                                <h4>Download Webinar Assets: </h4>
                                                <a href="#" class="btn btn--primary">2018 CRE Review</a>
                                                <a href="#" class="btn btn--primary">Download Presentation Slides </a>
                                            </div>
                                        </div>
                                        {{-- media-thumbnail --}}
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                     {{-- media-tab --}}

                </div>
            </div>
        </section>

        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>