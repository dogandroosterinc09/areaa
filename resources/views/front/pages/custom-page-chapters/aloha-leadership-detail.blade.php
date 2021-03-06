<section class="page-chapter page-chapter--detail page-chapter-aloha page-chapter-aloha--leadership-detail">
    @include('front.layouts.sections.chapter-aloha.header_chapter_aloha')

    {{-- need to dynamic this sub  --}}
    <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h1>Ronda Ching-Day </h1>
                            <h3>President  </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/no-pix.jpg') }}">
        </div>
    </section>



    <main class="main-content">

        <section class="board-detail-content">
            <div class="container-max">
                <div class="col-lg-12 text-center">

                    <div class="board-detail-content__message">
                        “Lorem ipsum dolor sit amet, eget etiam ante lectus etiam, ligula nulla. Enim tellus morbi consequat arcu, lacus dapibus lectus sagittis.“
                    </div>

                    <div class="board-detail-content__content">
                        <p>Lorem ipsum dolor sit amet, eget etiam ante lectus etiam, ligula nulla. Enim tellus morbi consequat arcu, lacus dapibus lectus sagittis faucibus nisl, luctus metus. Ultricies suscipit vestibulum quam maxime, potenti luctus sed sit. Fames sit, curabitur mus mi libero risus dui. Libero felis a, enim faucibus ut mattis, praesent ac felis eget non libero malesuada, condimentum et sit id velit explicabo et. Erat morbi hendrerit. Magna non a urna nunc, scelerisque sodales fusce interdum donec, aliquet dolor ante porttitor. Porttitor id lectus lobortis eu nullam irure, ut id, non ut interdum fermentum sapien luctus, ac turpis ipsum vel ut aliquam et. Amet tristique per turpis. Ac morbi laoreet auctor omnis, voluptatum dolor, lorem fermentum justo id ipsum, sociosqu mauris pellentesque, praesent viverra in integer dapibus sapien molestie. Pharetra eu condimentum, neque interdum accumsan nemo, nulla mauris enim ut nec sit sollicitudin, aliquam quis in risus nisl dui, a etiam suscipit velit ultrices lectus in.</p>
                        <p>Lorem ipsum dolor sit amet, eget etiam ante lectus etiam, ligula nulla. Enim tellus morbi consequat arcu, lacus dapibus lectus sagittis faucibus nisl, luctus metus. Ultricies suscipit vestibulum quam maxime, potenti luctus sed sit. Fames sit, curabitur mus mi libero risus dui. Libero felis a, enim faucibus ut mattis, praesent ac felis eget non libero malesuada, condimentum et sit id velit explicabo et. Erat morbi hendrerit. Magna non a urna nunc, scelerisque sodales fusce interdum donec, aliquet dolor ante porttitor. Porttitor id lectus lobortis eu nullam irure, ut id, non ut interdum fermentum sapien luctus, ac turpis ipsum vel ut aliquam et. Amet tristique per turpis. Ac morbi laoreet auctor omnis, voluptatum dolor, lorem fermentum justo id ipsum, sociosqu mauris pellentesque, praesent viverra in integer dapibus sapien molestie. Pharetra eu condimentum, neque interdum accumsan nemo, nulla mauris enim ut nec sit sollicitudin, aliquam quis in risus nisl dui, a etiam suscipit velit ultrices lectus in.</p>
                    </div>

                </div>
            </div>
        </section>


        <section class="next-board">
            <div class="container-max">
                <div class="row">
                    <div class="col-lg-6 next-board__left">
                        <div class="next-board__item">
                            <div class="next-board__image">
                                <img src="{{ url('public/images/delagate-Bryan-Ahn.jpg') }}">
                            </div>
                            <div class="next-board__content">
                                <a href="#">
                                    <i class="fas fa-angle-left"></i>Previous
                                    <h3>Michael Acevedo</h3>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 next-board__right">
                        <div class="next-board__item">
                           
                            <div class="next-board__content">
                                <a href="#">
                                    Previous<i class="fas fa-angle-right"></i>
                                    <h3>Michael Acevedo</h3>
                                </a>
                            </div>
                            <div class="next-board__image">
                                <img src="{{ url('public/images/delagate-Bryan-Ahn.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    @include('front.layouts.sections.chapter-aloha.footer_chapter_aloha')
</section>