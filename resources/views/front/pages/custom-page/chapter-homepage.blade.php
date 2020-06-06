<section class="page-chapter page-chapter--homepage">
    @include('front.layouts.sections.chapter.header_chapter')

    @include('front.pages.custom-page.sections.chapter-slider')

    <main class="main-content">
        {{-- @include('front.pages.custom-page.sections.chapter-menu') --}}

        {{-- @include('front.pages.custom-page.sections.chapter-menu-black')  --}}


        <section>
            <div class="container-max">
                <div class="col-lg-12">

                        <div class="heading-button">
                            <h2> My Upcoming Events </h2>
                            <a href="{{url($chapter['slug'].'/events')}}" class="btn btn--view-all"> View all</a>
                        </div>

                        <div class="chapter-events-upcoming">
                            @php( $chapter_event = \App\Models\ChapterEvent::where('chapter_id', $chapter->id)
                                    ->where('starts_at', '>=', date('Y-m-d'))
                                    ->orderBy('starts_at')
                                    ->first() )
                            
                            @if(!empty($chapter_event))
                            {{-- loop here --}}
                            <div class="chapter-events-upcoming__box">
                                <div class="row">
                                    <div class="col-md-3 chapter-events-upcoming__image">
                                        <a href="{{url($chapter['slug'].'/events')}}">
                                            <img src="{{ $chapter_event->attachment->url }}" alt="event title" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-md-9 content-middle">
                                        <div class="chapter-events-upcoming__content ">
                                            <h4>{{ $chapter_event->name }}</h4>
                                            <h5>{{ $chapter_event->dateRange }} | {{ $chapter_event->time }}</h5>
                                            <div class="chapter-events-upcoming__description limit-me">
                                            <p>
                                            {{ $chapter_event->description }}
                                            </p>                                             
                                            </div>
                                             <a href="{{url($chapter['slug'].'/events')}}" class="btn btn--primary"> Read More Details <i class="fas fa-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- loop here --}}                            
                            @else
                            <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Events.</h3>
                            @endif
                            
                        </div>

                </div>
            </div>
        </section>

        {{-- need to dynamic this sub  --}}
        <section class="video-masking video-masking__fullwidth" data-aos="fade-up">
            <div class="container-max">
                <div class="row">

                    <div class="col-md-7 video-masking__video-frame">                        
                         {{-- @include('front.pages.custom-page-sections.element-video-frame')                   --}}

                         <div class="html-video image-background">
                            <img src="{{ asset($chapter_home->who_we_are_video_cover_image) }}">
                            
                        </div>   

                        <div class="html-video__button">
                            {{-- <button class="active">play</button> --}}
                            <a href="#" class="btn btn--play-modal" data-toggle="modal" data-target="#videoModal">play</a>
                        </div>

                        
                    </div>

                    <div class="col-md-5 video-masking__floater">

                        <div class="video-masking__content">
                            <h2>{{ $chapter_home->who_we_are_title }}</h2>
                            <div class="video-masking__content--push">
                                {!! $chapter_home->who_we_are_content !!}                                

                                <div class="btn-group">
                                    @if($chapter_home->who_we_are_button1_text)
                                        <a href="{{ url($chapter_home->who_we_are_button1_link) }}" class="btn btn btn--secondary">{{ $chapter_home->who_we_are_button1_text }}</a>
                                    @endif
                                    @if($chapter_home->who_we_are_button2_text)
                                        <a href="{{ url($chapter_home->who_we_are_button2_link) }}" class="btn btn btn--primary">{{ $chapter_home->who_we_are_button2_text }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



            {{-- story section  --}}
            <section class="fullwidth fullwidth__left-push chapter-benefits">
                <div class="container-max" >
                    <div class="row {{ !$chapter_home->attachment ? 'd-flex justify-content-center' : '' }}">

                        <div data-aos="fade-right" class="col-md-6" {{ !$chapter_home->attachment ? 'style=margin-left:-12%;' : '' }}>

                                <h2>{{ $chapter_home->member_benefits_title }}</h2>
                                <p>{{ $chapter_home->member_benefits_content }}</p>

                                {{-- comment insert class on UL  --}}
                                {{-- use class bullet-style only if you want one col  --}}
                                {{-- use class bullet-style__col-2 to enable 2cols --}}
                                {{-- use class bullet-style__col-3 to enable 3cols --}}
                                {{-- bullet-style--uppercase the strong tag will capitalize --}}
                                <ul class="bullet-style bullet-style--uppercase">
                                    @php($items = json_decode($chapter_home->member_benefits_items) )
                                    @if($items)
                                    @foreach($items as $item)
                                        @if(!empty($item))                                        
                                        <li>{!! $item !!}</li>
                                        @endif
                                    @endforeach
                                    @endif
                                </ul>

                                <div class="btn-group">
                                @if($chapter_home->member_benefits_button1_text)
                                    <a href="{{ url($chapter_home->member_benefits_button1_link) }}" class="btn btn btn--secondary">{{ $chapter_home->member_benefits_button1_text }}</a>
                                    @endif
                                @if($chapter_home->member_benefits_button2_text)
                                    <a href="{{ url($chapter_home->member_benefits_button2_link) }}" class="btn btn btn--primary">{{ $chapter_home->member_benefits_button2_text }}</a>
                                    @endif
                               </div>

                        </div>

                        @if($chapter_home->attachment)
                        <div class="col-md-6" data-aos="fade-left">
                            {{-- <img src="{{ $chapter_home->attachment ? $chapter_home->attachment->url : '' }}" alt="{{ $chapter_home->attachment ? $chapter_home->attachment->url : '' }}" class="img-fluid"> --}}
                            <img src="{{ $chapter_home->member_benefits_featured_image }}" alt="{{  $chapter_home->member_benefits_featured_image_alt }}" class="img-fluid">
                        </div>
                        @endif
                
                    </div>
                </div> {{-- end of default-content--row --}}
            </section> {{-- end of default-content --}}



        {{-- story section  --}}
        
        @php( $other_sponsors = $chapter_home->other_sponsors ? json_decode($chapter_home->other_sponsors) : [] )
        @php( $is_empty = false )        
        @if( count($other_sponsors) > 0 )
            @php( $count = 0 )
            @foreach($other_sponsors as $sponsor)
                @if(!empty($sponsor->image))
                    @php($count++)
                @endif
            @endforeach
            @if( $count == 0 )
            @php( $is_empty = true )
            @endif
        @else
            @php( $is_empty = true )
        @endif

        @if(!empty($chapter_home->sponsors_title) && !$is_empty)
        <section class="sponsors" data-aos="fade-up">
            <div class="container-max">
                <div class="row">

                    <div class="col-md-12">
                        <div class="filter-stone">
                            <ul class="inline-block">
                                {{-- @php( $sponsor_filters = $chapter_home->sponsors_filters ? json_decode($chapter_home->sponsors_filters) : [] )
                                @foreach( $sponsor_filters as $data )
                                <li class="filter-stone--{{ $data->icon }}"><a href="{{ $data->link }}"> <span> 1 </span>- {{ $data->text }} </a> </li>
                                @endforeach
                                --}}
                                <li class="filter-stone--jade"><a href="#"> <span> 1 </span>- Jade </a> </li>
                                <li class="filter-stone--diamond"><a href="#"> <span> 1 </span>- Diamond </a> </li>
                                <li class="filter-stone--emerald"><a href="#"> <span> 1 </span>- Emerald </a> </li>
                                <li class="filter-stone--opal"><a href="#"> <span> 1 </span>- Opal </a> </li>
                                <li class="filter-stone--ruby"><a href="#"> <span> 1 </span>- Ruby </a> </li>
                                <li class="filter-stone--pearl"><a href="#"> <span> 1 </span>- Pearl </a> </li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-4">
                            <div class="sponsors__content">
                                <h2>{{ $chapter_home->sponsors_title }}</h2>
                                <p>{{ $chapter_home->sponsors_content }}</p>
    
                                <div class="btn-group">
                                @if($chapter_home->sponsors_button1_text)
                                        <a href="{{ url($chapter_home->sponsors_button1_link) }}" class="btn btn btn--primary">{{ $chapter_home->sponsors_button1_text }}</a>
                                @endif
                                </div>
                            </div>
                    </div>

                    @php($top_sponsor = json_decode($chapter_home->top_sponsor))
                    <div class="col-md-8">
                        <div class="logo-display">
                            @if($top_sponsor->image)
                            <div class="logo-display__single">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--{{ $top_sponsor->badge_icon }}">  </div>
                                            <img src="{{ asset($top_sponsor->image) }}" alt="{{ $top_sponsor->image_alt }}" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="logo-display__col3">
                                <div class="row">
                                    
                                    @foreach( $other_sponsors as $sponsor )
                                        @if(!empty($sponsor->image))
                                        <div class="col-md-4">
                                            <div class="sponsor-thumbnail">
                                                <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--{{ $sponsor->badge_icon }}">  </div>
                                                <img src="{{ $sponsor->image }}" alt="{{ $sponsor->image_alt }}" class="img-fluid">
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                       
                    </div>

            
                </div>
            </div> {{-- end of default-content--row --}}
        </section> {{-- end of default-content --}}
        @endif

         

    </main>



       <!-- Modal -->
       <div class="modal fade modal-chapter-popup" id="videoModal" tabindex="-1" role="dialog" aria-labelledby=videoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="videoModalLabel">
               {{ $chapter_home->who_we_are_title }}
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
           
                {{-- @if($chapter_home->who_we_are_featured_video) --}}
                <video id="video" width="100%" height="100%" poster="{{ asset($chapter_home->who_we_are_video_cover_image) }}" autoplay loop muted controlsList="nodownload" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                    <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
                    <source type="video/mp4" src="{{ asset($chapter_home->who_we_are_featured_video) }}" />
                    {{--
                    <source type="video/mp4" src="{{ url('public/images/AREAACentralNewJersey.mp4') }}" />
                    <source type="video/ogg" src="{{ url('public/images/AREAACentralNewJersey.ogg') }}" />
                    <source type="video/webm" src="{{ url('public/images/AREAACentralNewJersey.webm') }}" />
                    --}}
                    <!-- Flash fallback for non-HTML5 browsers without JavaScript -->
                    <object width="100%" height="400" type="application/x-shockwave-flash" data="flashmediaelement.swf">
                        <param name="movie" value="flashmediaelement.swf" />
                        <param name="flashvars" value="controls=false&file={{ url('public/images/video-cover.jpg') }}" />
                        <!-- Image as a last resort -->
                        <img src="{{ url('public/images/video-cover.jpg') }}" width="320" height="240" title="No video playback capabilities" />
                    </object>
                </video> 

            </div>
          
        </div>
        </div>
    </div>




    @include('front.layouts.sections.chapter.footer_chapter')
</section>