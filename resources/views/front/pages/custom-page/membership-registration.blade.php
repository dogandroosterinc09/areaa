<section class="page page--membership-registration">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    {{-- <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>AREAA</h3>
                            <h1>Benefits</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/benefits-banner.jpg') }}">
        </div>
    </section> --}}


    <main class="main-content">

     
        {{-- need to dynamic this sub  --}}
        <section class="masking-background masking-background--plain">
            <div class="masking-background__wrapper container-max">
                <div class="masking-background__item">
                    <div class="container-max masking-background__container">
                        <div class="row">
                            <div class="col-md-12 content-middle">

                                <div class="masking-background__content">
                                        

                                        {{-- ****************************** --}}
                                        <div id="steps-wizard">
                                            <div class="steps-wizard__title">
                                                <p>Join AREAA Today!</p>
                                                <h2>Join AREAA Today!</h2>
                                            </div>

                                            <div class="navbar steps-wizard__header">
                                                <div class="navbar-inner">
                                                    <div class="container">
                                                        <ul>
                                                            <li>
                                                                <a href="#tab1" data-toggle="tab" class="active">
                                                                    <strong> 1</strong> 
                                                                    <p>Select Chapter</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab2" data-toggle="tab">
                                                                    <strong> 2</strong> 
                                                                    <p>Account Info</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab3" data-toggle="tab">
                                                                    <strong> 3</strong> 
                                                                    <p>Billing & Payment</p>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="bar" class="progress steps-wizard__progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                     aria-valuemax="100" style="width: 0%;"></div>
                                            </div>

                                            <div class="tab-content steps-wizard__content">
                                                <div class="tab-pane steps-wizard__items active" id="tab1">
                                                   
                                                    <div class="steps-wizard__form">

                                                        <div class="steps-wizard__box">
                                                            <label>Select Your Chapter *</label>
                                                            <select>
                                                                <option>San Diego $49.50 now & then $99.00 per Year starting July 1, 2020.</option>
                                                            </select>
                                                        </div>
    
                                                        <p>*Our annual membership renewal date is June 30th. Current charges reflect a prorated amount.
                                                        </p>


                                                    </div>
                                                   

                                                    <div class="steps-wizard__button text-center">
                                                        <a href="#tab2" data-toggle="tab" class="btn btn--next">Next</a>
                                                    </div>

                                                </div>
                                                <div class="tab-pane steps-wizard__items" id="tab2">
                                                    test3
                                                </div>
                                                <div class="tab-pane steps-wizard__items" id="tab3">
                                                    test4
                                                </div>
                                            </div>
                                        </div>

                                        {{-- ****************************** --}}



                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>







        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>