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
        <section class="masking-background masking-background__equal masking-background--plain">
                        
                    <div class="container-max masking-background__container registration-login-steps">
                        <div class="row">
                            {{  Form::open([
                                'method' => 'POST',
                                'id' => '',
                                'route' => ['membership-registration.post'],
                                'class' => ''
                                ])
                            }}
                            <div class="col-md-12">

                                      {{-- STEPS --}}
                                      <div id="steps-wizard">
                                        <div class="navbar steps-wizard__header">
                                            <div class="navbar-inner">
                                                <div class="container">
                                                    <ul>
                                                        <li><a href="#tab1" data-toggle="tab">Step 1</a></li>
                                                        <li><a href="#tab2" data-toggle="tab">Step 2</a></li>
                                                        <li><a href="#tab3" data-toggle="tab">Step 3</a></li>
                                                        <li><a href="#tab4" data-toggle="tab">Step 4</a></li>
                                                        <li><a href="#tab5" data-toggle="tab">Step 5</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="bar" class="progress steps-wizard__progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 0%;"></div>
                                        </div>
                                        <div class="tab-content steps-wizard__content">
                                            <div class="tab-pane steps-wizard__items" id="tab1">
                                               step1
                                            </div>
                                            <div class="tab-pane steps-wizard__items" id="tab2">
                                                step2
                                            </div>
                                            <div class="tab-pane steps-wizard__items" id="tab3">
                                                step3
                                            </div>
                                            <div class="tab-pane steps-wizard__items" id="tab4">
                                                step4
                                            </div>
                                            <div class="tab-pane steps-wizard__items" id="tab5">
                                                step5
                                            </div>
                                            <ul class="pager wizard steps-wizard__buttons ">
                                                <li class="previous"><a href="javascript:;" class="btn--prev"><i class="fas fa-arrow-left"></i>Previous</a></li>
                                                <li class="next"><a href="javascript:;" class="btn--next">Next<i class="fas fa-arrow-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                      {{-- STEPS --}}
                            </div>
                        
                         
                        </div>
                    {{ Form::close() }}
                    </div>
            
        </section>


        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>