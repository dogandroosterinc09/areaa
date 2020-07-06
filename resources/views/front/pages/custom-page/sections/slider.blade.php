<section class="banner" data-aos="fade-up">
    {{--<div class="banner-overlay image-background">
        <img src="{{ url('public/images/banner/hp-banner-overlay.png') }}">
    </div>--}}

    {{-- content slider  --}}
    <div class="banner__image-slide">
        @foreach(\App\Models\HomeSlide::all() as $home_slide)        
        <div class="banner__image-slide--item">
            <div class="item-left">
                <div class="banner-content-desc">
                    {!! $home_slide->content !!}
                    <a href="{{ $home_slide->button_link }}" class="btn btn--primary">{{ $home_slide->button_label }}</a>
                </div>
            </div>
            <div class="item-right">
                <div class="banner-img-holder image-background">
                    <img src="{{ $home_slide->background_image }}">
                </div>
            </div>
        </div>
        @endforeach

        {{-- comment out for reference 
            <div class="banner__image-slide--item">
                <div class="item-left">
                    <div class="banner-content-desc">
                        <h1>The Voice of the AAPI community</h1>
                        <h2>Fulfilling the American Dream.</h2>
                        <a href="{{url('about-us')}}" class="btn btn--primary">Learn More</a>
                    </div>
                </div>
                <div class="item-right">
                    <div class="banner-img-holder image-background">
                        <img src="{{ url('public/images/banner/hp-banner-img1.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="banner__image-slide--item">
                <div class="item-left">
                    <div class="banner-content-desc">
                        <h1>Become a</h1>
                        <h2>Partnership.</h2>
                        <a href="{{url('our-partners')}}" class="btn btn--primary">Learn More</a>
                    </div>
                </div>
                <div class="item-right">
                    <div class="banner-img-holder image-background">
                        <img src="{{ url('public/images/banner/hp-banner-img2.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="banner__image-slide--item">
                <div class="item-left">
                    <div class="banner-content-desc">
                        <h1>The Voice of the AAPI community</h1>
                        <h2>Events</h2>
                        <a href="{{url('events')}}" class="btn btn--primary">Learn More</a>
                    </div>
                </div>
                <div class="item-right">
                    <div class="banner-img-holder image-background">
                        <img src="{{ url('public/images/about-banner.jpg') }}">
                    </div>
                </div>
            </div>
        --}}

    </div>
    {{-- content slider  --}}

    {{-- slider controller  --}}
    <div class="banner__thumb-slide">
        @foreach(\App\Models\HomeSlide::all() as $home_slide)
        <div class="banner__thumb-slide--item">
            <div class="thumb-holder">
                <a href="#" class="image-background">
                    <img class="target alpha-target" src="{{ asset($home_slide->thumbnail_image) }}">
                    <span>{{$home_slide->thumbnail_text}}</span>
                </a>
            </div>
        </div>
        @endforeach
   

        <!-- <div class="banner__thumb-slide--item">
            <div class="thumb-holder">
                <a href="#" class="image-background">
                    <img class="target alpha-target" src="{{ url('public/images/thumb-1.jpg') }}">
                    <span>Mem-<br>bership</span>
                </a>
            </div>
        </div>
        <div class="banner__thumb-slide--item">
            <div class="thumb-holder">
                <a href="#" class="image-background">
                    <img class="target alpha-target" src="{{ url('public/images/thumb-2.jpg') }}">
                    <span>part-<br>nership</span>
                </a>
            </div>
        </div>
        <div class="banner__thumb-slide--item">
            <div class="thumb-holder">
                <a href="#" class="image-background">
                    <img class="target alpha-target" src="{{ url('public/images/thumb-3.jpg') }}">
                    <span>Events</span>
                </a>
            </div>
        </div> -->
    </div>
    {{-- slider controller  --}}

</section>