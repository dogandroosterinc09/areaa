<section class="page page--media">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>Photo</h3>
                            <h1>Gallery</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/FAQ-banner.jpg') }}">
        </div>
    </section>


    <main class="main-content">


        <section class="photo-section">
            <div class="container-max">
               <div class="row">
                        <div class="col-lg-4">
                            {{-- media-thumbnail --}}
                            <div class="photo-thumbnail" data-toggle="modal" data-target="#exampleModal">
                            <div class="photo-thumbnail__image image-background">
                                <img src="{{ url('public/images/photo1.jpg') }}">
                            </div>
                            <div class="photo-thumbnail__title text-center">
                                <h3>2019 Global Summit</h3>
                            </div>
                        </div>
                            {{-- media-thumbnail --}}
                    </div>

                    <div class="col-lg-4">
                        {{-- media-thumbnail --}}
                        <div class="photo-thumbnail" data-toggle="modal" data-target="#exampleModal">
                            <div class="photo-thumbnail__image image-background">
                                <img src="{{ url('public/images/photo2.jpg') }}">
                            </div>
                            <div class="photo-thumbnail__title text-center">
                                <h3>2019 Global Summit</h3>
                            </div>
                        </div>
                        {{-- media-thumbnail --}}
                    </div>

                    <div class="col-lg-4">
                        {{-- media-thumbnail --}}
                        <div class="photo-thumbnail" data-toggle="modal" data-target="#exampleModal">
                            <div class="photo-thumbnail__image image-background">
                                <img src="{{ url('public/images/photo3.jpg') }}">
                            </div>
                            <div class="photo-thumbnail__title text-center">
                                <h3>2019 Global Summit</h3>
                            </div>
                        </div>
                        {{-- media-thumbnail --}}
                    </div>

                    <div class="col-lg-4">
                        {{-- media-thumbnail --}}
                        <div class="photo-thumbnail" data-toggle="modal" data-target="#exampleModal">
                            <div class="photo-thumbnail__image image-background">
                                <img src="{{ url('public/images/photo4.jpg') }}">
                            </div>
                            <div class="photo-thumbnail__title text-center">
                                <h3>2019 Global Summit</h3>
                            </div>
                        </div>
                        {{-- media-thumbnail --}}
                    </div>



                    <div class="col-lg-4">
                        {{-- media-thumbnail --}}
                        <div class="photo-thumbnail" data-toggle="modal" data-target="#exampleModal">
                            <div class="photo-thumbnail__image image-background">
                                <img src="{{ url('public/images/photo5.jpg') }}">
                            </div>
                            <div class="photo-thumbnail__title text-center">
                                <h3>2019 Global Summit</h3>
                            </div>
                        </div>
                        {{-- media-thumbnail --}}
                    </div>    


                    <div class="col-lg-4">
                        {{-- media-thumbnail --}}
                        <div class="photo-thumbnail" data-toggle="modal" data-target="#exampleModal">
                            <div class="photo-thumbnail__image image-background">
                                <img src="{{ url('public/images/photo6.jpg') }}">
                            </div>
                            <div class="photo-thumbnail__title text-center">
                                <h3>2019 Global Summit</h3>
                            </div>
                        </div>
                        {{-- media-thumbnail --}}
                    </div>    


                    <div class="col-lg-4">
                        {{-- media-thumbnail --}}
                        <div class="photo-thumbnail" data-toggle="modal" data-target="#exampleModal">
                            <div class="photo-thumbnail__image image-background">
                                <img src="{{ url('public/images/photo7.jpg') }}">
                            </div>
                            <div class="photo-thumbnail__title text-center">
                                <h3>2019 Global Summit</h3>
                            </div>
                        </div>
                        {{-- media-thumbnail --}}
                    </div>    


                    <div class="col-lg-12 col-md-12 text-center">
                        <a href="#" id="loadMore" class="btn btn--primary"> load more</a>
                    </div>
               </div>           


            </div>
        </section>

        <!-- Modal -->
        <div class="photo-modal modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="photo-modal__gallery">
                                    <div class="photo-modal__gallery--item image-background">
                                        <img src="{{ url('public/images/photo-preview.jpg') }}">
                                    </div>
                                    <div class="photo-modal__gallery--item image-background">
                                        <img src="{{ url('public/images/photo2.jpg') }}">
                                    </div>
                                    <div class="photo-modal__gallery--item image-background">
                                        <img src="{{ url('public/images/photo3.jpg') }}">
                                    </div>
                                    <div class="photo-modal__gallery--item image-background">
                                        <img src="{{ url('public/images/photo4.jpg') }}">
                                    </div>
                                    <div class="photo-modal__gallery--item image-background">
                                        <img src="{{ url('public/images/photo-preview.jpg') }}">
                                    </div>
                                    <div class="photo-modal__gallery--item image-background">
                                        <img src="{{ url('public/images/photo2.jpg') }}">
                                    </div>
                                    <div class="photo-modal__gallery--item image-background">
                                        <img src="{{ url('public/images/photo3.jpg') }}">
                                    </div>
                                    <div class="photo-modal__gallery--item image-background">
                                        <img src="{{ url('public/images/photo4.jpg') }}">
                                    </div>
                                    <div class="photo-modal__gallery--item image-background">
                                        <img src="{{ url('public/images/photo-preview.jpg') }}">
                                    </div>
                                    <div class="photo-modal__gallery--item image-background">
                                        <img src="{{ url('public/images/photo2.jpg') }}">
                                    </div>
                                    <div class="photo-modal__gallery--item image-background">
                                        <img src="{{ url('public/images/photo3.jpg') }}">
                                    </div>
                                    <div class="photo-modal__gallery--item image-background">
                                        <img src="{{ url('public/images/photo4.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="photo-modal__content">
                                    <div class="photo-modal__big-image image-background">
                                        <img src="{{ url('public/images/photo-preview.jpg') }}">
                                    </div>
                                    <div class="photo-modal__title">
                                        <h3>2019 Global Summit</h3>
                                    </div>
                                    <div class="photo-modal__description">
                                        <p>Lorem ipsum dolor sit amet, a aliquam at. Egestas aliquam. Dignissim ridiculus, metus sit risus pulvinar duis commodo, condimentum massa neque dui urna mi sed. Sed duis lacinia ac felis elit, morbi lobortis leo vestibulum sapien tellus varius, amet ea nunc integer arcu, mauris pulvinar, arcu leo aliquet fuga sed. In ligula nisl non ut luctus neque. Aliquam ridiculus eget in porttitor, et justo, ut luctus a felis, scelerisque magna. 
                                            Vestibulum magnis viverra eu aliquam. Amet vel erat in lorem id id, mi et, nec facilisis porta nullam sed nec cum. Integer pharetra et praesent habitasse dolor, mi pede suspendisse sed nec varius, duis fusce etiam ante orci eu.
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>



        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>