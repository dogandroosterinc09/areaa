<section class="page page--board">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}
    <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>Meet Our </h3>
                            <h1>Executive <br>
                                Board</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/executive-banner.jpg') }}">
        </div>
    </section>
    <main class="main-content">
        <section class="executive-board">
            <div class="container-max">
                <div class="col-lg-12">
                    <div class="board-thumbnail">
                        @php($executives = \App\Models\BoardMember::executives()->orderBy('order')->get())
                        @if($executives->isEmpty())
                            <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Executive Members.</h3>
                        @endif
                        @foreach($executives as $executive)
                            <div class="board-thumbnail__item">
                                <a href="{{ $executive->url }}">
                                    <div class="board-thumbnail__image image-background">
                                        <img src="{{ $executive->attachment ? optional($executive->attachment)->url : asset('public/images/no-image.jpg') }}"
                                             alt="{{ $executive->attachment('avatar')->name }}">
                                    </div>
                                    <div class="board-thumbnail__details">
                                        <h5>{{ $executive->name }}</h5>
                                        <h6>{{ $executive->position }}</h6>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @include('front.pages.custom-page.sections.follow-us')
    </main>
    @include('front.layouts.sections.footer')
</section>