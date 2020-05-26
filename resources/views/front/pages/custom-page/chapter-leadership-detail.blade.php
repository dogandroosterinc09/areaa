<section class="page-chapter page-chapter--detail page-chapter-aloha page-chapter-aloha--leadership-detail">
@include('front.layouts.sections.chapter.header_chapter')

    {{-- need to dynamic this sub  --}}
    <section class="sub-banner" data-aos="fade-up">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h1>{{ $chapter_board_member->name }}</h1>
                            <h3>{{ $chapter_board_member->position }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ optional($chapter_board_member->attachment)->url ? optional($chapter_board_member->attachment)->url : asset('public/images/no-pix.jpg') }}">
        </div>
    </section>



    <main class="main-content">

        <section class="board-detail-content" data-aos="fade-up">
            <div class="container-max">
                <div class="col-lg-12 text-center">
                    @if($chapter_board_member->bio)
                    {!! $chapter_board_member->bio !!}
                    @else
                    <div class="board-detail-content__message">
                        “Lorem ipsum dolor sit amet, eget etiam ante lectus etiam, ligula nulla. Enim tellus morbi consequat arcu, lacus dapibus lectus sagittis.“
                    </div>

                    <div class="board-detail-content__content">
                        <p>Lorem ipsum dolor sit amet, eget etiam ante lectus etiam, ligula nulla. Enim tellus morbi consequat arcu, lacus dapibus lectus sagittis faucibus nisl, luctus metus. Ultricies suscipit vestibulum quam maxime, potenti luctus sed sit. Fames sit, curabitur mus mi libero risus dui. Libero felis a, enim faucibus ut mattis, praesent ac felis eget non libero malesuada, condimentum et sit id velit explicabo et. Erat morbi hendrerit. Magna non a urna nunc, scelerisque sodales fusce interdum donec, aliquet dolor ante porttitor. Porttitor id lectus lobortis eu nullam irure, ut id, non ut interdum fermentum sapien luctus, ac turpis ipsum vel ut aliquam et. Amet tristique per turpis. Ac morbi laoreet auctor omnis, voluptatum dolor, lorem fermentum justo id ipsum, sociosqu mauris pellentesque, praesent viverra in integer dapibus sapien molestie. Pharetra eu condimentum, neque interdum accumsan nemo, nulla mauris enim ut nec sit sollicitudin, aliquam quis in risus nisl dui, a etiam suscipit velit ultrices lectus in.</p>
                        <p>Lorem ipsum dolor sit amet, eget etiam ante lectus etiam, ligula nulla. Enim tellus morbi consequat arcu, lacus dapibus lectus sagittis faucibus nisl, luctus metus. Ultricies suscipit vestibulum quam maxime, potenti luctus sed sit. Fames sit, curabitur mus mi libero risus dui. Libero felis a, enim faucibus ut mattis, praesent ac felis eget non libero malesuada, condimentum et sit id velit explicabo et. Erat morbi hendrerit. Magna non a urna nunc, scelerisque sodales fusce interdum donec, aliquet dolor ante porttitor. Porttitor id lectus lobortis eu nullam irure, ut id, non ut interdum fermentum sapien luctus, ac turpis ipsum vel ut aliquam et. Amet tristique per turpis. Ac morbi laoreet auctor omnis, voluptatum dolor, lorem fermentum justo id ipsum, sociosqu mauris pellentesque, praesent viverra in integer dapibus sapien molestie. Pharetra eu condimentum, neque interdum accumsan nemo, nulla mauris enim ut nec sit sollicitudin, aliquam quis in risus nisl dui, a etiam suscipit velit ultrices lectus in.</p>
                    </div>
                    @endif
                </div>
            </div>
        </section>


        <section class="next-board">
            <div class="container-max">
                <div class="row">
                    <div class="col-lg-6 next-board__left" data-aos="fade-right">
                        <div class="next-board__item">
                            @if($previousBoardMember)
                            <div class="next-board__image">
                                <img src="{{ optional($previousBoardMember->attachment)->url ? optional($previousBoardMember->attachment)->url : asset('public/images/no-pix.jpg') }}">
                            </div>
                            <div class="next-board__content">
                                <a href="{{ route('chapter_board_member.detail', ['slug'=>$chapter->slug,'board_slug'=>$previousBoardMember->slug]) }}">
                                    <i class="fas fa-angle-left"></i>Previous
                                    <h3>{{ $previousBoardMember->name }}</h3>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 next-board__right" data-aos="fade-left">
                        <div class="next-board__item">
                            @if($nextBoardMember)
                            <div class="next-board__content">
                                <a href="{{ route('chapter_board_member.detail', ['slug'=>$chapter->slug,'board_slug'=>$nextBoardMember->slug]) }}">
                                    Next<i class="fas fa-angle-right"></i>
                                    <h3>{{ $nextBoardMember->name }}</h3>
                                </a>
                            </div>
                            <div class="next-board__image">
                                <img src="{{ optional($nextBoardMember->attachment)->url ? optional($nextBoardMember->attachment)->url : asset('public/images/no-pix.jpg') }}">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    @include('front.layouts.sections.chapter.footer_chapter')
</section>