<section class="page-chapter page-chapter-newyorkeast page-chapter-newyorkeast--events">
    @include('front.layouts.sections.chapter-newyorkeast.header_chapter_newyorkeast')

    @include('front.pages.custom-page.sections.chapter-slider-newyorkeast')

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
                                            <a href="{{url('chapter-event-detail')}}" class="btn btn--secondary"> View Details</a>
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
                                            <a href="{{url('chapter-event-detail')}}" class="btn btn--secondary"> View Details</a>
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
    @include('front.layouts.sections.chapter-newyorkeast.footer_chapter_newyorkeast')
</section>