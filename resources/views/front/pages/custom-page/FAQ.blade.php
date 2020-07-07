<section class="page page--FAQ">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner" data-aos="fade-up">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            {!! $page->content !!}
                            <!-- <h1>Frequently </br>
                                Asked </br>
                                Questions</h1> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url($page->attachment) }}">
            <!-- <img src="{{ url('public/images/FAQ-banner.jpg') }}"> -->
        </div>
    </section>


    <main class="main-content">


        <section class="faq-navigation" data-aos="fade-up">
            <div class="container-max">
                <div class="row">

                    @foreach( section('FAQ Contact Details.data') as $data ) 
                        <div class="col-lg-4 text-center">
                            <div class="navigation-icon__item">
                                <div class="navigation-icon__icon">
                                   <div class="navigation-icon__icon--object menu-icon menu-icon--{{ $data->icon }}"></div>
                                </div>
                                <div class="navigation-icon__title">
                                    <h3>{{ $data->title }}</h3>
                                    <p>{{ $data->content }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <?php /* <div class="col-lg-4 text-center">
                        <div class="navigation-icon__item">
                            <div class="navigation-icon__icon">
                               <div class="navigation-icon__icon--object menu-icon menu-icon--location">
    
                               </div>
                            </div>
                            <div class="navigation-icon__title">
                                <h3> AREAA National</h3>
                                <p>{{ section('Contact Us.data.first.loc_text') }}</p>
                                <!-- <p>3990 Old Town Avenue C304,
                                    San Diego, CA 92110</p> -->
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 text-center">
                        <div class="navigation-icon__item">
                            <div class="navigation-icon__icon">
                               <div class="navigation-icon__icon--object menu-icon menu-icon--phone">
    
                               </div>
                            </div>
                            <div class="navigation-icon__title">
                                <h3> Support Phone #</h3>
                                <p>Contact: <a href="{{ section('Contact Us.data.first.tel_link') }}"> {{ section('Contact Us.data.first.tel_text') }}</a></p>
                                <!-- <p>Contact: <a href="tel:7957873"> 795-7873</a></p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 text-center">
                        <div class="navigation-icon__item">
                            <div class="navigation-icon__icon">
                               <div class="navigation-icon__icon--object menu-icon menu-icon--email">
    
                               </div>
                            </div>
                            <div class="navigation-icon__title">
                                <h3> Support Email</h3>
                                <p>Email: <a href="{{ section('Contact Us.data.first.mail_link') }}">{{ section('Contact Us.data.first.mail_text') }}</a></p>
                                <!-- <p>Email: <a href="mailto:contact@areaa.org">contact@areaa.org</a></p> -->
                            </div>
                        </div>
                    </div> */ ?>

                </div>
            </div>
        </section>


        <section>
            <div class="container-max" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">
                        <!--Accordion wrapper-->
                            <div class="accordion md-accordion moreBox" id="accordionEx" role="tablist" aria-multiselectable="true">
                            @php ($faqs = \App\Models\Faq::all())
                            @foreach ($faqs as $faq)
                            <!-- Accordion card -->
                                <div class="accordion__item @if($loop->first) accordion__item--active @endif moreBox__item moreBox">                                
                                <!-- Card header -->
                                <div class="accordion__head" role="tab" id="one">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#accord-{{ $faq->id }}" aria-expanded="@if($loop->first){{'true'}}@else{{'false'}}@endif"
                                    aria-controls="accord-one" @if(!$loop->first) class="collapsed" @endif>
                                    <h5>
                                        {{ $faq->question }}
                                    </h5>
                                    <i class="fas fa-angle-down rotate-icon"></i>
                                    </a>
                                </div>
                            
                                <!-- Card body -->
                                <div id="accord-{{ $faq->id }}" class="collapse @if($loop->first) show @endif accordion__content" role="tabpanel" aria-labelledby="one"
                                    data-parent="#accordionEx">
                                    <div class="card-body">
                                    {!! $faq->answer !!}
                                    </div>
                                </div>
                        
                            </div>
                            <!-- Accordion card -->
                            @endforeach

                                

                            {{-- commented out for reference
                                <!-- Accordion card -->
                                <div class="accordion__item accordion__item--active moreBox__item moreBox">
                            
                                    <!-- Card header -->
                                    <div class="accordion__head" role="tab" id="one">
                                        <a data-toggle="collapse" data-parent="#accordionEx" href="#accord-one" aria-expanded="true"
                                        aria-controls="accord-one">
                                        <h5>
                                            Who Are We?
                                        </h5>
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                        </a>
                                    </div>
                                
                                    <!-- Card body -->
                                    <div id="accord-one" class="collapse show accordion__content" role="tabpanel" aria-labelledby="one"
                                        data-parent="#accordionEx">
                                        <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                        </div>
                                    </div>
                            
                                </div>
                                <!-- Accordion card -->
                            
                                <!-- Accordion card -->
                                <div class="accordion__item moreBox__item moreBox">
                            
                                    <!-- Card header -->
                                    <div class="accordion__head" role="tab" id="two">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#accord-two"
                                        aria-expanded="false" aria-controls="accord-two">
                                        <h5>
                                            What is AREAA?
                                        </h5>
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                        </a>
                                    </div>
                                
                                    <!-- Card body -->
                                    <div id="accord-two" class="collapse accordion__content" role="tabpanel" aria-labelledby="two"
                                        data-parent="#accordionEx">
                                        <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                        </div>
                                    </div>
                            
                                </div>
                                <!-- Accordion card -->
                            
                                <!-- Accordion card -->
                                <div class="accordion__item moreBox__item moreBox">
                            
                                    <!-- Card header -->
                                    <div class="accordion__head" role="tab" id="three">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#accord-three"
                                        aria-expanded="false" aria-controls="accord-three">
                                        <h5>
                                            Partnership Opportunities: Want to join AREAA?
                                        </h5>
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                        </a>
                                    </div>
                                
                                    <!-- Card body -->
                                    <div id="accord-three" class="collapse accordion__content" role="tabpanel" aria-labelledby="three"
                                        data-parent="#accordionEx">
                                        <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                        </div>
                                    </div>
                            
                                </div>
                                <!-- Accordion card -->

                                <!-- Accordion card -->
                                <div class="accordion__item moreBox__item moreBox">
                                                            
                                    <!-- Card header -->
                                    <div class="accordion__head" role="tab" id="four">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#accord-four"
                                        aria-expanded="false" aria-controls="accord-four">
                                        <h5>
                                            What are the benefits of having AREAA as a partner?

                                        </h5>
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id="accord-four" class="collapse accordion__content" role="tabpanel" aria-labelledby="four"
                                        data-parent="#accordionEx">
                                        <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->

                                <!-- Accordion card -->
                                <div class="accordion__item moreBox__item moreBox">
                                                            
                                    <!-- Card header -->
                                    <div class="accordion__head" role="tab" id="five">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#accord-five"
                                        aria-expanded="false" aria-controls="accord-five">
                                        <h5>
                                            How much does AREAA Membership cost?

                                        </h5>
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id="accord-five" class="collapse accordion__content" role="tabpanel" aria-labelledby="five"
                                        data-parent="#accordionEx">
                                        <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->

                                <!-- Accordion card -->
                                <div class="accordion__item moreBox__item moreBox">
                                                        
                                    <!-- Card header -->
                                    <div class="accordion__head" role="tab" id="six">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#accord-six"
                                        aria-expanded="false" aria-controls="accord-six">
                                        <h5>
                                            How Do I Update My Profile?

                                        </h5>
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id="accord-six" class="collapse accordion__content" role="tabpanel" aria-labelledby="six"
                                        data-parent="#accordionEx">
                                        <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->

                                <!-- Accordion card -->
                                <div class="accordion__item moreBox__item moreBox">
                                                        
                                    <!-- Card header -->
                                    <div class="accordion__head" role="tab" id="seven">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#accord-seven"
                                        aria-expanded="false" aria-controls="accord-seven">
                                        <h5>
                                            Can I Become a AREAA.org Member If I Don’t Live In The United States?

                                        </h5>
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id="accord-seven" class="collapse accordion__content" role="tabpanel" aria-labelledby="seven"
                                        data-parent="#accordionEx">
                                        <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->

                                <!-- Accordion card -->
                                <div class="accordion__item moreBox__item moreBox">
                                                        
                                    <!-- Card header -->
                                    <div class="accordion__head" role="tab" id="eight">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#accord-eight"
                                        aria-expanded="false" aria-controls="accord-eight">
                                        <h5>
                                            What are the benefits of having AREAA as a partner?


                                        </h5>
                                        <i class="fas fa-angle-down rotate-icon"></i>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id="accord-eight" class="collapse accordion__content" role="tabpanel" aria-labelledby="eight"
                                        data-parent="#accordionEx">
                                        <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                        labore sustainable VHS.
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->
                            --}}



                               {{-- Update resources/assets/js/static/custom/custom-loadmore.js and run 'npm run dev' on git bash --}}
                                @if(count($faqs) > 13)
                                <div class="accordion__button text-center">
                                    <a href="#" id="loadMore" class="btn btn--primary"> Load more</a>
                                </div>
                                @endif
                            
                            </div>
                            <!-- Accordion wrapper -->

                            
                    </div>


                </div>
            </div>
        </section>


        
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>