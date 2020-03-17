<section class="page page--resources">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            {{-- <h3>Learn More</h3> --}}
                            <h1>Resources</h1>
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





        {{-- need to dynamic this sub  --}}
        {{-- <section class="masking-background">
            <div class="masking-background__wrapper container-max">
                <div class="masking-background__item">
                    <div class="container-max masking-background__container">
                        <div class="row">
                            <div class="col-md-6 content-middle">

                                <div class="masking-background__content">
                                    <h2>Our Story</h2>
                                    <p>Founded in 2003, the Asian Real Estate Association of America (AREAA) is a nonprofit professional trade organization dedicated to promoting sustainable homeownership opportunities in Asian American communities by creating a powerful national voice for housing and real estate professionals that serve this dynamic market.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="masking-background__image image-background">
                <img src="{{ url('public/images/our-story-image.jpg') }}">
            </div>
        </section> --}}






        {{-- story section  --}}
        <section class="goals">
            <div class="container-max">
                <div class="row">


                    <div class="col-lg-12 text-center font-weight-bold">
                        <h4 class="">AREAA Resources: </h4>
                    </div>

                    <div class="col-md-12">
                           
                            {{-- comment insert class on UL  --}}
                            {{-- use class bullet-style only if you want one col  --}}
                            {{-- use class bullet-style__col-2 to enable 2cols --}}
                            {{-- use class bullet-style__col-3 to enable 3cols --}}
                            {{-- bullet-style--uppercase the strong tag will capitalize --}}
                            <ul class="bullet-style bullet-style__col-2 bullet-style--uppercase">
                                <li>
                                   <strong>2017 Student Debt and Housing Report, by Better Homes and Gardens </strong> <br>
                                   <a href="#">Click here to download the 2017 Student Debt Report</a>
                                </li>
                                <li>
                                    <strong>2016 State of Asia America Report </strong> <br>
                                    <a href="https://www.areaa.org/wp-content/uploads/2013/10/DRAFT-saa16-120816.pdf" target="blank">Click here to download the 2016 State of Asia America Report</a>
                                </li>
                                <li> <strong>2016 Chinese Investment in US Real Estate, by Asia Society </strong>  <br>
                                    <a href="http://asiasociety.org/files/uploads/66files/Asia%20Society%20Breaking%20Ground%20Complete%20Final.pdf" target="blank">Click here to download the 2016 China Investment in US Real Estate Report</a>

                                </li>
                                <li>
                                    <strong>2015 State of Asia America Report </strong>  <br>
                                    <a href="https://www.areaa.org/wp-content/uploads/2013/10/SAA15.pdf" target="blank">Click here to download the 2015 State of Asia America Housing Report</a>
                                </li>
                                
                            </ul>


                    </div>

                 
              
                </div>
            </div> {{-- end of default-content--row --}}
        </section> {{-- end of default-content --}}



          {{-- story section  --}}
          <section class="default-content american-report">
            <div class="container-max">
                <div class="row">


                    <div class="col-md-8">

                            <h2>2018-19 State of Asia America Report</h2>
                            <p>Our annual compilation of data relating to AAPI housing, demographics, education, income, policy, and more is now available.</p>

                            {{-- comment insert class on UL  --}}
                            {{-- use class bullet-style only if you want one col  --}}
                            {{-- use class bullet-style__col-2 to enable 2cols --}}
                            {{-- use class bullet-style__col-3 to enable 3cols --}}
                            {{-- bullet-style--uppercase the strong tag will capitalize --}}
                            <ul class="bullet-style bullet-style__one bullet-style--uppercase">
                                <li>2017 State of Asia America Report 
                                    <a href="https://www.dropbox.com/s/9gtjzt98yfmj0h3/StateofAsia2018_vFINAL_3.pdf?dl=0" target="blank"> Click here to download</a> </li>
                                <li>2016 State of Asia America Report  
                                    <a href="https://www.dropbox.com/s/dvcfj37fk6fstho/STATEOFASIA.pdf?dl=0" target="blank"> Click here to download</a> </li>
                                 </li>
                                <li>2015 State of Asia America Report
                                    <a href="https://www.dropbox.com/s/nca8s4ky353qekt/SAA15.pdf?dl=0" target="blank"> Click here to download</a> </li>
                                </li>
                            </ul>

                            <div class="btn-group">
                                <a href="#" class="btn btn btn--secondary">Download</a>
                           </div>

                    </div>

                    <div class="col-md-4">
                        <img src="{{ url('public/images/area-cover.jpg') }}" alt="chapter title" class="img-fluid">
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