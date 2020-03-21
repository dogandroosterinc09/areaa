<section class="page-chapter page-chapter-atlantametro page-chapter-atlantametro--events">
    @include('front.layouts.sections.chapter-atlantametro.header_chapter_atlantametro')

    {{-- @include('front.pages.custom-page.sections.chapter-slider-atlantametro') --}}
     {{-- need to dynamic this sub  --}}
     <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>National</h3>
                            <h1>Events</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/events-banner.jpg') }}">
        </div>
    </section>

    <main class="main-content">

       
        <section class="events-section">
            <div class="container-max">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Upcoming Events</h2>
                    </div>

                    <div class="col-lg-12">
                        <a href="#" class="btn btn--back">   <i href="#" class="btn btn--third"> </i> view previous events </a>
                    </div>
    
                    <div class="col-lg-12">
                        
                        <div class="chapter-event-display">
                                {{-- events-thumbnail --}}
                                <div class="chapter-events-thumbnail__item">
                                    <div class="chapter-events-thumbnail__date-range">
                                        <div class="chapter-events-thumbnail__month">
                                            Apr
                                        </div>
                                        <div class="chapter-events-thumbnail__day chapter-events-thumbnail__day--first"> 27</div>
                                        to
                                        <div class="chapter-events-thumbnail__day chapter-events-thumbnail__day--end"> 29</div>
                                    </div>
                                    <div class="chapter-events-thumbnail__image">
                                        <img src="{{ asset('public/images/chapter-book.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="chapter-events-thumbnail__details">
                                        <h5>2020 Installation Celebration </h5>
                                        <div class="chapter-events-thumbnail__time">January 9, 2020  | 6:00 pm - 9:00 pm</div>
                                        <div class="chapter-events-thumbnail__location"><strong>Four Seasons Chicago</strong>, 120 E Delaware Pl, Chicago, CA 60611 United States</div>
                                        <div class="chapter-events-thumbnail__paragraph">
                                            <p> Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis</p>
                                        </div>
                                        <div class="chapter-events-thumbnail__buttons">
                                            <a href="{{url('atlantametro-events-detail')}}" class="btn btn--secondary"> View Details</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- events-thumbnail --}}


                                   {{-- events-thumbnail --}}
                                   <div class="chapter-events-thumbnail__item">
                                    <div class="chapter-events-thumbnail__date-range">
                                        <div class="chapter-events-thumbnail__month">
                                            Apr
                                        </div>
                                        <div class="chapter-events-thumbnail__day chapter-events-thumbnail__day--first"> 27</div>
                                        to
                                        <div class="chapter-events-thumbnail__day chapter-events-thumbnail__day--end"> 29</div>
                                    </div>
                                    <div class="chapter-events-thumbnail__image">
                                        <img src="{{ asset('public/images/chapter-book2.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="chapter-events-thumbnail__details">
                                        <h5>State of Asia Report & Updates </h5>
                                        <div class="chapter-events-thumbnail__time">February 22, 2020  | 1:30 pm - 4:00 pm</div>
                                        <div class="chapter-events-thumbnail__location"><strong>Four Seasons Chicago</strong>, 120 E Delaware Pl, Chicago, CA 60611 United States</div>
                                        <div class="chapter-events-thumbnail__paragraph">
                                            <p> Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis</p>
                                        </div>
                                        <div class="chapter-events-thumbnail__buttons">
                                            <a href="{{url('atlantametro-events-detail')}}" class="btn btn--secondary"> View Details</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- events-thumbnail --}}
                        </div>
                       


                    </div>
                  

                </div>
            </div>
        </section>

         

    </main>
    @include('front.layouts.sections.chapter-atlantametro.footer_chapter_atlantametro')
</section>