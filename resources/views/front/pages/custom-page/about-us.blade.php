<section class="page page--about-us">
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
                            <!-- <h3>Learn More</h3>
                            <h1>About Us</h1> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url($page->attachment) }}">
            <!-- <img src="{{ url('public/images/about-banner.jpg') }}"> -->
        </div>
    </section>


    <main class="main-content">


        {{-- our-mission section  --}}
        <section class="our-mission">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-6 our-mission__left" data-aos="fade-right">
                        <img src="{{ section('Our Mission.data.first.image') }}" alt="{{ section('Our Mission.data.first.alt_text') }}">
                    </div>
                    <div class="col-md-6 our-mission__right content-middle" data-aos="fade-left">
                        <div class="our-mission__content">
                            <h2>{{ section('Our Mission.data.first.title') }}</h2>
                            <p>{{ section('Our Mission.data.first.content') }}</p>
                            <a href="{{ section('Our Mission.data.first.btn_link') }}" class="btn btn btn--secondary">{{ section('Our Mission.data.first.btn_text') }}</a>
                        </div>
                    </div>
                    <!-- <div class="clear">&nbsp;<br></div> -->

                </div>
            </div> {{-- end of default-content--row --}}
        </section> {{-- end of default-content --}}



        {{-- need to dynamic this sub  --}}
        <section class="masking-background" data-aos="fade-up">
            <div class="masking-background__wrapper container-max">
                <div class="masking-background__item">
                    <div class="container-max masking-background__container">
                        <div class="row">
                            <div class="col-md-6 content-middle">

                                <div class="masking-background__content">
                                    <h2>{{ section('Our Story.data.first.title') }}</h2>
                                    <p>{{ section('Our Story.data.first.content') }}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="masking-background__image image-background">
                <img src="{{ section('Our Story.data.first.image') }}" alt="{{ section('Our Story.data.first.alt_text') }}">
            </div>
        </section>






        {{-- story section  --}}
        <section class="goals" data-aos="fade-up">
            <div class="container-max">
                <div class="row">


                    <div class="col-lg-12 text-center font-weight-bold">
                        <h4 class="">{{ section('Goals.data.first.title') }}</h4>
                    </div>

                    <div class="col-md-12">
                           
                            {{-- comment insert class on UL  --}}
                            {{-- use class bullet-style only if you want one col  --}}
                            {{-- use class bullet-style__col-2 to enable 2cols --}}
                            {{-- use class bullet-style__col-3 to enable 3cols --}}
                            {{-- bullet-style--uppercase the strong tag will capitalize --}}
                            <ul class="bullet-style bullet-style__col-2 bullet-style--uppercase">
                                @foreach( section('Goals List Items.data') as $data )
                                <li>
                                   {!! $data->content !!}
                                </li>
                                @endforeach                                
                            </ul>


                    </div>

                 
              
                </div>
            </div> {{-- end of default-content--row --}}
        </section> {{-- end of default-content --}}



             {{-- story section  --}}
             <section class="hightlight">
                <div class="container">
                    <div class="row">
    
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="hightlight__left">
                                <h4>{{ section('Membership.data.first.title') }}</h4>
                                <div class="btn-group">
                                    @if(section('Membership.data.first.btn1_link'))
                                     <a href="{{ section('Membership.data.first.btn1_link') }}" class="btn btn btn--secondary">{{ section('Membership.data.first.btn1_text') }}</a>
                                    @endif
                                    @if(section('Membership.data.first.btn2_link'))
                                     <a href="{{ section('Membership.data.first.btn2_link') }}" class="btn btn btn--primary">{{ section('Membership.data.first.btn2_text') }}</a>
                                    @endif
                                </div>
                            </div>
                          
                        </div>

                        <div class="col-lg-6" data-aos="fade-left">
                            <div class="hightlight__right">
                                 <p>{{ section('Membership.data.first.content') }}</p>
                            </div>
                        </div>
    
                    </div>
                </div> {{-- end of default-content--row --}}
            </section> {{-- end of default-content --}}


        
            @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>