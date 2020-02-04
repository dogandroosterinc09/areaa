<section class="page page--events">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>Natiional</h3>
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
                <div class="col-lg-12">

                    <div class="events-thumbnail">

                         {{-- events-thumbnail --}}
                        <div class="events-thumbnail__item">
                                <div class="events-thumbnail__date-range">
                                    <div class="events-thumbnail__month">
                                        Apr
                                    </div>
                                    <div class="events-thumbnail__day events-thumbnail__day--first"> 27</div>
                                    to
                                    <div class="events-thumbnail__day events-thumbnail__day--end"> 29</div>
                                </div>
                                <div class="events-thumbnail__image image-background">
                                    <img src="{{ asset('public/images/no-image.jpg') }}" alt="Member Image">
                                </div>
                                <div class="events-thumbnail__details">
                                    <h5>2020 Global Luxury Summit </h5>
                                    <div class="events-thumbnail__time">7:00pm - 9:00pm</div>
                                    <div class="events-thumbnail__location"><strong>Four Seasons Chicago</strong>, 120 E Delaware Pl, Chicago, CA 60611 United States</div>
                                    <div class="events-thumbnail__paragraph">
                                        <p> Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis</p>
                                    </div>
                                    <div class="events-thumbnail__buttons">
                                        <a href="#" class="btn btn--secondary"> View Details</a>
                                    </div>
                                </div>
                        </div>
                        {{-- events-thumbnail --}}

                          {{-- events-thumbnail --}}
                          <div class="events-thumbnail__item">
                            <div class="events-thumbnail__date-range">
                                <div class="events-thumbnail__month">
                                    Apr
                                </div>
                                <div class="events-thumbnail__day events-thumbnail__day--first"> 27</div>
                                to
                                <div class="events-thumbnail__day events-thumbnail__day--end"> 29</div>
                            </div>
                            <div class="events-thumbnail__image image-background">
                                <img src="{{ asset('public/images/no-image.jpg') }}" alt="Member Image">
                            </div>
                            <div class="events-thumbnail__details">
                                <h5>2020 Global Luxury Summit </h5>
                                <div class="events-thumbnail__time">7:00pm - 9:00pm</div>
                                <div class="events-thumbnail__location"><strong>Four Seasons Chicago</strong>, 120 E Delaware Pl, Chicago, CA 60611 United States</div>
                                <div class="events-thumbnail__paragraph">
                                    <p> Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis</p>
                                </div>
                                <div class="events-thumbnail__buttons">
                                    <a href="#" class="btn btn--secondary"> View Details</a>
                                </div>
                            </div>
                        </div>
                        {{-- events-thumbnail --}}


                        {{-- events-thumbnail --}}
                        <div class="events-thumbnail__item">
                            <div class="events-thumbnail__date-range">
                                <div class="events-thumbnail__month">
                                    Apr
                                </div>
                                <div class="events-thumbnail__day events-thumbnail__day--first"> 27</div>
                                to
                                <div class="events-thumbnail__day events-thumbnail__day--end"> 29</div>
                            </div>
                            <div class="events-thumbnail__image image-background">
                                <img src="{{ asset('public/images/no-image.jpg') }}" alt="Member Image">
                            </div>
                            <div class="events-thumbnail__details">
                                <h5>2020 Global Luxury Summit </h5>
                                <div class="events-thumbnail__time">7:00pm - 9:00pm</div>
                                <div class="events-thumbnail__location"><strong>Four Seasons Chicago</strong>, 120 E Delaware Pl, Chicago, CA 60611 United States</div>
                                <div class="events-thumbnail__paragraph">
                                    <p> Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis</p>
                                </div>
                                <div class="events-thumbnail__buttons">
                                    <a href="#" class="btn btn--secondary"> View Details</a>
                                </div>
                            </div>
                        </div>
                        {{-- events-thumbnail --}}


                        <div class="events-thumbnail__loadmore text-center">
                            <a href="#" class="btn btn--primary"> Load more </a>
                        </div>

                    </div>

                </div>



            </div>
        </section>
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>