<section class="page page--board-detail">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner" data-aos="fade-up">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h1>{{ $boardMember->name }}</h1>
                            <h3>{{ $boardMember->position }}  </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ $boardMember->attachment ? optional($boardMember->attachment)->url : asset('public/images/no-image.jpg') }}">
        </div>
    </section>

    
    <main class="main-content">        

        <section class="board-detail-content" data-aos="fade-up">
            <div class="container-max">
                <div class="col-lg-12 text-center">
                    @if($boardMember->bio) {{-- remove this condition when there is already content --}}
                    <div class="board-detail-content__content">
                        <p>{{ $boardMember->bio }}</p>
                    </div>
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

        
        <section class="next-board" data-aos="fade-up">
            <div class="container-max">
                <div class="row">
                    
                    <div class="col-lg-6 next-board__left">
                        <div class="next-board__item">
                        @if($previousBoardMember)
                            <div class="next-board__image">
                                <img src="{{ $previousBoardMember->attachment ? optional($previousBoardMember->attachment)->url : asset('public/images/no-image.jpg') }}">
                            </div>
                            
                            <div class="next-board__content">
                                <a href="{{ $previousBoardMember->url }}">
                                    <i class="fas fa-angle-left"></i>Previous
                                    <h3>{{ $previousBoardMember->name }}</h3>
                                </a>
                            </div>
                        @endif        
                        </div>
                    </div>
                                        
                    <div class="col-lg-6 next-board__right">
                        <div class="next-board__item">
                        @if($nextBoardMember)       
                            <div class="next-board__content">
                                <a href="{{ $nextBoardMember->url }}">
                                    Next<i class="fas fa-angle-right"></i>
                                    <h3>{{ $nextBoardMember->name }}</h3>
                                </a>
                            </div>
                            <div class="next-board__image">
                                <img src="{{ $nextBoardMember->attachment ? optional($nextBoardMember->attachment)->url : asset('public/images/no-image.jpg') }}">
                            </div>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>