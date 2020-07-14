{{-- page-chapter page-chapter-aloha page-chapter-aloha--events --}}
<section class="page-chapter page-chapter--events">
    @include('front.layouts.sections.chapter.header_chapter')

    {{-- @include('front.pages.custom-page.sections.chapter-slider-aloha') --}}
    
    {{-- need to dynamic this sub  --}}
    {{-- <section class="sub-banner" data-aos="fade-up">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            {{-- <h3>Aloha</h3> --}}
                            {{-- {!! $chapter_page_event->content !!} --}}
                        {{-- </div>
                    </div>
                </div>
            </div>
        </div> --}}
        
        {{-- <div class="sub-banner__image image-background">
            <img src="{{ asset($chapter_page_event->banner_image) }}">
        </div>

    </section>  --}}
    
    @include('front.pages.custom-page.sections.chapter-slider')



    <main class="main-content">

        {{-- @include('front.pages.custom-page.sections.chapter-menu-black')  --}}
       
        <section class="events-section">
            <div class="container-max">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Upcoming Events</h2>
                    </div>

                    {{--
                    @if(count($chapter_events_previous))
                    <div class="col-lg-12">
                        <a href="#" class="btn btn--back">   <i href="#" class="btn btn--third"> </i> view previous events </a>
                    </div>
                    @endif                    
                    --}}
                    

                    <div class="col-lg-12">
                        
                        <div class="chapter-event-display">
                            {{-- @php($chapter_events = \App\Models\ChapterEvent::where('chapter_id', $chapter->id)->get()) --}}

                            @forelse($chapter_events as $chapter_event)
                                {{-- events-thumbnail --}}
                                <div class="chapter-events-thumbnail__item" data-aos="fade-up">
                                    <div class="chapter-events-thumbnail__date-range">
                                        <div class="chapter-events-thumbnail__month">
                                        {{ $chapter_event->startMonth }}
                                        </div>
                                        @if( $chapter_event->startMonth == $chapter_event->endMonth && $chapter_event->startDay == $chapter_event->endDay)
                                        <div class="chapter-events-thumbnail__day chapter-events-thumbnail__day--first"> {{ $chapter_event->startDay }}</div>
                                        @else
                                        <div class="chapter-events-thumbnail__day chapter-events-thumbnail__day--first"> {{ $chapter_event->startDay }}</div>
                                        to
                                        @if($chapter_event->startMonth != $chapter_event->endMonth)
                                        <div class="events-thumbnail__month events-thumbnail__month--end">
                                            {{ $chapter_event->endMonth }}
                                        </div>
                                        {{-- <div class="chapter-events-thumbnail__month">
                                        {{ $chapter_event->endMonth }}
                                        </div> --}}
                                        @endif
                                        <div class="chapter-events-thumbnail__day chapter-events-thumbnail__day--end"> {{ $chapter_event->endDay }}</div>
                                        @endif
                                    </div>
                                    <div class="chapter-events-thumbnail__image">
                                        <a href="{{route('chapter_event.detail', ['slug'=>$chapter->slug,'event_slug'=>$chapter_event->slug])}}" class="image-background"><img src="{{ !empty($chapter_event->attachment->url) ? $chapter_event->attachment->url : asset('public/images/watermark.jpg') }}" alt="Member Image"></a>
                                    </div>
                                    <div class="chapter-events-thumbnail__details">
                                        <a href="{{route('chapter_event.detail', ['slug'=>$chapter->slug,'event_slug'=>$chapter_event->slug])}}">
                                            <h5>{{ $chapter_event->name }}</h5>
                                        </a>
                                        <div class="chapter-events-thumbnail__time">{{ $chapter_event->dateRange }} | {{ $chapter_event->time }}</div>


                                        <div class="chapter-events-thumbnail__location"><strong>{{ $chapter_event->location_name }}</strong>
                                            {{ ($chapter_event->city!='')? ' '.$chapter_event->locationAddress : '' }}
                                        </div>
                                        <div class="chapter-events-thumbnail__paragraph">{{$chapter_event->short_description}}
                                            <?php
                                            // $trimmed = preg_replace("/>.*?</s", "><", $chapter_event->description);
                                            // echo $trimmed;
                                            ?>
                                        </div>
                                        <?php /*
                                        <div class="chapter-events-thumbnail__location"><strong>Four Seasons Chicago</strong>, 120 E Delaware Pl, Chicago, CA 60611 United States</div>
                                        <div class="chapter-events-thumbnail__paragraph">
                                            <p> Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis</p>
                                        </div>
                                        */ ?>

                                        <div class="chapter-events-thumbnail__buttons">
                                            <a href="{{route('chapter_event.detail', ['slug'=>$chapter->slug,'event_slug'=>$chapter_event->slug])}}" class="btn btn--secondary"> View Details</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- events-thumbnail --}}
                            @empty
                            <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Events.</h3>
                            @endforelse

                                {{-- events-thumbnail --}}
                                <!-- <div class="chapter-events-thumbnail__item">
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
                                            <a href="{{url('aloha-events-detail')}}" class="btn btn--secondary"> View Details</a>
                                        </div>
                                    </div>
                                </div> -->
                                {{-- events-thumbnail --}}


                                {{-- events-thumbnail --}}
                                <!-- <div class="chapter-events-thumbnail__item">
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
                                            <a href="{{url('aloha-events-detail')}}" class="btn btn--secondary"> View Details</a>
                                        </div>
                                    </div>
                                </div> -->
                                {{-- events-thumbnail --}}
                        </div>
                       


                    </div>
                  

                </div>
            </div>
        </section>

         

    </main>
    @include('front.layouts.sections.chapter.footer_chapter')
</section>