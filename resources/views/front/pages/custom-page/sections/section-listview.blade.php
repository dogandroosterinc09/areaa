<!-- <div class="col-lg-3 col-sm-6">

    {{-- chapter-list-view --}}
    <div class="chapter-list-view">
        <div class="chapter-list-view__item">
            <div class="chapter-list-view__image image-background">
                <a href="{{url('aloha')}}">
                     <img src="{{ url('public/images/chapter-list2.jpg') }}" alt="chapter">
                </a>
            </div>
            <div class="chapter-list-view__title">
                <a href="{{url('aloha')}}">
                     <h3>Aloha</h3>
                </a>
            </div>
        </div>
    </div>
     {{-- chapter-list-view --}}

</div>

<div class="col-lg-3 col-sm-6">
    
    {{-- chapter-list-view --}}
    <div class="chapter-list-view">
        <div class="chapter-list-view__item">
            <div class="chapter-list-view__image image-background">
                <a href="{{url('atlantametro')}}">
                     <img src="{{ url('public/images/chapter-list2.jpg') }}" alt="chapter">
                </a>
            </div>
            <div class="chapter-list-view__title">
                <a href="{{url('atlantametro')}}">
                     <h3>Atlanta Metro</h3>
                </a>
            </div>
        </div>
    </div>
     {{-- chapter-list-view --}}

</div>

<div class="col-lg-3 col-sm-6">
    
    {{-- chapter-list-view --}}
    <div class="chapter-list-view">
        <div class="chapter-list-view__item">
            <div class="chapter-list-view__image image-background">
                <a href="{{url('newyorkeast')}}">
                     <img src="{{ url('public/images/chapter-list3.jpg') }}" alt="chapter">
                </a>
            </div>
            <div class="chapter-list-view__title">
                <a href="{{url('newyorkeast')}}">
                     <h3>New York East</h3>
                </a>
            </div>
        </div>
    </div>
     {{-- chapter-list-view --}}

</div>

<div class="col-lg-3 col-sm-6">
    
    {{-- chapter-list-view --}}
    <div class="chapter-list-view">
        <div class="chapter-list-view__item">
            <div class="chapter-list-view__image image-background">
                <a href="{{url('aloha')}}">
                     <img src="{{ url('public/images/chapter-list4.jpg') }}" alt="chapter">
                </a>
            </div>
            <div class="chapter-list-view__title">
                <a href="{{url('aloha')}}">
                     <h3>Austin</h3>
                </a>
            </div>
        </div>
    </div>
     {{-- chapter-list-view --}}

</div> -->

@foreach(\App\Models\Chapter::all() as $chapter)
<div class="col-lg-3 col-sm-6">

    {{-- chapter-list-view --}}
    <div class="chapter-list-view">
        <div class="chapter-list-view__item">
            <div class="chapter-list-view__image image-background">
                <a href="{{url($chapter->slug)}}">
                     <img src={{ $chapter->thumbnail != "0" ? asset($chapter->thumbnail) : url('public/images/no-image.jpg') }} alt="chapter">
                </a>
            </div>
            <div class="chapter-list-view__title">
                <a href="{{url($chapter->slug)}}">
                     <h3>{{$chapter->name}}</h3>
                </a>
            </div>
        </div>
    </div>
     {{-- chapter-list-view --}}

</div>
@endforeach
