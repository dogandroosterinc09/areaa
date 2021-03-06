<section class="homepage homepage--main">
    @include('front.layouts.sections.header')
    @include('front.pages.custom-page.sections.slider')

    <main class="main-content">
        {{-- Start  --}}
        <section class="events-camp wrapper padding-top90" data-aos="fade-up">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Upcoming Events</h2>
                    </div>
                    <div class="col-md-3 content-middle content-middle__right">
                        <a href="{{url('events')}}" class="btn btn--secondary">View All Events</a>
                    </div>
                </div>
            </div>

            <div class="events-camp-parent-holder">
                <div class="events-camp-slider">
                    @php($events_campaigns = json_decode($page->other_content))

                    @if (empty($events_campaigns))
                        <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Events.</h3>
                    @endif

                    @foreach($events_campaigns as $event)
                        <div class="events-camp-slider--item">
                            <a href="{{ $event->link }}">
                                <div class="img-holder image-background">
                                    <img src="{{ $event->image ? $event->image : asset('public/images/watermark.jpg') }}" alt="Events Image">
                                </div>
                                <div class="title">{{ (strlen($event->title)>27)? substr($event->title, 0,27).' ...' : $event->title }}<span><i></i></span></div>
                            </a>
                        </div>
                    @endforeach

                </div>
                {{-- slider-controls --}}
                <div class="slider-controls-two">
                    <button class="slick-prev slick-arrow slide-m-prev-two" aria-label="Previous" type="button" style="display: block;">Previous</button>
                    {{-- <button type="button" class="slide-m-prev-two category-slider__slick--prev"> <i></i> </button> --}}
                    <div class="slide-m-dots-two"></div>
                    {{-- <button type="button" class="slide-m-next-two category-slider__slick--next"> <i></i> </button> --}}
                    {{-- <button type="button" class="slide-m-next">next</button> --}}
                    <button class="slick-next slick-arrow slide-m-next-two" aria-label="Next" type="button" style="display: block;">Next</button>
                </div>
            </div>

        </section>
        {{-- End of Events Camp --}}

        {{-- Start  --}}
        <section class="become-member wrapper margin-top90">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-7" data-aos="fade-right">

                        <div class="become-member__content">
                            <h2>{{ section('Become a Member.data.first.title') }}</h2>
                            <!-- <div class="content-text"> -->
                                {!! section('Become a Member.data.first.content') !!}
                                <br/>

                                <div class="become-member__button">
                                    <a href="{{ section('Become a Member.data.first.btn1_link') }}" class="btn btn--secondary margin-right20">{{ section('Become a Member.data.first.btn1_text') }}</a> 
                                    @if(section('Become a Member.data.first.btn2_link'))
                                        <a href="{{ section('Become a Member.data.first.btn2_link') }}" class="btn btn--primary">{{ section('Become a Member.data.first.btn2_text') }}</a>
                                    @endif
                                </div>
                               
                            <!-- </div> -->
                        </div>                    
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="members-count" data-aos="fade-down">
                            
                            @foreach(section('Member Count.data') as $data)
                                @if ($loop->first)
                                <div class="txt-count">
                                    <div><span class="count">{{ $data->count }}</span><span>+</span></div>
                                    <div class="title">{{ $data->title }}</div>
                                    <div class="sub-txt">{{ $data->sub_text }}</div>
                                </div>
                                @else
                                <div class="txt-count">
                                    <div><span class="count">{{ $data->count }}</span></div>
                                    <div class="title">{{ $data->title }}</div>
                                    <div class="sub-txt">{{ $data->sub_text }}</div>
                                </div>
                                @endif                            
                            @endforeach                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-holder" data-aos="fade-left">
                <img src="{{ section('Become a Member.data.first.image') }}" alt="{{ section('Become a Member.data.first.alt_text') }}">
            </div>
        </section>
        {{-- End of Become Member --}}


 

        {{-- Start  --}}
        <section class="partnership wrapper image-background margin-top60"> 
            <img src="{{ section('Partnership.data.first.image') }}" alt="{{ section('Partnership.data.first.alt_text') }}">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-6 partnership__left"  data-aos="fade-up">
                        <div class="title">
                            <h2>{{ section('Partnership.data.first.title') }}</h2>
                            {{-- <p>We have more than 30 partners fromLocal to International.</p> --}}
                            {!! section('Partnership.data.first.content') !!}
                        </div>

                           {{-- partnership-level --}}
                           <div class="partnership-level partnership-level__adjustment">

                            {{--
                            @foreach( section('Partnership Levels.data') as $data )
                            <div class="partnership-level--item">
                                <div class="icon {{ $data->icon }}"></div>
                                <div class="content-txt">
                                    <h3>{{ $data->title }}</h3>
                                    <p>{{ $data->content }}</p>
                                </div>
                            </div>
                            @endforeach                            
                            --}}

                            <div class="btn-wrap">
                                @if(section('Partnership.data.first.btn1_text'))
                                <a href="{{ section('Partnership.data.first.btn1_link') }}" class="btn btn--secondary margin-right20">
                                {{ section('Partnership.data.first.btn1_text') }}</a> 
                                @endif
                                @if(section('Partnership.data.first.btn2_text'))
                                <a href="{{ section('Partnership.data.first.btn2_link') }}" class="btn btn--primary">{{ section('Partnership.data.first.btn2_text') }}</a>
                                @endif
                            </div>
                        </div>
                         {{-- partnership-level --}}
                    </div>
                    <div class="col-md-6 partnership__right content-middle">
                        
                        {{-- big-advertisement --}}
                        <div class="big-advertisement" data-aos="fade-up">
                            <div class="big-advertisement__slick">

                            @php($partnerships = json_decode($page->other_section2))
                            @if (empty($partnerships))
                                <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Partnership ads.</h3>
                            @else
                                @foreach($partnerships as $partner_slide)
                                    <div class="big-advertisement__slick--item">
                                        <a href="{{$partner_slide->link}}">
                                            <img src="{{$partner_slide->image}}{{-- asset('public/images/advertisement-big.jpg') --}}" alt="ads">
                                         </a>
                                    </div>
                                @endforeach
                            @endif

                            </div>
                        </div>
                        {{-- big-advertisement --}}


                    </div>
                </div>
            </div>
        </section>
        {{-- End of Partnership --}}

        {{-- Start  --}}
        <section class="growing wrapper margin-top40">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-12 text-center" data-aos="fade-up">
                        <h2>{{ section('Growing Opportunities.data.first.title') }}</h2>
                        {!! section('Growing Opportunities.data.first.content') !!}
                    </div>
                </div>
                <div class="row margin-top40">
                    <div class="col-md-6" data-aos="fade-right">
                        <div class="list padding-top60">
                            @foreach ( section('Growing Opportunities List Items.data') as $data )
                            {!! $data->content !!}
                            @endforeach                            
                        </div>
                        <div class="btn-wrap text-center margin-top50">
                            @if(section('Growing Opportunities.data.first.btn1_text'))
                            <a href="{{ section('Growing Opportunities.data.first.btn1_link') }}" class="btn btn--secondary margin-right20">{{ section('Growing Opportunities.data.first.btn1_text') }}</a> 
                            @endif
                            @if(section('Growing Opportunities.data.first.btn2_text'))
                            <a href="{{ section('Growing Opportunities.data.first.btn2_link') }}" class="btn btn--primary">{{ section('Growing Opportunities.data.first.btn2_text') }}</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <img src="{{ section('Growing Opportunities.data.first.image') }}" alt="{{ section('Growing Opportunities.data.first.alt_text') }}">
                    </div>
                </div>
            </div>
        </section>
        {{-- End of Growing Opportunities --}}

        {{-- Start  --}}
        {{-- <section class="chapters wrapper image-background margin-top90">
            <img src="{{ asset('public/images/map-bg.jpg') }}" alt="Chapters BG">
            <div class="container-max">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="map-content">
                            <h2>Chapters</h2>
                            <div class="btn-wrap">
                                <a href="#" class="btn btn--secondary">View All Chapters</a>
                            </div>
                        </div>
                        <div class="map"></div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- End of Chapters --}}

        <?php
        // $markers = array(
        //     // your example['Palace of Westminster, London', 51.499633,-0.124755]
        //     array(
        //         'Palace of Westminster, London',
        //         51.499633,
        //         -0.124755
        //     ),
        //     array(
        //         'Westminster Abbey, London',
        //         51.4992453,
        //         -0.1272561
        //     ),
        //     array(
        //         'QEII Centre, London',
        //         51.4997296,
        //         -0.128683
        //     ),
        //     array(
        //         'Winston Churchill Statue, London',
        //         51.5004308,
        //         -0.1275243
        //     ),
        //     array(
        //         'Fitzroy Lodge Amature Boxing Club, London',
        //         51.4954215,
        //         -0.1154758
        //     ),
        //     array(
        //         'Balham Boxing Club, London',
        //         51.4419539,
        //         -0.1336075
        //     )
        // );
        ?>

        {{-- <div id="map_wrapper">
            <div id="map_canvas" class="mapping"></div>
        </div> --}}

          {{-- Start  --}}
          <section class="chapters curl-tail-both">
            {{-- <img src="{{ asset('public/images/about-banner.jpg') }}" alt="Chapters BG"> --}}

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.5879424825084!2d-117.19442028450332!3d32.7501305926623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80deaadf44e40d1b%3A0x22d5d30ead4c5d1e!2s3990%20Old%20Town%20Ave%20C304%2C%20San%20Diego%2C%20CA%2092110%2C%20USA!5e0!3m2!1sen!2sph!4v1580885034023!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            
            <div class="container-max">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="map-content">
                            <h2>Chapters</h2>
                            <div class="btn-wrap">
                                <a href="{{url('chapter')}}" class="btn btn--secondary">View All Chapters</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                      
                    </div>
                </div>
            </div>
        </section>
        {{-- End of Chapters --}}




        {{-- Start  --}}
        <section class="feat-members wrapper margin-both90">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-6 feat-members__left" data-aos="fade-right">
                        <h2>{{ section('Featured Members.data.first.title') }}</h2>
                    </div>
                    <div class="col-md-6 feat-members__right content-middle" data-aos="fade-left">
                        <p>{{ section('Featured Members.data.first.content') }}</p>
                    </div>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-md-12">
                        {{-- feat-members-slider-parent --}}
                        <div class="feat-members-slider-parent">

                       
                            <div class="feat-members-slider">

                                @php($featureds = \App\Models\User::where('is_featured','=',1)->get())                        
                                @if ($featureds->isEmpty())
                                    <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Featured Members</h3>
                                @endif
                                @foreach($featureds as $featured) 
                                    @if ($featured->chapter_id > 0)
                                        @php($chapter = \App\Models\Chapter::find($featured->chapter_id))
                                        @php($chapter_name = $chapter->name)
                                    @else
                                        @php($chapter_name = 'National')
                                    @endif
                                    <div class="feat-members-slider--item">
                                        <a href="#">
                                            <div class="image-holder image-background">
                                                <img src="{{ $featured->profile_image ? asset($featured->profile_image) : asset('public/images/no-image.jpg') }}" alt="Member Image">
                                            </div>
                                            <div class="desc-txt">
                                                <div class="name">{{ $featured->first_name.' '.$featured->last_name }}</div>
                                                <div class="chapter">{{ $chapter_name }}</div>
                                            </div>
                                        </a>
                                    </div>

                                @endforeach

                                </div>
                                {{-- feat-members-slider --}}

                                {{-- end of feat-members-slider --}}
                                {{-- slider-controls --}}
                                <div class="feat-members-slider__slider-controls-two">
                                    <button class="slick-prev slick-arrow feat-members-slider__slide-m-prev-two" aria-label="Previous" type="button" style="display: block;">Previous</button>
                                    {{-- <button type="button" class="slide-m-prev-two category-slider__slick--prev"> <i></i> </button> --}}
                                    <div class="feat-members-slider__slide-m-dots-two"></div>
                                    {{-- <button type="button" class="slide-m-next-two category-slider__slick--next"> <i></i> </button> --}}
                                    {{-- <button type="button" class="slide-m-next">next</button> --}}
                                    <button class="slick-next slick-arrow feat-members-slider__slide-m-next-two" aria-label="Next" type="button" style="display: block;">Next</button>
                                </div>


                        </div>
                        {{-- feat-members-slider-parent --}}

                    </div>
                </div>
            </div>
        </section>
        {{-- End of Feaured Members --}}

        {{-- Start  --}}
        <section class="sponsors wrapper margin-both90" data-aos="fade-up">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ section('Featured Sponsors.data.first.title') }}</h2>
                    </div>
                </div>
            </div>
            <div class="sponsor-logo">
                <div class="sponsor-logo__slide">

                    {{-- @foreach( section('Sponsors Images.data') as $data )
                    <div class="sponsor-logo__items"><img src="{{ $data->image }}" alt="{{ $data->alt_text }}"></div>
                    @endforeach --}}

                    @php($featured_sponsors = json_decode($page->other_section))

                    @if (empty($featured_sponsors))
                        <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Featured Sponsor</h3>
                    @endif

                    @foreach($featured_sponsors as $featSponsor)
                        <div class="sponsor-logo__items">
                            <a href="{{ $featSponsor->link }}"><img src="{{ $featSponsor->image }}" alt="{{ $featSponsor->title }}"></a></div>
                    @endforeach

                </div>
                {{-- <img src="{{ asset('public/images/sponsors-logos.png') }}" alt="Sponsors Image"> --}}
            </div>
        </section>
        {{-- End of Sponsors --}}

    </main>

    @include('front.layouts.sections.footer')
</section>
<!--
<style>
    #map_wrapper {
        height: 400px;
    }
    #map_canvas {
        width: 100%;
        height: 100vh;
    }
</style>
<script src="https://maps.googleapis.com/maps/api/js"></script>    
<script type="text/javascript">

    function initialize() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: "roadmap",
            center: new google.maps.LatLng(52.791331, -1.918728), // somewhere in the uk BEWARE center is required
            zoom: 3,
        };

        // Display a map on the page
        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
        map.setTilt(45);

        // Multiple Markers
        var markers = <?php //echo json_encode( $markers ); ?>;

        // Info Window Content
        var infoWindowContent = [
            ['<div class="info_content">' +
            '<h3>London Eye</h3>' +
            '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' + '</div>'],
            ['<div class="info_content">' +
            '<h3>Palace of Westminster</h3>' +
            '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
            '</div>']
        ];

        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow();
        var marker, i;

        // Loop through our array of markers & place each one on the map
        for (i = 0; i < markers.length; i++) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]
            });

            // Allow each marker to have an info window
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }

        //Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
            this.setZoom(10);
            google.maps.event.removeListener(boundsListener);
        });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
--> 