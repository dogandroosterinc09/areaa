{{-- page-chapter page-chapter-aloha page-chapter-aloha--events-detail --}}
<section class="page-chapter page-chapter--events-detail">
    @include('front.layouts.sections.chapter.header_chapter')

    {{-- @include('front.pages.custom-page.sections.chapter-slider-aloha') --}}
    
    {{-- need to dynamic this sub  --}}
    <section class="sub-banner" data-aos="fade-up">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            {{-- <h3>Aloha</h3> --}}
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

        <section class="events-section" data-aos="fade-up">
            <div class="container-max">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="{{route('chapter_event.main', ['slug'=>$chapter->slug])}}" class="btn btn--back">   <i href="#" class="btn btn--third"> </i> Back to National Events </a>
                    </div>
    
                    <div class="col-lg-8">
                        <div class="chapter-event-details">
                            <div class="chapter-event-details__image">
                                <img src="{{ $chapter_event->attachment ? ($chapter_event->attachment)->url : asset('public/images/watermark.jpg') }}" alt="chapter Image" class="img-fluid">
                            </div>
                            <div class="chapter-event-details__description">
                                <h3>Description</h3>
                                <!-- <p>Lorem ipsum dolor sit amet, justo non porttitor, ornare vel etiam at vulputate, ipsum elit lorem leo quis. Rutrum eu turpis, ultricies nunc, sed fermentum tincidunt nulla. Vel duis arcu a ligula, ultrices neque class pellentesque luctus, ac quis curae luctus adipiscing vulputate imperdiet, vehicula nunc morbi, sodales vel wisi. Consequat mauris sapiente sem leo duis nulla, turpis class dolor, vitae purus arcu dolor, sapien pellentesque etiam fringilla placerat integer. Diam ipsum suspendisse nec. Nunc eu, suscipit quasi optio, ultrices sunt porta orci, et sed vel magnis. Sint eu ornare sed, praesent varius tristique, suscipit eget nunc ut libero ligula quam, maecenas iaculis magna pellentesque venenatis, ligula quisque sit. Pede voluptatum, sagittis tempor porttitor rutrum in felis, nibh condimentum bibendum, ullamcorper et consequat. </p> -->
                               {!! $chapter_event->description !!}
                            </div>
                            {{--
                            <div class="chapter-event-details__email">
                                <h5>Questions?</h5>
                                <ul>
                                    <li>Jordan Lee</li>
                                    <li>503-887-3619</li>
                                    <li>jordan@jordanleemortgage.com</li>
                                </ul>
                            </div>
                            --}}
    
                            <div class="chapter-events-next-preview">
                               <div class="container">
                                    <div class="row">
                                        @if($previousEvent)
                                        <div class="chapter-events-next-preview__details chapter-events-next-preview__left col-sm-6">
                                            <div class="chapter-events-next-preview__holder">
                                                <a href="{{route('chapter_event.detail', ['slug'=>$chapter->slug,'event_slug'=>$previousEvent->slug])}}">
                                                    <h4>Previous Event</h4>
                                                    <h3>{{ $previousEvent->name }}</h3>
                                                    {{-- <div class="chapter-events-next-preview__date-time">
                                                        <div class="events-next-preview__month">Oct. 08 - 10</div> 
                                                        <div class="events-next-preview__time">7:00pm - 9:00pm</div>
                                                    </div> --}}
                                                </a>
                                            </div>
                                            
                                            <a href="#" class="btn btn--third"> </a>
                                        </div>
                                        @else
                                        <div class="col-sm-6"></div>
                                        @endif
                                    
                                        @if($nextEvent)
                                        <div class="chapter-events-next-preview__details chapter-events-next-preview__right col-sm-6">
                                       
                                            <div class="chapter-events-next-preview__holder">
                                                <a href="{{route('chapter_event.detail', ['slug'=>$chapter->slug,'event_slug'=>$nextEvent->slug])}}">
                                                    <h4>Next Event</h4>
                                                    <h3>{{ $nextEvent->name }}</h3>
                                                    {{-- <div class="chapter-events-next-preview__date-time">
                                                        <div class="events-next-preview__month">Oct. 08 - 10</div> 
                                                        <div class="events-next-preview__time">7:00pm - 9:00pm</div>
                                                    </div> --}}
                                                </a>
                                            </div>
                                            
                                            <a href="#" class="btn btn--third"> </a>
                                        </div>                                        
                                        @endif                                        
                                    </div>
                               </div>
                            </div>
                        </div>
                       
                    </div>
    
    
                    <div class="col-lg-4">
                        <div class="register-info">
                            <h4>Registration Info</h4>              

                            <div class="register-info__list">
                                <ul>
                                    <li><span><strong>Date</strong></span> <span>{{ $chapter_event->dateRange }}</span></li>
                                    <li><span><strong>Time</strong></span> <span>{{ $chapter_event->time }}</span></li>
                                    <li><span><strong>Location</strong></span> <span><strong>{{ $chapter_event->location_name }}</strong> 
                                    {{ $chapter_event->locationAddress }}</span></li>
                                    <li><span><strong>Cost</strong></span> <span>${{ $chapter_event->amount }}</span></li>
                                </ul>
                                <div class="register-info__button">
                                    <a href="#" class="btn btn--secondary" data-toggle="modal" data-target="#registerModal"> Register</a>
                                </div>
                            </div>
                        </div>

                        <div class="event-single-map">
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11603365.99775855!2d-118.20713936747744!3d32.39640988632438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc7361593c7e91%3A0x583eee0359e56260!2sAsian%20Real%20Estate%20Association%20of%20America%20(AREAA)!5e0!3m2!1sen!2sph!4v1580871072564!5m2!1sen!2sph" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->

                            <iframe width="100%" height="300" frameborder="0" style="border:0" allowfullscreen
                            src="https://www.google.com/maps/embed/v1/place?q={{$chapter_event->location_name}}&key={{env('GOOGLE_MAP_API_KEY')}}"></iframe>
                        </div>
                    </div>


                </div>
            </div>
        </section>



    </main>
    @include('front.layouts.sections.chapter.footer_chapter')
</section>

@include('front.pages.custom-page.sections.event-registration-modal')