{{-- page-chapter page-chapter-aloha page-chapter-aloha--leadership --}}
<section class="page-chapter page-chapter--leadership">
    @include('front.layouts.sections.chapter.header_chapter')

    {{-- @include('front.pages.custom-page.sections.chapter-slider-aloha') --}}
        {{-- @include('front.pages.custom-page.sections.banner') --}}
        <section class="sub-banner" data-aos="fade-up">
            <div class="sub-banner__wrapper container-max">
                <div class="sub-banner__item">
                    <div class="container-max sub-banner__content">
                        <div class="row">
                            <div class="col-md-12 sub-banner__content">
                                {!! $chapter_page_leadership->content !!}
                                <!-- <h3>Meet Our </h3>
                                <h1>Leadership <br>
                                    Board</h1> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-banner__image image-background">
                <img src="{{ asset($chapter_page_leadership->banner_image) }}">
            </div>
        </section>

    <main class="main-content">

        @if(isset($chapter_board->board_of_directors) && $chapter_board->executives->count() > 0)
        <section class="executive-board" data-aos="fade-up">
            <div class="container-max">
                <div class="col-lg-12">
                    <h2>Executive board</h2>

                    {{-- board-thumbnail row --}}
                    <div class="board-thumbnail row">

                    @foreach( $chapter_board->executives as $executive )
                        {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{route('chapter_board_member.detail', ['slug'=>$chapter->slug,'board_slug'=>$executive->slug])}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ optional($executive->attachment)->url ? optional($executive->attachment)->url : asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>{{ $executive->name }}</h5>
                                    <h6>{{ $executive->position }}</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}
                    @endforeach

                    </div>
                    {{-- board-thumbnail row --}}

                </div>
            </div>
        </section>
        @else
        <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Executive Members.</h3>
        @endif

        @if(isset($chapter_board->board_of_directors) && $chapter_board->board_of_directors->count() > 0)
        <section class="board-board">
            <div class="container-max">
                <div class="col-lg-12">
                    <h2>Board of directors</h2>

                    {{-- board-thumbnail row --}}
                    <div class="board-thumbnail row">

                    @foreach( $chapter_board->board_of_directors as $board_of_director )
                        {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{route('chapter_board_member.detail', ['slug'=>$chapter->slug,'board_slug'=>$board_of_director->slug])}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ optional($board_of_director->attachment)->url ? optional($board_of_director->attachment)->url : asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>{{ $board_of_director->name }}</h5>
                                    <h6>{{ $board_of_director->position }}</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}
                    @endforeach

                    </div> 
                    {{-- board-thumbnail row --}}
                </div>
            </div>
        </section>
        @endif

        @if(isset($chapter_board->advisory) && $chapter_board->advisory->count() > 0)
        <section class="board-board">
            <div class="container-max">
                <div class="col-lg-12">
                    <h2>Advisory Board</h2>

                    {{-- board-thumbnail row --}}
                    <div class="board-thumbnail row">

                    @foreach( $chapter_board->advisory as $advisory )
                        {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{route('chapter_board_member.detail', ['slug'=>$chapter->slug,'board_slug'=>$advisory->slug])}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ optional($advisory->attachment)->url ? optional($advisory->attachment)->url : asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>{{ $advisory->name }}</h5>
                                    <h6>{{ $advisory->position }}</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}
                    @endforeach
                     
                    </div>
                    {{-- board-thumbnail row --}}

                </div>
            </div>
        </section>
        @endif
        
        @if(isset($chapter_board->no_type) && $chapter_board->no_type->count() > 0)
        <section class="board-board">
            <div class="container-max">
                <div class="col-lg-12">
                    <!-- <h2>Advisory Board</h2> -->

                    {{-- board-thumbnail row --}}
                    <div class="board-thumbnail row">

                    @foreach( $chapter_board->no_type as $no_type )
                        {{-- board-thumbnail --}}
                        <div class="board-thumbnail__item col-lg-3 col-md-6">
                            <a href="{{route('chapter_board_member.detail', ['slug'=>$chapter->slug,'board_slug'=>$no_type->slug])}}">
                                <div class="board-thumbnail__image image-background">
                                    <img src="{{ optional($no_type->attachment)->url ? optional($no_type->attachment)->url : asset('public/images/no-pix.jpg') }}" alt="Member Image">
                                </div>
                                <div class="board-thumbnail__details">
                                    <h5>{{ $no_type->name }}</h5>
                                    <h6>{{ $no_type->position }}</h6>
                                </div>
                            </a>
                        </div>
                        {{-- board-thumbnail --}}
                    @endforeach
                     
                    </div>
                    {{-- board-thumbnail row --}}

                </div>
            </div>
        </section>
        @endif

    </main>
    @include('front.layouts.sections.chapter.footer_chapter')
</section>