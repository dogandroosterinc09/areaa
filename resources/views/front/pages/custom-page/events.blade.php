<section class="page page--events">
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
                            <!-- <h3>National</h3>
                            <h1>Events</h1> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url($page->attachment) }}">
            <!-- <img src="{{ url('public/images/events-banner.jpg') }}"> -->
        </div>
    </section>


    <main class="main-content">


        <section class="events-section" data-aos="fade-up">
            <div class="container-max">
                <div class="col-lg-12">

                    <div class="events-thumbnail">
                        @php($events = \App\Models\Event::all())                        
                        @if ($events->isEmpty())
                            <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Events.</h3>
                        @endif
                        @foreach($events as $event) 
                        <div class="events-thumbnail__item">
                            <div class="events-thumbnail__date-range">
                                <div class="events-thumbnail__month">
                                    {{ $event->startMonth }}
                                </div>
                                <div class="events-thumbnail__day events-thumbnail__day--first"> {{ $event->startDay }}</div>
                                to
                                <div class="events-thumbnail__day events-thumbnail__day--end"> {{ $event->endDay }}</Div>
                            </div>
                            <div class="events-thumbnail__image">
                                <a href="{{ $event->url }}" class="image-background">
                                    <img src="{{ $event->attachment ? optional($event->attachment)->url : asset('public/images/no-image.jpg') }}" alt="Member Image">
                                </a>
                            </div>
                            <div class="events-thumbnail__details">
                                <a href="{{url('events-detail')}}">
                                        <h5>{{ $event->name }}</h5>
                                </a>
                                <div class="events-thumbnail__time">{{ $event->time }}</div>
                                <div class="events-thumbnail__location"><strong>{{ $event->location_name }}</strong>, {{ $event->locationAddress }}</div>
                                <div class="events-thumbnail__paragraph">
                                    {{ $event->description }}
                                </div>
                                <div class="events-thumbnail__buttons">
                                    <a href="{{ $event->url }}" class="btn btn--secondary"> View Details</a>
                                </div>
                            </div>
                        </div>                            
                        @endforeach
                        
                        <!-- for reference
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
                            <div class="events-thumbnail__image">
                                <a href="{{url('events-detail')}}" class="image-background">
                                    <img src="{{ asset('public/images/executive-banner.jpg') }}" alt="Member Image">
                                </a>
                            </div>
                            <div class="events-thumbnail__details">
                                <a href="{{url('events-detail')}}">
                                        <h5>2020 Global Luxury Summit </h5>
                                </a>
                                <div class="events-thumbnail__time">7:00pm - 9:00pm</div>
                                <div class="events-thumbnail__location"><strong>Four Seasons Chicago</strong>, 120 E Delaware Pl, Chicago, CA 60611 United States</div>
                                <div class="events-thumbnail__paragraph">
                                    <p> Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis</p>
                                </div>
                                <div class="events-thumbnail__buttons">
                                    <a href="{{url('events-detail')}}" class="btn btn--secondary"> View Details</a>
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
                            <div class="events-thumbnail__image">
                                <a href="{{url('events-detail')}}" class="image-background">
                                    <img src="{{ asset('public/images/no-image.jpg') }}" alt="Member Image">
                                </a>
                            </div>
                            <div class="events-thumbnail__details">
                                <a href="{{url('events-detail')}}">
                                    <h5>2020 Global Luxury Summit </h5>
                               </a>
                                <div class="events-thumbnail__time">7:00pm - 9:00pm</div>
                                <div class="events-thumbnail__location"><strong>Four Seasons Chicago</strong>, 120 E Delaware Pl, Chicago, CA 60611 United States</div>
                                <div class="events-thumbnail__paragraph">
                                    <p> Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis</p>
                                </div>
                                <div class="events-thumbnail__buttons">
                                    <a href="{{url('events-detail')}}" class="btn btn--secondary"> View Details</a>
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
                        -->
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