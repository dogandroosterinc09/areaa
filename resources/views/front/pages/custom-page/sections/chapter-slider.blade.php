<section class="banner banner__chapter">
    {{--<div class="banner-overlay image-background">
        <img src="{{ url('public/images/banner/hp-banner-overlay.png') }}">
    </div>--}}        

    {{-- content slider  --}}
    <div class="banner__image-slide">
       
        @foreach(\App\Models\ChapterPageHomeslider::where('chapter_id', $chapter->id)->where('is_active', 1)->get() as $slider)
        
        <div class="banner__image-slide--item">
            <div class="item-left">
                <div class="banner-content-desc">
                    {!! $slider->content !!}
                    
                    <a href="{{url($slider->button_link)}}" class="btn btn--primary">{{ $slider->button_label }}</a>
                </div>
            </div>
            <div class="item-right">
                <div class="banner-img-holder image-background">
                    <img src="{{ asset($slider->background_image) }}">
                </div>
            </div>
        </div>

        @endforeach

        <!-- <div class="banner__image-slide--item">
            <div class="item-left">
                <div class="banner-content-desc">
                    <h1>Welcome to AREAA <br>
                        Aloha Chapter</h1>
                    <h3>Educate. Empower. Expand together</h3>
                    {{-- <img src="{{ url('public/images/chapter-newyork.png') }}"> --}}
                    <a href="{{url('membership-registration')}}" class="btn btn--primary">Join AREAA</a>
                </div>
            </div>
            <div class="item-right">
                <div class="banner-img-holder image-background">
                    <img src="{{ url('public/images/chapter-slider-banner.jpg') }}">
                </div>
            </div>
        </div>
        <div class="banner__image-slide--item">
            <div class="item-left">
                <div class="banner-content-desc">
                    <h1>Welcome to AREAA <br>
                        Aloha Chapter</h1>
                    <h3>News & Events</h3>
                    {{-- <img src="{{ url('public/images/chapter-newyork.png') }}"> --}}
                    <a href="{{url('aloha-events')}}" class="btn btn--primary">View More</a>
                </div>
            </div>
            <div class="item-right">
                <div class="banner-img-holder image-background">
                    <img src="{{ url('public/images/chapter-banner2.jpg') }}">
                </div>
            </div>
        </div> -->
    </div>
    {{-- content slider  --}}

    {{-- slider controller  --}}
    <div class="banner__thumb-slide">
    @foreach(\App\Models\ChapterPageHomeslider::where('chapter_id', $chapter->id)->where('is_active', 1)->get() as $slider)
        <div class="banner__thumb-slide--item">
            <div class="thumb-holder">
                <a href="#" class="image-background">
                    <img class="target alpha-target" src="{{ asset($slider->thumbnail_image) }}">
                    <span>{{$slider->thumbnail_text}}</span>
                </a>
            </div>
        </div>
    @endforeach
        <!-- <div class="banner__thumb-slide--item">
            <div class="thumb-holder">
                <a href="#" class="image-background">
                    <img class="target alpha-target" src="{{ url('public/images/thumb-1.jpg') }}">
                    <span>Wel-<br>come</span>
                </a>
            </div>
        </div>
        <div class="banner__thumb-slide--item">
            <div class="thumb-holder">
                <a href="#" class="image-background">
                    <img class="target alpha-target" src="{{ url('public/images/thumb-2.jpg') }}">
                    <span>New</span>
                </a>
            </div>
        </div> -->
     
    </div>
    {{-- slider controller  --}}

</section>