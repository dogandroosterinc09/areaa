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
                    <div class="col-md-6 our-mission__right">
                        <div class="our-mission__content">
                            <h2>Our Mission</h2>
                            <p>AREAA is dedicated to promoting sustainable homeownership opportunities in Asian American communities by creating a powerful national voice for housing and real estate professionals that serve this dynamic market.</p>
                            <a href="#" class="btn btn btn--secondary">Join AaREAA!</a>
                        </div>

                    </div>
                </div>
            </div> {{-- end of default-content--row --}}
        </section> {{-- end of default-content --}}



        {{-- need to dynamic this sub  --}}
        <section class="masking-background">
            <div class="masking-background__wrapper container-max">
                <div class="masking-background__item">
                    <div class="container-max masking-background__content">
                        <div class="row">
                            <div class="col-md-6 masking-background__content">
                                <h2>Our Story</h2>
                                <p>Founded in 2003, the Asian Real Estate Association of America (AREAA) is a nonprofit professional trade organization dedicated to promoting sustainable homeownership opportunities in Asian American communities by creating a powerful national voice for housing and real estate professionals that serve this dynamic market.</p>
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
        <section class="story">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                       
                            <h3>AREAA Will Accomplish These Goals By: </h3>
                            <ul class="bullet-style">
                                <li>
                                   <strong>Creating a powerful national voice </strong> 
                                    for housing & real estate professionals that serve this dynamic market.
                                </li>
                                <li>
                                    <strong>Advocating for policy positions   </strong>at the national level that will reduce barriers to homeownership for the AAPI community.
                                </li>
                                <li> <strong>Increasing business opportunities </strong> for mortgage & real estate professionals that serve this growing community.</li>
                                <li>
                                    <strong>Hosting National and Local events </strong> to educate & inform members about housing issues & developments affecting the AAPI community.
                                </li>
                                <li><strong>Conducting trade missions</strong> throughout Asia to develop business partnerships & increase brand awareness.
                                </li>
                            </ul>
                    </div>

                    <div class="col-md-6story__right">
                       
                        
                    </div>
              
                </div>
            </div> {{-- end of default-content--row --}}
        </section> {{-- end of default-content --}}



             {{-- story section  --}}
             <section class="hightlight">
                <div class="container">
                    <div class="row">
    
                        <div class="col-md-12">
                           <h4>AREAA’s Membership Represents A Vast array of Cultural, Ethnic, & Professional Backgrounds.</h4>
                           <div class="btn-group">
                                <a href="#" class="btn btn btn--secondary">Join AaREAA!</a>
                                <a href="#" class="btn btn btn--primary">Join AaREAA!</a>
                           </div>
                        </div>
    
                                     
                    </div>
                </div> {{-- end of default-content--row --}}
            </section> {{-- end of default-content --}}
    
    





    </main>
    @include('front.layouts.sections.footer')
</section>