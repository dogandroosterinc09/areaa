<section class="homepage homepage--main">
    @include('front.layouts.sections.header')
    @include('front.pages.custom-page.sections.slider')

    <main class="main-content">
        {{-- Start  --}}
        <section class="events-camp wrapper padding-top90" data-aos="fade-up">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-10">
                        <h2>Events & Campaigns</h2>
                    </div>
                    <div class="col-md-2 content-middle">
                        <a href="{{url('events')}}" class="btn btn--secondary">View All</a>
                    </div>
                </div>
            </div>

            <div class="events-camp-parent-holder">
                <div class="events-camp-slider">

                    @php($events = \App\Models\Event::all())                        
                    @if ($events->isEmpty())
                        <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Events.</h3>
                    @endif
                    @foreach($events as $event) 
                        <div class="events-camp-slider--item">
                            <a href="{{ $event->url }}">
                                <div class="img-holder image-background">
                                    <img src="{{ $event->attachment ? optional($event->attachment)->url : asset('public/images/watermark.jpg') }}" alt="Events Image">
                                </div>
                                <div class="title">{{ (strlen($event->name)>27)? substr($event->name, 0,27).' ...' : $event->name }}<span><i></i></span></div>
                            </a>
                        </div>
                    @endforeach

    <!--                 <div class="events-camp-slider--item">
                        <a href="#">
                            <div class="img-holder image-background">
                                <img src="{{ asset('public/images/events-img1.jpg') }}" alt="Events Image">
                            </div>
                            <div class="title">Leadership Summit <span><i></i></span></div>
                        </a>
                    </div>
                    <div class="events-camp-slider--item">
                        <a href="#">
                            <div class="img-holder image-background">
                                <img src="{{ asset('public/images/events-img2.jpg') }}" alt="Events Image">
                            </div>
                            <div class="title">Regional Retreats <span><i></i></span></div>
                        </a>
                    </div>
                    <div class="events-camp-slider--item">
                        <a href="#">
                            <div class="img-holder image-background">
                                <img src="{{ asset('public/images/events-img3.jpg') }}" alt="Events Image">
                            </div>
                            <div class="title">Global & Luxury Summit <span><i></i></span></div>
                        </a>
                    </div>
                    <div class="events-camp-slider--item">
                        <a href="#">
                            <div class="img-holder image-background">
                                <img src="{{ asset('public/images/events-img4.jpg') }}" alt="Events Image">
                            </div>
                            <div class="title">National Convention <span><i></i></span></div>
                        </a>
                    </div>
                    <div class="events-camp-slider--item">
                        <a href="#">
                            <div class="img-holder image-background">
                                <img src="{{ asset('public/images/events-img1.jpg') }}" alt="Events Image">
                            </div>
                            <div class="title">Leadership Summit <span><i></i></span></div>
                        </a>
                    </div> -->
                </div>
                {{-- slider-controls --}}
                <div class="slide-m-dots-two">
                    <button class="slick-prev slick-arrow slide-m-prev-two" aria-label="Previous" type="button" style="display: block;">Previous</button>
                    {{-- <button type="button" class="slide-m-prev-two category-slider__slick--prev"> <i></i> </button> --}}
                    <div class="slick-dots"></div>
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
                            <div class="content-text">
                                {!! section('Become a Member.data.first.content') !!}
                                <br/>

                                <div class="become-member__button">
                                    <a href="{{ section('Become a Member.data.first.btn1_link') }}" class="btn btn--secondary margin-right20">{{ section('Become a Member.data.first.btn1_text') }}</a> 
                                    <a href="{{ section('Become a Member.data.first.btn2_link') }}" class="btn btn--primary">{{ section('Become a Member.data.first.btn2_text') }}</a>
                                </div>
                               
                            </div>
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
                            @foreach( section('Partnership Levels.data') as $data )
                            <div class="partnership-level--item">
                                <div class="icon {{ $data->icon }}"></div>
                                <div class="content-txt">
                                    <h3>{{ $data->title }}</h3>
                                    <p>{{ $data->content }}</p>
                                </div>
                            </div>
                            @endforeach                            
                            <div class="btn-wrap">
                                <a href="{{ section('Partnership.data.first.btn1_link') }}" class="btn btn--secondary margin-right20">{{ section('Partnership.data.first.btn1_text') }}</a> <a href="{{ section('Partnership.data.first.btn2_link') }}" class="btn btn--primary">{{ section('Partnership.data.first.btn2_text') }}</a>
                            </div>
                        </div>
                         {{-- partnership-level --}}
                    </div>
                    <div class="col-md-6 partnership__right content-middle">
                        
                        {{-- big-advertisement --}}
                        <div class="big-advertisement" data-aos="fade-up">
                            <div class="big-advertisement__slick">
                                <div class="big-advertisement__slick--item">
                                    <a href="#">
                                        <img src="{{ asset('public/images/advertisement-big.jpg') }}" alt="ads">   
                                     </a>
                                </div>
                                <div class="big-advertisement__slick--item">
                                    <a href="https://www.wellsfargo.com/mortgage/" target="_blank">
                                        <img src="{{ asset('public/images/advertisement-wellfargo.jpg') }}" alt="wellfargo"> 
                                    </a>  
                                </div>
                                <div class="big-advertisement__slick--item">
                                    <a href="https://www.wellsfargo.com/mortgage/" target="_blank">
                                        <img src="{{ asset('public/images/advertisement-bankamerica.jpg') }}" alt="bankamerica"> 
                                    </a>  
                                </div>
                                <div class="big-advertisement__slick--item">
                                    <a href="#">
                                        <img src="{{ asset('public/images/advertisement-citi.jpg') }}" alt="citi"> 
                                    </a>  
                                </div>
                                <div class="big-advertisement__slick--item">
                                    <a href="#">
                                        <img src="{{ asset('public/images/advertisement-usbank.jpg') }}" alt="usbank"> 
                                    </a>  
                                </div>
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
                            <a href="{{ section('Growing Opportunities.data.first.btn1_link') }}" class="btn btn--secondary margin-right20">{{ section('Growing Opportunities.data.first.btn1_text') }}</a> <a href="{{ section('Growing Opportunities.data.first.btn2_link') }}" class="btn btn--primary">{{ section('Growing Opportunities.data.first.btn2_text') }}</a>
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

<!--                             <div class="feat-members-slider--item">
                                <a href="#">
                                    <div class="image-holder image-background">
                                        <img src="{{ asset('public/images/member-img1.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="desc-txt">
                                        <div class="name">May Marcus</div>
                                        <div class="chapter">San Diego Chapter</div>
                                    </div>
                                </a>
                            </div>
                            <div class="feat-members-slider--item">
                                <a href="#">
                                    <div class="image-holder image-background">
                                        <img src="{{ asset('public/images/member-img2.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="desc-txt">
                                        <div class="name">May Marcus</div>
                                        <div class="chapter">San Diego Chapter</div>
                                    </div>
                                </a>
                            </div>
                            <div class="feat-members-slider--item">
                                <a href="#">
                                    <div class="image-holder image-background">
                                        <img src="{{ asset('public/images/member-img3.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="desc-txt">
                                        <div class="name">May Marcus</div>
                                        <div class="chapter">San Diego Chapter</div>
                                    </div>
                                </a>
                            </div>
                            <div class="feat-members-slider--item">
                                <a href="#">
                                    <div class="image-holder image-background">
                                        <img src="{{ asset('public/images/member-img4.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="desc-txt">
                                        <div class="name">May Marcus</div>
                                        <div class="chapter">San Diego Chapter</div>
                                    </div>
                                </a>
                            </div>
                            <div class="feat-members-slider--item">
                                <a href="#">
                                    <div class="image-holder image-background">
                                        <img src="{{ asset('public/images/member-img5.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="desc-txt">
                                        <div class="name">May Marcus</div>
                                        <div class="chapter">San Diego Chapter</div>
                                    </div>
                                </a>
                            </div>
                            <div class="feat-members-slider--item">
                                <a href="#">
                                    <div class="image-holder image-background">
                                        <img src="{{ asset('public/images/member-img1.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="desc-txt">
                                        <div class="name">May Marcus</div>
                                        <div class="chapter">San Diego Chapter</div>
                                    </div>
                                </a>
                            </div> -->
                        </div>
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
                    @foreach( section('Sponsors Images.data') as $data )
                    <div class="sponsor-logo__items"><img src="{{ $data->image }}" alt="{{ $data->alt_text }}"></div>                    
                    @endforeach                    
                </div>
                {{-- <img src="{{ asset('public/images/sponsors-logos.png') }}" alt="Sponsors Image"> --}}
            </div>
        </section>
        {{-- End of Sponsors --}}

    </main>

    @include('front.layouts.sections.footer')
</section>