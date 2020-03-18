<section class="page page--about-us">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>Learn More</h3>
                            <h1>About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/about-banner.jpg') }}">
        </div>
    </section>


    <main class="main-content">


        {{-- our-mission section  --}}
        <section class="our-mission">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-6 our-mission__left">
                        <img src="{{ url('public/images/mission-object.png') }}">
                    </div>
                    <div class="col-md-6 our-mission__right content-middle">
                        <div class="our-mission__content">

                            <h2>{{ section('Our Mission.data.first.title') }}</h2>

                            <p>{{ section('Our Mission.data.first.content') }}</p>
                            <a href="{{ section('Our Mission.data.first.btn_link') }}" class="btn btn btn--secondary">{{ section('Our Mission.data.first.btn_text') }}</a>
                        </div>

                    </div>
                </div>
            </div> {{-- end of default-content--row --}}
        </section> {{-- end of default-content --}}



        {{-- need to dynamic this sub  --}}
        <section class="masking-background">
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
                <img src="{{ url('public/images/our-story-image.jpg') }}">
            </div>
        </section>






        {{-- story section  --}}
        <section class="goals">
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
    
                        <div class="col-lg-6">
                            <div class="hightlight__left">
                                <h4>{{ section('Membership.data.first.title') }}</h4>
                                <div class="btn-group">
                                     <a href="{{ section('Membership.data.first.btn1_link') }}" class="btn btn btn--secondary">{{ section('Membership.data.first.btn1_text') }}</a>
                                     <a href="{{ section('Membership.data.first.btn2_link') }}" class="btn btn btn--primary">{{ section('Membership.data.first.btn2_text') }}</a>
                                </div>
                            </div>
                          
                        </div>

                        <div class="col-lg-6">
                            <div class="hightlight__right">
                                 <p>{{ section('Membership.data.first.content') }}</p>
                            </div>
                        </div>
    
                    </div>
                </div> {{-- end of default-content--row --}}
            </section> {{-- end of default-content --}}



              {{-- story section  --}}
              <section class="follow-us">
                <div class="container">
                    <div class="row">
    

                        <div class="col-lg-12 follow-us__wrapper">
                            <div class="primary-heading">
                                <h2>Follow Us</h4>
                                <p>On Instagram </p>
                            </div>

                            <div class="insta-gram">
                                <div class="insta-gram__slide">
                                        <div class="insta-gram__item image-background"> 
                                            <img src="{{ url('public/images/instagram1.jpg') }}"> 
                                        </div>
                                        <div class="insta-gram__item image-background"> 
                                                <img src="{{ url('public/images/instagram2.jpg') }}"> 
                                        </div>
                                        <div class="insta-gram__item image-background"> 
                                                    <img src="{{ url('public/images/instagram3.jpg') }}"> 
                                        </div>
                                        <div class="insta-gram__item image-background"> 
                                            <img src="{{ url('public/images/instagram4.jpg') }}"> 
                                        </div>
                                        <div class="insta-gram__item image-background"> 
                                                <img src="{{ url('public/images/our-story-image.jpg') }}"> 
                                        </div>
                                        <div class="insta-gram__item image-background"> 
                                                    <img src="{{ url('public/images/instagram1.jpg') }}"> 
                                        </div>
                                        <div class="insta-gram__item image-background"> 
                                            <img src="{{ url('public/images/our-story-image.jpg') }}"> 
                                        </div>
                                        <div class="insta-gram__item image-background"> 
                                                <img src="{{ url('public/images/instagram2.jpg') }}"> 
                                        </div>
                                        <div class="insta-gram__item image-background"> 
                                                    <img src="{{ url('public/images/our-story-image.jpg') }}"> 
                                        </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div> {{-- end of default-content--row --}}
            </section> {{-- end of default-content --}}
    



    </main>
    @include('front.layouts.sections.footer')
</section>