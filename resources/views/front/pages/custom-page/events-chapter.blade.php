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
                            <!-- <h3>Chapter</h3>
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
                        {{-- @php($events = \App\Models\ChapterEvent::orderBy('starts_at', 'asc')->get()) --}}
                        <?php
                            $today = date('Y-m-d');
                            $events = \App\Models\ChapterEvent::where('starts_at','>=', $today)
                            ->where('ends_at','<=', $today)
                            ->orWhere('starts_at','>=', $today)
                            ->orderBy('starts_at', 'asc')
                            ->get();
                        ?>
                        @if ($events->isEmpty())
                            <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Events.</h3>
                        @endif
                        @foreach($events as $event)                        
                        <div class="events-thumbnail__item">
                            {{-- events-thumbnail__item-holder --}}
                            <div class="events-thumbnail__item-holder">

                                <div class="events-thumbnail__date-range">
                                    <div class="events-thumbnail__month">
                                        {{ $event->startMonth }}
                                    </div>
                                    <div class="events-thumbnail__day events-thumbnail__day--first"> {{ $event->startDay }}</div>
                                    to
                                    <div class="events-thumbnail__day events-thumbnail__day--end"> {{ $event->endDay }}</Div>
                                </div>
                                <div class="events-thumbnail__image">
                                    <a href="{{route('chapter_event.detail', ['slug'=>$event->chapter_slug,'event_slug'=>$event->slug])}}" class="image-background">
                                        <img src="{{ $event->attachment ? optional($event->attachment)->url : asset('public/images/no-image.jpg') }}" alt="Member Image">
                                    </a>
                                </div>
                                <div class="events-thumbnail__details">
                                    <h6>{{ $event->chapter }}</h6>
                                    <a href="{{route('chapter_event.detail', ['slug'=>$event->chapter_slug,'event_slug'=>$event->slug])}}">
                                            <h5>{{ $event->name }}</h5>
                                    </a>
                                    <div class="events-thumbnail__time">{{ $event->time }}</div>
                                    <div class="events-thumbnail__location"><strong>{{ $event->location_name }}</strong>, {{ $event->locationAddress }}</div>
                                    <div class="events-thumbnail__paragraph">
                                        {{ $event->description }}
                                    </div>
                                    <div class="events-thumbnail__buttons">
                                        <a href="{{route('chapter_event.detail', ['slug'=>$event->chapter_slug,'event_slug'=>$event->slug])}}" class="btn btn--secondary"> View Details</a>
                                    </div>
                                </div>

                            </div>
                            {{-- events-thumbnail__item-holder --}}
                        </div>                            
                        @endforeach
                        
                        {{-- <div class="events-thumbnail__loadmore text-center">
                            <a href="#" class="btn btn--primary"> Load more </a>
                        </div> --}}

                        <div class="events-thumbnail__loadmore text-center">
                            <a href="#" id="loadMore" class="btn btn--primary"> Load more </a>
                        </div>
                   
                   
                    </div>

                </div>



            </div>
        </section>
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>