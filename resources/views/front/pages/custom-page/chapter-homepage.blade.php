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
                                    <div class="col-md-4 chapter-events-upcoming__image">
                                        <a href="{{url($chapter['slug'].'/event/'.$chapter_event->slug)}}">
                                            <img src="{{ isset($chapter_event->attachment->url)? $chapter_event->attachment->url : asset('public/images/watermark.jpg') }}" alt="event title" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-md-8 content-middle">
                                        <div class="chapter-events-upcoming__content ">
                                            <a href="{{url($chapter['slug'].'/event/'.$chapter_event->slug)}}">
                                                 <h4>{{ $chapter_event->name }}</h4>
                                                 {{-- {{$chapter_event->slug}} --}}
                                            </a>
                                            <h5>{{ $chapter_event->dateRange }} | {{ $chapter_event->time }}</h5>
                                            <div class="chapter-events-upcoming__description limit-me">
                                            <p>
                                            <?php
                                            $trimmed = preg_replace("/>.*?</s", "><", $chapter_event->description);
                                            echo $trimmed;
                                            ?>
                                            </p>                                             
                                            </div>
                                             <a href="{{url($chapter['slug'].'/event/'.$chapter_event->slug)}}" class="btn btn--primary"> Read More Details <i class="fas fa-arrow-right"></i> </a>
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
                            <a href="#" id="play-modal" class="btn btn--play-modal" data-toggle="modal" data-target="#videoModal">play</a>
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
                <div class="container-max {{ !empty($chapter_home->member_benefits_featured_image) ? '' : 'no-image-img' }}" >
                    <div class="row {{ !$chapter_home->member_benefits_featured_image ? 'd-flex justify-content-center' : 'd-flex justify-content-center' }}">

                        <div data-aos="fade-right" class="col-md-6" {{ !empty($chapter_home->member_benefits_featured_image) ? 'style=margin-left:-12%;' : '' }} >
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

                        @if($chapter_home->member_benefits_featured_image)
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

                    <?php
                    $jades = array();
                    $diamonds = array();
                    $emeralds = array();
                    $opals = array();
                    $rubies = array();
                    $pearls = array();

                    foreach ($other_sponsors as $sponsor) {
                        // echo $sponsor->badge_icon.' - '.$sponsor->image_alt.'<br>';
                        if ($sponsor->badge_icon=='jade') {
                            array_push($jades, $sponsor);
                        }
                        if ($sponsor->badge_icon=='diamond') {
                            array_push($diamonds, $sponsor);
                        }
                        if ($sponsor->badge_icon=='emerald') {
                            array_push($emeralds, $sponsor);
                        }
                        if ($sponsor->badge_icon=='opal') {
                            array_push($opals, $sponsor);
                        }
                        if ($sponsor->badge_icon=='ruby') {
                            array_push($rubies, $sponsor);
                        }
                        if ($sponsor->badge_icon=='pearl') {
                            array_push($pearls, $sponsor);
                        }
                    }
                    // print_r($jades);
                    ?>

                    @php($top_sponsor = json_decode($chapter_home->top_sponsor))
                    <div class="col-md-8">
                        <div class="logo-display">
                            <div class="logo-display__single">

                                {{-- <div class="row">
                                @foreach($jades as $jade)
                                    <div class="col-md-5">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--{{ $jade->badge_icon }}">  </div>
                                            <img src="{{ asset($jade->image) }}" alt="{{ $jade->image_alt }}" class="img-fluid">
                                        </div>
                                    </div>
                                @endforeach
                                </div> --}}

                                <div class="row logo-display__single--item">
                                    <div class="col-md-12">
                                        <h5>Jade</h5>
                                    </div>
                                    @foreach($jades as $jade)
                                        <div class="col-md-6">
                                            <div class="sponsor-thumbnail">
                                                <a href="{{ $jade->link }}" target="_new"><img src="{{ asset($jade->image) }}" alt="{{ $jade->image_alt }}" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            {{--
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
                            --}}

                            <div class="logo-display__col3">

                            @if(!empty($diamonds))
                                <div class="row logo-display__col3--item">
                                    <div class="col-md-12">
                                        <h5>Diamond</h5>
                                    </div>
                                    @foreach( $diamonds as $diamond )
                                        @if(!empty($diamond->image))
                                        <div class="col-md-4">
                                            <div class="sponsor-thumbnail">
                                                <a href="{{ $diamond->link }}" target="_new"><img src="{{ $diamond->image }}" alt="{{ $diamond->image_alt }}" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif



                            @if(!empty($emeralds))
                            {{-- <hr> --}}
                          
                            <div class="row logo-display__col3--item">
                                <div class="col-md-12">
                                    <h5>Emerald</h5>
                                </div>
                                @foreach( $emeralds as $emerald )
                                    @if(!empty($emerald->image))
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <a href="{{ $emerald->link }}" target="_new"><img src="{{ $emerald->image }}" alt="{{ $emerald->image_alt }}" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            @endif

                            @if(!empty($opals))
                            {{-- <hr> --}}
                            <div class="row logo-display__col3--item">
                                <div class="col-md-12">
                                    <h5>Opal</h5>
                                </div>
                                @foreach( $opals as $opal )
                                    @if(!empty($opal->image))
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <a href="{{ $opal->link }}" target="_new"><img src="{{ $opal->image }}" alt="{{ $opal->image_alt }}" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            @endif

                            @if(!empty($rubies))
                            {{-- <hr> --}}
                          
                            <div class="row logo-display__col3--item">
                                <div class="col-md-12">
                                    <h5>Ruby</h5>
                                </div>
                                @foreach( $rubies as $ruby )
                                    @if(!empty($ruby->image))
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <a href="{{ $ruby->link }}" target="_new"><img src="{{ $ruby->image }}" alt="{{ $ruby->image_alt }}" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            @endif

                            @if(!empty($pearls))
                            {{-- <hr> --}}
                            <h5>Pearl</h5>
                            <div class="row logo-display__col3--item">
                                @foreach( $pearls as $pearl )
                                    @if(!empty($pearl->image))
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <a href="{{ $pearl->link }}" target="_new"><img src="{{ $pearl->image }}" alt="{{ $pearl->image_alt }}" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            @endif

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

            {{-- <button data-modal-close data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button> --}}

            </div>
            <div class="modal-body">
           
               
               <iframe id="chapter-video" src="{{$chapter_home->who_we_are_featured_video}}?autoplay=1&rel=0" width="560" height="315" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>


               {{-- <iframe src="{{$chapter_home->who_we_are_featured_video}}?rel=0&amp;controls=0&amp;showinfo=0&enablejsapi=1" width="560" height="315" frameborder="0" allowfullscreen></iframe> --}}
                <?php /*
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
                */ ?>

            </div>
          
        </div>
        </div>
    </div>


    @include('front.layouts.sections.chapter.footer_chapter')
</section>